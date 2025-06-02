<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Campaigns</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-white">
    <div class="container mx-auto p-6">
      <!-- Tabs -->
      {{-- <div class="flex space-x-1 mb-6">
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm font-semibold"
        >
          My Campaigns
        </button>
        <button
          class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        >
          Scenarios
        </button>
      </div> --}}

      <!-- Chart Section -->
      <div class="bg-[#EEEAFF] p-6 w-full rounded-lg">
        <h1 class="text-[#551895] text-[18px] font-semibold mb-1">
          Daily stats about active visitors
        </h1>
        <h6 class="text-[#3F3F3F] mb-4 text-sm">
          Email sent to confirm user subscription to a list.
        </h6>
        <canvas id="lineChart" height="50"></canvas>
      </div>
    </div>

   <script>
  const labels = ["03–07", "10–14", "17–21", "24–28"];
  const sentData = [5, 7, 9, 10];

  // Find max value and its label index
  const maxVal = Math.max(...sentData);
  const maxIndex = sentData.indexOf(maxVal);
  const maxLabel = labels[maxIndex];

  const ctx = document.getElementById("lineChart").getContext("2d");

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
    const width = 60; // Balanced size
    const height = 28;
    const padding = 6;

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

  new Chart(ctx, {
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

  // Add rounded rectangle method to CanvasRenderingContext2D if not already
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
</script>

  </body>
</html>
