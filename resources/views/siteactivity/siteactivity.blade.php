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
    

    
    <style>

      /* Custom styles for active tab */
      .tab-button.active {
        background-color: #551895; /* Example active background color */
        color: white; /* Example active text color */
      }
      </style>
</head>



<body>

<div class="h-screen">

    <div>
        @include('components.sidebar')
    </div>

     <div>>
        @include('components.header')
    </div>

    <div>
        @include('components.breadcums')
    </div>

    <div>
        @include('components.menu')
    </div>

    <div>
     @include('components.siteactivity_tab')
    </div>

</div>
    

             
    

    

    {{-- Header --}}
    {{-- @include('components.header') --}}

    {{-- Navigation Menu --}}
    {{-- @include('components.menu') --}}



    {{-- Main Content Wrapper --}}
    <div class=" w-[77%] mx-auto mt-45 ml-48">


          
       
         <div id="tab-content" class="mt-4">
           
        </div>
    </div>
      
        {{-- @include('tabs.overview') --}}
        {{-- @include('tabs.cockpit') --}}

        {{-- @include('tabs.getting-started') --}}
        {{-- @include('tabs.cockpit') --}}

        {{-- Content Area --}}
        {{-- <div class="flex-1 mt-[195px] ml-[190px] p-2">
            @yield('content')
        {{-- Content Area --}}
    


        {{-- Main Content Area --}}
        {{-- <main class="flex-1 mt-[195px] ml-[190px] p-2">
            {{-- @include('components.container') --}}
             {{-- @include('components.overview') --}}
            
 






            {{-- <script src ={{ asset('js/charts.js') }}></script> --}}








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

    // Common plugin for highlighting max label
    const createHighlightLabelPlugin = (maxLabel) => ({
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
    });

    // Function to initialize a single chart by canvas ID and data
    function initializeChart(canvasId, sentData, openedData, labels) {
        const canvas = document.getElementById(canvasId);
        if (!canvas) return;

        // If chart exists on window for this canvas, destroy first
        if (window[canvasId + 'Instance']) {
            window[canvasId + 'Instance'].destroy();
        }

        const maxVal = Math.max(...sentData);
        const maxIndex = sentData.indexOf(maxVal);
        const maxLabel = labels[maxIndex];

        const ctx = canvas.getContext("2d");

        window[canvasId + 'Instance'] = new Chart(ctx, {
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
                        data: openedData,
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
            plugins: [createHighlightLabelPlugin(maxLabel)],
        });
    }

    // Initialize both charts
    function initializeCharts() {
        const labels1 = ["03–07", "10–14", "17–21", "24–28"];
        const sentData1 = [5, 7, 9, 10];
        const openedData1 = [3, 4, 6, 5];

        const labels2 = ["Jan", "Feb", "Mar", "Apr"];
        const sentData2 = [8, 6, 7, 11];
        const openedData2 = [5, 3, 8, 6];

        initializeChart("lineChart1", sentData1, openedData1, labels1);
        initializeChart("lineChart2", sentData2, openedData2, labels2);
    }

    // Initialize on DOM content loaded
    document.addEventListener('DOMContentLoaded', initializeCharts);
</script>

































            
<script src={{ asset('js/tabs.js') }}></script>




 




</body>
</html>
