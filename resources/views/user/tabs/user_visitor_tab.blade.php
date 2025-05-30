<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Content Page with Tabs and Charts</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Chart.js included once globally -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1"></script>

  <style>
    .chart-container {
      position: relative;
      height: 400px;
      width: 100%;
    }
  </style>
</head>
<body class="bg-white p-6">

  <!-- Tab Buttons -->
  {{-- <div class="flex space-x-4 mb-4">
    <button
      id="interaction-mycampaign-tab"
      class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded"
      data-content-route="{{ route('content.tabs.content_mycampaign_tab') }}"
    >
      My Campaign
    </button>

    <button
      id="interaction-scenarios-tab"
      class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded"
      data-content-route="{{ route('content.tabs.content_scenarios_tab') }}"
    >
      Scenarios
    </button>
  </div> --}}

  <!-- Tab Content Container -->
  <div id="tab-content" class="bg-[#EEEAFF] p-6 rounded-lg min-h-[400px]">
    <!-- AJAX-loaded content goes here -->
  </div>

  <script>
    // Chart initialization function
    function initializeLineChart() {
      const ctx = document.getElementById("lineChart")?.getContext('2d');
      if (!ctx) return;

      const labels = ["03–07", "10–14", "17–21", "24–28"];
      const sentData = [5, 7, 9, 10];
      const maxVal = Math.max(...sentData);
      const maxIndex = sentData.indexOf(maxVal);
      const maxLabel = labels[maxIndex];

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

          ctx.fillStyle = 'black';
          ctx.font = '12px sans-serif';
          ctx.textAlign = 'center';
          ctx.textBaseline = 'middle';
          ctx.fillText(label, xPos, bottom + 10 + height / 2);
          ctx.restore();
        },
      };

      new Chart(ctx, {
        type: "line",
        data: {
          labels: labels,
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
          maintainAspectRatio: false,
          plugins: {
            legend: { display: true, position: 'top' },
          },
          scales: {
            x: { grid: { display: false } },
            y: {
              beginAtZero: true,
              ticks: { stepSize: 2 },
              grid: { drawBorder: false },
            },
          },
        },
        plugins: [highlightLabelPlugin],
      });
    }

    // Tab content loader
    document.addEventListener('DOMContentLoaded', () => {
      const tabButtons = document.querySelectorAll('.tab-button');
      const tabContent = document.getElementById('tab-content');

      const loadTabContent = async (url, buttonId) => {
        try {
          const response = await fetch(url);
          if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
          const content = await response.text();

          tabContent.innerHTML = content;

          // Initialize chart if canvas exists
          if (document.getElementById('lineChart')) {
            initializeLineChart();
          }

          // Update active button styles
          tabButtons.forEach(btn => {
            btn.classList.remove('active', 'bg-[#551895]', 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-700');
          });
          document.getElementById(buttonId).classList.add('active', 'bg-[#551895]', 'text-white');
          document.getElementById(buttonId).classList.remove('bg-gray-200', 'text-gray-700');

        } catch (error) {
          console.error('Error loading tab content:', error);
          tabContent.innerHTML = `<p class="text-red-500">Failed to load content. Please try again.</p>`;
        }
      };

      // Add click listeners
      tabButtons.forEach(button => {
        button.addEventListener('click', () => {
          loadTabContent(button.dataset.contentRoute, button.id);
        });
      });

      // Load default tab on page load
      const defaultTabButton = document.getElementById('interaction-mycampaign-tab');
      if (defaultTabButton) {
        loadTabContent(defaultTabButton.dataset.contentRoute, defaultTabButton.id);
      }
    });
  </script>
</body>
</html>
