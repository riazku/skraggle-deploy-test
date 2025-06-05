<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chart Example</title>

  <!-- Tailwind via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Chart.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-50">

  <div class="container mx-auto p-6">
    <!-- Header and Date Selector -->
    <div class="flex flex-wrap items-center gap-2 mt-5">
      <h1 class="text-[#3F3F3F] font-bold text-[19px]">Charts</h1>
      <div class="flex justify-center items-center gap-2 md:ml-10 ml-0">
        <button class="bg-[#ebeff3] text-[#3F3F3F] rounded-md px-3 p-1 flex items-center gap-2">
          <span>12/5/2024</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="#3F3F3F"><path d="M5.36 5.93h7.23M4.86 1.83v1.23M12.98 1.83v1.23M15.38 5.31v8.61c0 1.24-1 2.25-2.25 2.25H4.88a2.25 2.25 0 0 1-2.25-2.25V5.31c0-1.24 1-2.25 2.25-2.25h8.25c1.24 0 2.25 1 2.25 2.25Z" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <span class="text-[17px] text-[#B2B9C7]">To</span>
        <button class="bg-[#ebeff3] text-[#3F3F3F] rounded-md px-3 p-1 flex items-center gap-2">
          <span>12/5/2024</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="#3F3F3F"><path d="M5.36 5.93h7.23M4.86 1.83v1.23M12.98 1.83v1.23M15.38 5.31v8.61c0 1.24-1 2.25-2.25 2.25H4.88a2.25 2.25 0 0 1-2.25-2.25V5.31c0-1.24 1-2.25 2.25-2.25h8.25c1.24 0 2.25 1 2.25 2.25Z" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
      </div>
    </div>

    <!-- Chart Box -->
    <div class="bg-[#EEEAFF] p-6 w-full rounded-lg mt-4">
      <h1 class="text-[#551895] text-[18px] font-semibold mb-1">Daily stats about active visitors</h1>
      <p class="text-[#3F3F3F] mb-4 text-sm">Email sent to confirm user subscription to a list.</p>
      <canvas id="lineChart" height="70"></canvas>
    </div>
  </div>

  <!-- Chart Script -->
  <script>
    // Ensure rounded rectangle method is available before use
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

    const labels = ["03–07", "10–14", "17–21", "24–28"];
    const sentData = [5, 7, 9, 10];
    const openedData = [3, 4, 6, 5];

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

        const xPos = x.getPixelForValue(maxLabel);
        const width = 60;
        const height = 28;

        ctx.save();
        ctx.fillStyle = 'white';
        ctx.strokeStyle = 'white';
        ctx.roundRect(xPos - width / 2, bottom + 10, width, height, 12);
        ctx.fill();

        ctx.fillStyle = 'black';
        ctx.font = '12px sans-serif';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(maxLabel, xPos, bottom + 10 + height / 2);
        ctx.restore();
      }
    };

    const ctx = document.getElementById('lineChart').getContext('2d');

    new Chart(ctx, {
      type: 'line',
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
            data: openedData,
            borderColor: "#3F3F3F",
            backgroundColor: "#6B6B6B",
            tension: 0.4,
            fill: false,
            pointBackgroundColor: "#6B6B6B",
            pointBorderColor: "#6B6B6B",
          }
        ]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { display: true },
        },
        scales: {
          x: {
            grid: { display: false },
          },
          y: {
            beginAtZero: true,
            ticks: { stepSize: 2 },
            grid: { drawBorder: false },
          },
        }
      },
      plugins: [highlightLabelPlugin]
    });
  </script>
</body>
</html>
