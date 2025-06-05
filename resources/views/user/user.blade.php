<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <title>@yield('title', 'My Laravel App')</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Add Chart.js to your layout -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    
    {{-- <style>
      /* Custom styles for active tab */
      .tab-button.active {
        background-color: #551895;
        color: white;
      }
    </style> --}}
</head>

<body>
<div class="h-screen">
    <div>
        @include('components.sidebar')
    </div>

     <div>
        @include('components.header')
    </div>

    <div>
        @include('components.breadcums')
    </div>

    <div>
        @include('components.menu')
    </div>

    <div>
     @include('components.user_tab')
    </div>
</div>

{{-- Main Content Wrapper --}}
<div class=" w-[77%] mx-auto mt-45 ml-48">
     <div id="tab-content" class="mt-4">
    </div>
</div>



<script>
    // Add rounded rectangle method globally
    if (!CanvasRenderingContext2D.prototype.roundRect) {
        CanvasRenderingContext2D.prototype.roundRect = function (x, y, w, h, r) {
            if (w < 2 * r) r = w / 2;
            if (h < 2 * r) r = h / 2;
            this.beginPath();
            this.moveTo(x + r, y);
            this.arcTo(x + w, y, x + w, y + h, r);
            this.arcTo(x + w, y + h, x, y + h, r);
            this.arcTo(x, y + h, x, y, r);
            this.arcTo(x, y, x + w, y, r);
            this.closePath();
            return this;
        };
    }

    // Function to initialize charts
    function initializeCharts() {
        const canvas = document.getElementById("lineChart");
        if (!canvas) return;

        // Check if chart already exists and destroy it
        if (window.chartInstance) {
            window.chartInstance.destroy();
        }

        const labels = ["03–07", "10–14", "17–21", "24–28"];
        const sentData = [5, 7, 9, 10];

        // Find max value and its label index
        const maxVal = Math.max(...sentData);
        const maxIndex = sentData.indexOf(maxVal);
        const maxLabel = labels[maxIndex];

        const ctx = canvas.getContext("2d");

        const highlightLabelPlugin = {
            id: 'highlightLabel',
            afterDraw(chart) {
                const {
                    ctx,
                    chartArea: { bottom },
                    scales: { x }
                } = chart;

                const label = maxLabel;
                const xPos = x.getPixelForValue(label);
                const width = 60;
                const height = 28;

                ctx.save();
                ctx.fillStyle = 'white';
                ctx.strokeStyle = 'white';
                ctx.roundRect(
                    xPos - width / 2,
                    bottom + 10,
                    width,
                    height,
                    12
                );
                ctx.fill();

                // Text styling
                ctx.fillStyle = 'black';
                ctx.font = '12px sans-serif';
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                ctx.fillText(label, xPos, bottom + 10 + height / 2);
                ctx.restore();
            },
        };

        window.chartInstance = new Chart(ctx, {
            type: "line",
            data: {
                labels,
                datasets: [
                    {
                        label: "Sent Emails",
                        data: sentData,
                        borderColor: "#5654D4",
                        backgroundColor: "#5654D4",
                        tension: 0.4,
                        fill: false,
                        pointBackgroundColor: "#5654D4",
                        pointBorderColor: "#5654D4",
                    },
                    {
                        label: "Opened Emails",
                        data: [3, 4, 6, 5],
                        borderColor: "#3F3F3F",
                        backgroundColor: "#6B6B6B",
                        tension: 0.4,
                        fill: false,
                        pointBackgroundColor: "#6B6B6B",
                        pointBorderColor: "#6B6B6B",
                    },
                ],
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                },
                scales: {
                    x: {
                        grid: { display: false },
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 2,
                        },
                        grid: { drawBorder: false },
                    },
                },
            },
            plugins: [highlightLabelPlugin],
        });
    }

    // document.addEventListener('DOMContentLoaded', () => {
    //     const tabButtons = document.querySelectorAll('.tab-button');
    //     const tabContent = document.getElementById('tab-content');

    //     // Function to load content
    //     const loadTabContent = async (url, buttonId) => {
    //         try {
    //             const response = await fetch(url);
    //             if (!response.ok) {
    //                 throw new Error(`HTTP error! status: ${response.status}`);
    //             }
    //             const content = await response.text();
    //             tabContent.innerHTML = content;

    //             // Initialize charts after content is loaded
    //             setTimeout(() => {
    //                 initializeCharts();
    //             }, 100);

    //             // Update active button styling
    //             tabButtons.forEach(btn => {
    //                 btn.classList.remove('active', 'bg-[#551895]', 'text-white');
    //                 btn.classList.add('bg-gray-200', 'text-gray-700');
    //             });
    //             document.getElementById(buttonId).classList.add('active', 'bg-[#551895]', 'text-white');
    //             document.getElementById(buttonId).classList.remove('bg-gray-200', 'text-gray-700');

    //         } catch (error) {
    //             console.error('Error loading tab content:', error);
    //             tabContent.innerHTML = `<p class="text-red-500">Failed to load content. Please try again.</p>`;
    //         }
    //     };

    //     // Add click listeners to tab buttons
    //     tabButtons.forEach(button => {
    //         button.addEventListener('click', () => {
    //             const contentUrl = button.dataset.contentRoute;
    //             const buttonId = button.id;
    //             loadTabContent(contentUrl, buttonId);
    //         });
    //     });

    //     // Load default tab content on initial page load
    //     const defaultTabButton = document.getElementById('user-overview-tab');
    //     if (defaultTabButton) {
    //         loadTabContent(defaultTabButton.dataset.contentRoute, defaultTabButton.id);
    //     }
    // });

 

</script>


<script src="{{ asset('js/tabs.js') }}"></script>
</body>
</html>

