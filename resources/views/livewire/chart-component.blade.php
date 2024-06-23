<div wire:ignore class="">
    <div class="text-xl mb-5 font-bold text-gray-700">Trending Technologies for
        <span
            class="text-gray-100 bg-blue-500 p-1 capitalize inline-block -skew-y-3">{{ str_replace('_', ' ', auth()->user()->interest) }}</span>
    </div>

    <canvas id="myChart" class="my-5 w-5/6 "></canvas>
</div>

@assets
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endassets

@script
    <script>
        const ctx = document.getElementById('myChart');
        const subscriptions = $wire.data;

        const labels = subscriptions.map(item => item.Tech);
        const values = subscriptions.map(item => item.Rating);

        function randomColor(index) {
            const hue = (index * 137.508) % 360;
            // Adjust saturation to make colors darker (e.g., 50%)
            // Adjust lightness to make colors darker (e.g., 30% - 40%)
            return `hsla(${hue}, 50%, 35%, 0.6)`;
        }

        const backgroundColors = labels.map((label, index) => randomColor(index));



        new Chart(ctx, {
            type: 'bar',

            data: {
                labels: labels,
                datasets: [{
                    label: 'Trending technology',
                    data: values,
                    backgroundColor: backgroundColors,
                    borderWidth: 1
                }]
            },
            options: {
                barThickness: 15,
                borderRadius: 5,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endscript
