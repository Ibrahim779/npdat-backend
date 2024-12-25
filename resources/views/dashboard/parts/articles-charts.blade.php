<div class="row mt-4">
    <div class="col-lg-4 col-sm-6">
        <div class="card h-100">
            <div class="card-header mt-2 pb-0 p-3">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-0">@lang('main.articles_chart')</h6>
                    <button type="button"
                        class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center"
                        data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                        data-bs-original-title="See traffic articles">
                        <i class="fas fa-info" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="card-body pb-0 p-3 mt-4">
                <div class="row">
                    <div class="col-7 text-start">
                        <div class="chart">
                            <canvas id="chart-pie" class="chart-canvas" height="200"></canvas>
                        </div>
                    </div>
                    <div class="col-5 my-auto">
                        <span class="badge badge-md badge-dot me-4 d-block text-start">
                            <i style="background: #52B14E"></i>
                            <span class="text-dark text-xs">@lang('main.active')</span>
                        </span>
                        <span class="badge badge-md badge-dot me-4 d-block text-start">
                            <i style="background: #b8bbbd"></i>
                            <span class="text-dark text-xs">@lang('main.not_active')</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
                <div class="w-60">
                    {{-- <p class="text-sm">
                        Orders Count is <b>{{ $ordersCount }}</b>
                    </p> --}}
                </div>
                <div class="w-40 text-end">
                    <a class="btn bg-light mb-3 text-end"
                        href="{{ route('admin.articles.index') }}">@lang('main.all_articles')</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-sm-6 mt-sm-0 mt-4">
        @include('dashboard.parts.articles')
    </div>
</div>

@push('script')
    <script src="{{ asset('dashboard/js/plugins/chartjs.min.js') }}"></script>
    <script>
        var ctx2 = document.getElementById("chart-pie").getContext("2d");
        // Pie chart
        new Chart(ctx2, {
            type: "pie",
            data: {
                labels: ['Active', 'Not Active'],
                datasets: [{
                    label: "Articles",
                    weight: 9,
                    cutout: 0,
                    tension: 0.9,
                    pointRadius: 2,
                    borderWidth: 2,
                    backgroundColor: ['#52B14E', '#b8bbbd'],
                    data: ["{{ $activeArticlesCount }}",
                        "{{ $notActiveArticlesCount }}",
                    ],
                    fill: false
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false,
                        }
                    },
                },
            },
        });
    </script>
@endpush
