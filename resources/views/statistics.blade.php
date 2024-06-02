<x-app-layout>
    <div class="flex-1 p-6">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Analytics Dashboard</title>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        </head>

        <body class="bg-gray-100">
        <div class="container mx-auto p-4 mt-16"> <!-- Added mt-16 to avoid hiding under navbar -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800"></h1>
            </div>

            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-black-700">LUXE-Properties-Analytics</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <canvas id="userChart" class="w-full h-40"></canvas> <!-- Increased height to h-40 -->
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <canvas id="apartmentChart" class="w-full h-40"></canvas> <!-- Increased height to h-40 -->
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <canvas id="agentChart" class="w-full h-40"></canvas> <!-- Increased height to h-40 -->
                </div>
            </div>

            <div class="text-center my-4">
                <h2 class="text-xl font-bold ">User Count: {{ $userCount }}</h2>
                <h2 class="text-xl font-bold ">Property Listing Count: {{ $apartmentCount }}</h2>
                <h2 class="text-xl font-bold  ">Agent Count: {{ $agentCount }}</h2>
            </div>

            <script>
                var userCountChart = new Chart(document.getElementById('userChart'), {
                    type: 'doughnut',
                    data: {
                        labels: ['Active Users', 'Inactive Users'],
                        datasets: [{
                            data: [{{ $userCount }}, 100 - {{ $userCount }}],
                            backgroundColor: ['#000000', '#666666']
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: 'User Count'
                        },
                        responsive: true,
                        maintainAspectRatio: false
                    }
                });

                var apartmentChart = new Chart(document.getElementById('apartmentChart'), {
                    type: 'bar',
                    data: {
                        labels: ['Property Listings'],
                        datasets: [{
                            label: 'Property Listings',
                            data: [{{ $apartmentCount }}],
                            backgroundColor: ['#000000']
                        }]
                    },
                    options: {
                        legend: { display: false },
                        title: {
                            display: true,
                            text: 'Property Listings'
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        responsive: true,
                        maintainAspectRatio: false
                    }
                });

                var agentChart = new Chart(document.getElementById('agentChart'), {
                    type: 'doughnut',
                    data: {
                        labels: ['Active Agents', 'Inactive Agents'],
                        datasets: [{
                            data: [{{ $agentCount }}, 100 - {{ $agentCount }}],
                            backgroundColor: ['#000000', '#666666']
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: 'Agent Count'
                        },
                        responsive: true,
                        maintainAspectRatio: false
                    }
                });
            </script>
        </div>
    </div>
</x-app-layout>
