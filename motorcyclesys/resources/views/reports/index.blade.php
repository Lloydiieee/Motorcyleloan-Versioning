
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Generate Reports') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your project and register new project here.') }}</x-slot>
    <x-slot name="btn">
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                        class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt d-none d-sm-block">
                            <a href="/reports/print" target="_blank"
                                class="btn btn-primary">
                                <em class="icon ni ni-printer"></em>
                                <span>Print Report</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="nk-block">
        <div class="row g-gs">

            <div class="col-xxl-3 col-sm-6">
                <div class="card">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Today Orders</h6>
                                </div>
                            </div>
                            <div class="data">
                                <div class="data-group">
                                    <div class="amount">1,945</div>
                                    <div class="nk-ecwg6-ck">
                                        <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas>
                                    </div>
                                </div>
                                <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><span> vs. last week</span></div>
                            </div>
                        </div><!-- .card-inner -->
                    </div><!-- .nk-ecwg -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-3 col-sm-6">
                <div class="card">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Today Revenue</h6>
                                </div>
                            </div>
                            <div class="data">
                                <div class="data-group">
                                    <div class="amount">$2,338</div>
                                    <div class="nk-ecwg6-ck">
                                        <canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas>
                                    </div>
                                </div>
                                <div class="info"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs. last week</span></div>
                            </div>
                        </div><!-- .card-inner -->
                    </div><!-- .nk-ecwg -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-3 col-sm-6">
                <div class="card">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Today Customers</h6>
                                </div>
                            </div>
                            <div class="data">
                                <div class="data-group">
                                    <div class="amount">847</div>
                                    <div class="nk-ecwg6-ck">
                                        <canvas class="ecommerce-line-chart-s3" id="todayCustomers"></canvas>
                                    </div>
                                </div>
                                <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><span> vs. last week</span></div>
                            </div>
                        </div><!-- .card-inner -->
                    </div><!-- .nk-ecwg -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-3 col-sm-6">
                <div class="card">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Today Visitors</h6>
                                </div>
                            </div>
                            <div class="data">
                                <div class="data-group">
                                    <div class="amount">23,485</div>
                                    <div class="nk-ecwg6-ck">
                                        <canvas class="ecommerce-line-chart-s3" id="todayVisitors"></canvas>
                                    </div>
                                </div>
                                <div class="info"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs. last week</span></div>
                            </div>
                        </div><!-- .card-inner -->
                    </div><!-- .nk-ecwg -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-6">
                <div class="card h-100">
                    <div class="card-inner">
                        <div class="card-title-group align-start gx-3 mb-3">
                            <div class="card-title">
                                <h6 class="title">Sales Overview</h6>
                                <p>In 30 days sales of product subscription. <a href="#">See Details</a></p>
                            </div>
                            <div class="card-tools">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-primary btn-dim d-none d-sm-inline-flex" data-bs-toggle="dropdown"><em class="icon ni ni-download-cloud"></em><span><span class="d-none d-md-inline">Download</span> Report</span></a>
                                    <a href="#" class="btn btn-icon btn-primary btn-dim d-sm-none" data-bs-toggle="dropdown"><em class="icon ni ni-download-cloud"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><span>Download Mini Version</span></a></li>
                                            <li><a href="#"><span>Download Full Version</span></a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><em class="icon ni ni-opt-alt"></em><span>More Options</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-sale-data-group align-center justify-between gy-3 gx-5">
                            <div class="nk-sale-data">
                                <span class="amount">$82,944.60</span>
                            </div>
                            <div class="nk-sale-data">
                                <span class="amount sm">1,937 <small>Subscribers</small></span>
                            </div>
                        </div>
                        <div class="nk-sales-ck large pt-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas class="sales-overview-chart chartjs-render-monitor" id="salesOverview" width="598" height="352" style="display: block; width: 299px; height: 176px;"></canvas>
                        </div>
                    </div>
                </div><!-- .card -->
            </div>
            <div class="col-xxl-3 col-md-6">
                <div class="card card-full overflow-hidden">
                    <div class="nk-ecwg nk-ecwg7 h-100">
                        <div class="card-inner flex-grow-1">
                            <div class="card-title-group mb-4">
                                <div class="card-title">
                                    <h6 class="title">Order Statistics</h6>
                                </div>
                            </div>
                            <div class="nk-ecwg7-ck">
                                <canvas class="ecommerce-doughnut-s1" id="orderStatistics"></canvas>
                            </div>
                            <ul class="nk-ecwg7-legends">
                                <li>
                                    <div class="title">
                                        <span class="dot dot-lg sq" data-bg="#816bff"></span>
                                        <span>Completed</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <span class="dot dot-lg sq" data-bg="#13c9f2"></span>
                                        <span>Processing</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <span class="dot dot-lg sq" data-bg="#ff82b7"></span>
                                        <span>Cancelled</span>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- .card-inner -->
                    </div>
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-3 col-md-6">
                <div class="card h-100">
                    <div class="card-inner">
                        <div class="card-title-group mb-2">
                            <div class="card-title">
                                <h6 class="title">Store Statistics</h6>
                            </div>
                        </div>
                        <ul class="nk-store-statistics">
                            <li class="item">
                                <div class="info">
                                    <div class="title">Orders</div>
                                    <div class="count">1,795</div>
                                </div>
                                <em class="icon bg-primary-dim ni ni-bag"></em>
                            </li>
                            <li class="item">
                                <div class="info">
                                    <div class="title">Customers</div>
                                    <div class="count">2,327</div>
                                </div>
                                <em class="icon bg-info-dim ni ni-users"></em>
                            </li>
                            <li class="item">
                                <div class="info">
                                    <div class="title">Products</div>
                                    <div class="count">674</div>
                                </div>
                                <em class="icon bg-pink-dim ni ni-box"></em>
                            </li>
                            <li class="item">
                                <div class="info">
                                    <div class="title">Categories</div>
                                    <div class="count">68</div>
                                </div>
                                <em class="icon bg-purple-dim ni ni-server"></em>
                            </li>
                        </ul>
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div>


            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <table class="datatable-init table table-hover">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Project List</th>
                                    <th>Quality</th>
                                    <th width="50">%</th>
                                    <th>Progress</th>
                                    <th width="120" class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $num = 1;
                                @endphp
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="/vendor/js/charts/chart-ecommerce.js?ver=3.0.3"></script>
    <script src="/vendor/js/charts/chart-sales.js?ver=3.0.3"></script>
</x-app-layout>
