<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Charts Example</title>
  <!-- Tailwind CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <!-- Chart.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div class="container mx-auto p-6 space-y-8">
    <!-- Chart 1 Container -->
    <div class="bg-[#EEEAFF] p-4 w-full rounded-lg">
      <h1 class="text-[#551895] text-[18px] font-semibold mb-1">
        Daily stats about active visitors
      </h1>
      <h6 class="text-[#3F3F3F] mb-4 text-sm">
        Email sent to confirm user subscription to a list.
      </h6>
      <canvas id="lineChart1" height="50"></canvas>
    </div>

    <!-- Chart 2 Container -->
    <div class="bg-[#EEEAFF] p-4 w-full rounded-lg">
      <h1 class="text-[#551895] text-[18px] font-semibold mb-1">
        Daily stats about active visitors
      </h1>
      <h6 class="text-[#3F3F3F] mb-4 text-sm">
        Email sent to confirm user subscription to a list.
      </h6>
      <canvas id="lineChart2" height="50"></canvas>
    </div>
  </div>

  <script>
    // Paste the full JS from the previous message here,
    // or just call initializeCharts() if you included it separately.
  </script>
</body>
</html>
