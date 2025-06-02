<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Document</title>
  </head>
  <body>
    <div class="container mx-auto p-6">
      <!-- Tabs -->
      {{-- <div class="flex space-x-1 mb-6">
        <button
          class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        >
          My Segments
        </button>
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          My Lists
        </button>

        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          Defaults
        </button>
      </div> --}}

      <!-- Date -->
      <div class="flex flex-wrap items-center gap-2 mt-5">
        <h1 class="text-[#3F3F3F] font-bold text-[19px]">Analytics</h1>
        <div class="flex justify-center items-center gap-2 md:ml-10 ml-0">
          <button
            class="border-[#CFD5DF80] bg-[#ebeff3] border-1 gap-6 text-[#3F3F3F] flex !justify-between items-center rounded-md px-3 p-1"
          >
            <h3 class="">12/5/2024</h3>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              height="18"
              viewBox="0 0 18 18"
              fill="none"
            >
              <path
                d="M5.35714 5.92632H12.5859M4.86384 1.82812V3.05773M12.9844 1.82812V3.05758M15.375 5.30758L15.375 13.9219C15.375 15.1645 14.3676 16.1719 13.125 16.1719H4.875C3.63236 16.1719 2.625 15.1645 2.625 13.9219V5.30758C2.625 4.06494 3.63236 3.05758 4.875 3.05758H13.125C14.3676 3.05758 15.375 4.06494 15.375 5.30758Z"
                stroke="#3F3F3F"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
          <span class="text-[17px] text-[#B2B9C7] font-medium text-[#B2B9C7]">
            To
          </span>
          <button
            class="border-[#CFD5DF80] bg-[#ebeff3] border-1 gap-6 text-[#3F3F3F] flex !justify-between items-center rounded-md px-3 p-1"
          >
            <h3 class="">12/5/2024</h3>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              height="18"
              viewBox="0 0 18 18"
              fill="none"
            >
              <path
                d="M5.35714 5.92632H12.5859M4.86384 1.82812V3.05773M12.9844 1.82812V3.05758M15.375 5.30758L15.375 13.9219C15.375 15.1645 14.3676 16.1719 13.125 16.1719H4.875C3.63236 16.1719 2.625 15.1645 2.625 13.9219V5.30758C2.625 4.06494 3.63236 3.05758 4.875 3.05758H13.125C14.3676 3.05758 15.375 4.06494 15.375 5.30758Z"
                stroke="#3F3F3F"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
        </div>
      </div>

    
        <!-- Chart Section -->
    <div class="bg-[#EEEAFF] p-4 w-full rounded-lg mt-4">
        <h1 class="text-[#551895] text-[18px] font-semibold mb-1">
          Daily stats about active visitors
        </h1>
        <h6 class="text-[#3F3F3F] mb-4 text-sm">
          Email sent to confirm user subscription to a list.
        </h6>
        <canvas id="lineChart" height="50"></canvas>
      </div>

  <div class="grid grid-cols-2 gap-2 mt-5 w-full">

        <div class="bg-[#EEEAFF] rounded-md p-3 ">
          <h4 class="text-[#551895] text-[16px]">Top Viewed</h4>
          <h1 class="text-[#551895] !text-[42px] font-semibold">00.0</h1>
        </div>
    
    
          <div class="bg-[#EEEAFF] rounded-md p-3 ">
          <h4 class="text-[#551895] text-[16px]">Top Added to Cart</h4>
          <div class="flex justify-start items-center gap-4">
            <h1 class="text-[#551895] !text-[44px] font-semibold">00.0</h1>
            <h6
              class="bg-[#DAD2FB] rounded-md text-[#551895] px-3 p-[1px] mt-2"
            >
              00.0 (%)
            </h6>
          </div>
        </div>
             <div class="bg-[#EEEAFF] rounded-md p-3 ">
          <h4 class="text-[#551895] text-[16px]">Top Wish listed</h4>
          <h1 class="text-[#551895] !text-[42px] font-semibold">00.0</h1>
        </div>
            <div class="bg-[#EEEAFF] rounded-md p-3 ">
          <h4 class="text-[#551895] text-[16px]">Top Purchased</h4>
          <div class="flex justify-start items-center gap-4">
            <h1 class="text-[#551895] !text-[44px] font-semibold">00.0</h1>
            <h6
              class="bg-[#DAD2FB] rounded-md text-[#551895] px-3 p-[1px] mt-2"
            >
              00.0 (%)
            </h6>
          </div>
        </div>
      </div>
     
    </div>


      <script>
  const labels = ["03–07", "10–14", "17–21", "24–28"];
  const sentData = [9, 7, 9, 10];

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

   new Chart(ctx2, {
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
