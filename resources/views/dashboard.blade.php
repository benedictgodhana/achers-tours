<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Analytics Section -->
        <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md p-4">
            <h6 class="font-sans text-lg font-semibold leading-relaxed text-blue-gray-900 antialiased">
                Analytics
            </h6>
            <div class="grid grid-cols-2 gap-4 mt-4">
    <!-- Total Users Card -->
    <div class="relative flex flex-col rounded-lg bg-blue-100 p-4 text-blue-800 shadow-md">
        <div class="flex items-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-blue-600 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 14v2a4 4 0 01-8 0v-2m0 0a4 4 0 018 0m-8 0V8a4 4 0 018 0v6m0 0H8" />
            </svg>
            <h6 class="font-sans text-base font-semibold leading-relaxed">Total Users</h6>
        </div>
        <p class="text-2xl font-bold">{{ $usersCount }}</p>
    </div>

    <!-- Total Destinations Card -->
    <div class="relative flex flex-col rounded-lg bg-green-100 p-4 text-green-800 shadow-md">
        <div class="flex items-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-green-600 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v12m0 0l3-3m-3 3l-3-3" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 9h3m3 0h3m3 0h3m-9 0H6" />
            </svg>
            <h6 class="font-sans text-base font-semibold leading-relaxed">Total Destinations</h6>
        </div>
        <p class="text-2xl font-bold">{{ $destinationsCount }}</p>
    </div>

    <!-- Total Tours Card -->
    <div class="relative flex flex-col rounded-lg bg-red-100 p-4 text-red-800 shadow-md">
        <div class="flex items-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-red-600 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6l-6 6h4v6h4v-6h4l-6-6z" />
            </svg>
            <h6 class="font-sans text-base font-semibold leading-relaxed">Total Tours</h6>
        </div>
        <p class="text-2xl font-bold">{{ $toursCount }}</p>
    </div>

    <!-- Total Packages Card -->
    <div class="relative flex flex-col rounded-lg bg-purple-100 p-4 text-purple-800 shadow-md">
        <div class="flex items-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-purple-600 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m-4 4V4m-4 8l-4-4m0 4l4-4m0 4l4 4M6 4h12v12H6z" />
            </svg>
            <h6 class="font-sans text-base font-semibold leading-relaxed">Total Packages</h6>
        </div>
        <p class="text-2xl font-bold">{{ $packagesCount }}</p>
    </div>
</div>
        </div>

        <!-- Requisitions Section -->
        <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="relative mx-4 mt-4 flex flex-col gap-4 overflow-hidden rounded-none bg-transparent bg-clip-border text-gray-700 shadow-none md:flex-row md:items-center">
                <div class="w-max rounded-lg bg-gray-900 p-5 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3"></path>
                    </svg>
                </div>
                <div>
                    <h6 class="block font-sans text-base font-semibold leading-relaxed tracking-normal text-blue-gray-900 antialiased">
                        Requisitions
                    </h6>
                    <p class="block max-w-sm font-sans text-sm font-normal leading-normal text-gray-700 antialiased">
                        Track and manage item requisitions from different departments efficiently.
                    </p>
                </div>
            </div>
            <div class="py-6 mt-4 grid place-items-center px-2">
                <div id="requisitions-chart"></div>
            </div>
        </div>

        <!-- Pie Chart Section -->
        <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="relative mx-4 mt-4 flex flex-col gap-4 overflow-hidden rounded-none bg-transparent bg-clip-border text-gray-700 shadow-none md:flex-row md:items-center">
                <div class="w-max rounded-lg bg-gray-900 p-5 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3"></path>
                    </svg>
                </div>
                <div>
                    <h6 class="block font-sans text-base font-semibold leading-relaxed tracking-normal text-blue-gray-900 antialiased">
                        Pie Chart
                    </h6>
                    <p class="block max-w-sm font-sans text-sm font-normal leading-normal text-gray-700 antialiased">
                        Visualize your data in a simple way using the @material-tailwind/html chart plugin.
                    </p>
                </div>
            </div>
            <div class="py-6 mt-4 grid place-items-center px-2">
                <div id="pie-chart"></div>
            </div>
        </div>

        <!-- Line Chart Section -->
        <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="relative mx-4 mt-4 flex flex-col gap-4 overflow-hidden rounded-none bg-transparent bg-clip-border text-gray-700 shadow-none md:flex-row md:items-center">
                <div class="w-max rounded-lg bg-gray-900 p-5 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3"></path>
                    </svg>
                </div>
                <div>
                    <h6 class="block font-sans text-base font-semibold leading-relaxed tracking-normal text-blue-gray-900 antialiased">
                        Line Chart
                    </h6>
                    <p class="block max-w-sm font-sans text-sm font-normal leading-normal text-gray-700 antialiased">
                        Visualize your data in a simple way using the @material-tailwind/html chart plugin.
                    </p>
                </div>
            </div>
            <div class="pt-6 px-2 pb-0">
                <div id="bar-chart"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        const requisitionChartConfig = {
            series: [
                {
                    name: "Requisitions",
                    data: [20, 40, 10, 15, 30, 50, 40],
                },
            ],
            chart: {
                type: "bar",
                height: 240,
                toolbar: {
                    show: false,
                },
            },
            title: {
                show: "",
            },
            dataLabels: {
                enabled: false,
            },
            colors: ["#ff8f00"],
            plotOptions: {
                bar: {
                    columnWidth: "40%",
                    borderRadius: 2,
                },
            },
            xaxis: {
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
                labels: {
                    style: {
                        colors: "#616161",
                        fontSize: "12px",
                        fontFamily: "inherit",
                        fontWeight: 400,
                    },
                },
            },
            yaxis: {
                labels: {
                    style: {
                        colors: "#616161",
                        fontSize: "12px",
                        fontFamily: "inherit",
                        fontWeight: 400,
                    },
                },
            },
            grid: {
                borderColor: "#eceff1",
            },
        };

        const pieChartConfig = {
            series: [44, 55, 13, 43, 22],
            chart: {
                type: "pie",
                height: 240,
            },
            labels: ["Team A", "Team B", "Team C", "Team D", "Team E"],
        };

        const barChartConfig = {
            series: [
                {
                    name: "Sales",
                    data: [10, 41, 35, 51, 49, 62, 69],
                },
            ],
            chart: {
                type: "line",
                height: 240,
                toolbar: {
                    show: false,
                },
            },
            title: {
                text: "Sales Trends",
                align: "left",
            },
            stroke: {
                curve: "smooth",
            },
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            },
        };

        const requisitionChart = new ApexCharts(document.querySelector("#requisitions-chart"), requisitionChartConfig);
        const pieChart = new ApexCharts(document.querySelector("#pie-chart"), pieChartConfig);
        const barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartConfig);

        requisitionChart.render();
        pieChart.render();
        barChart.render();
    </script>
</x-app-layout>
