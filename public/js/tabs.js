document.addEventListener('DOMContentLoaded', () => {
  const tabButtons = document.querySelectorAll('.tab-button');

  // Updated classes with !important font weight classes
  const activeClasses = ['bg-[#CABCF8]', 'text-[#551895]', '!text-[#551895]', 'border', 'rounded-md', '!font-semibold'];
  const inactiveClasses = ['text-gray-700', '!text-gray-700', 'bg-transparent', 'border', 'rounded-md', '!font-normal'];

  const setActiveButton = (buttonId) => {
    // First remove all classes
    tabButtons.forEach(btn => {
      btn.classList.remove(...activeClasses, ...inactiveClasses);
      btn.classList.add(...inactiveClasses);
      // Force font weight reset
      btn.style.fontWeight = 'normal';
    });

    const activeBtn = document.getElementById(buttonId);
    if (activeBtn) {
      activeBtn.classList.remove(...inactiveClasses);
      activeBtn.classList.add(...activeClasses);
      // Force font weight update
      activeBtn.style.fontWeight = '600';
      activeBtn.style.color = '#551895';
    }
  };

  const loadTabContent = async (url, buttonId) => {
    const tabContent = document.getElementById('tab-content');
    try {
      const response = await fetch(url);
      if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
      const content = await response.text();
      tabContent.innerHTML = content;

      if (typeof initializeCharts === 'function') initializeCharts();

      setActiveButton(buttonId);
    } catch (error) {
      console.error('Error loading tab content:', error);
      tabContent.innerHTML = `<p class="text-red-500">Failed to load content. Please try again.</p>`;
    }
  };

  tabButtons.forEach(button => {
    button.addEventListener('click', () => {
      loadTabContent(button.dataset.contentRoute, button.id);
    });
  });

  const defaultTab = Array.from(tabButtons).find(btn => btn.dataset.defaultTab === 'true');
  if (defaultTab) {
    fetch(defaultTab.dataset.contentRoute)
      .then(res => res.text())
      .then(content => {
        const tabContent = document.getElementById('tab-content');
        tabContent.innerHTML = content;

        if (typeof initializeCharts === 'function') initializeCharts();

        setActiveButton(defaultTab.id);
      })
      .catch(() => {
        const tabContent = document.getElementById('tab-content');
        tabContent.innerHTML = `<p class="text-red-500">Failed to load content. Please try again.</p>`;
      });
  }
});
