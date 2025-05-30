document.addEventListener('DOMContentLoaded', function() {
    // Dropdown state management
    let activeDropdown = null;
    let activeButton = null;

    // Generic dropdown toggle function
    function toggleDropdown(dropdownId, button) {
        const dropdown = document.getElementById(dropdownId);
        const svg = button.querySelector('svg');
        
        // If clicking the same dropdown that's already open, close it
        if (activeDropdown === dropdown) {
            closeDropdown();
            return;
        }

        // Close any open dropdown
        closeDropdown();

        // Open new dropdown
        dropdown.classList.remove('hidden');
        svg.classList.add('rotate-180');
        button.setAttribute('aria-expanded', 'true');
        
        // Update active elements
        activeDropdown = dropdown;
        activeButton = button;
    }

    // Close active dropdown
    function closeDropdown() {
        if (activeDropdown) {
            activeDropdown.classList.add('hidden');
            activeButton.querySelector('svg').classList.remove('rotate-180');
            activeButton.setAttribute('aria-expanded', 'false');
            activeDropdown = null;
            activeButton = null;
        }
    }

    // Initialize dropdown buttons
    const dropdownButtons = {
        'language': document.querySelector('[data-dropdown="language"]'),
        'profile': document.querySelector('[data-dropdown="profile"]')
    };

    // Add click listeners to dropdown buttons
    Object.entries(dropdownButtons).forEach(([key, button]) => {
        if (button) {
            button.addEventListener('click', (e) => {
                e.stopPropagation();
                toggleDropdown(`${key}Dropdown`, button);
            });
        }
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('[data-dropdown]')) {
            closeDropdown();
        }
    });

    // Close dropdown on ESC key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeDropdown();
        }
    });
});