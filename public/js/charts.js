

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


