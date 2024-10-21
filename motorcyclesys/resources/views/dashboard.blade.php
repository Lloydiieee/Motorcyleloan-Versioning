<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="btn">
    </x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <h1 class="text-2xl text-dark">Welcome <b>{{ Auth::user()->name }} !</b></h1>
                    </div>
                </div>
            </div>


            <div class="col-md-8">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-inner" style="min-height: 595px">
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
                                        $completed = 0;
                                        $projects_total = 0;
                                    @endphp
                                    @foreach ($projects as $data)
                                        @php
                                            $get_quality = $checking->where('project_id', $data->id)->count();

                                            $current = $get_quality; // Example value for current
                                            $total = 27; // Example value for total

                                            if ($total > 0) {
                                                $percentage = ($current / $total) * 100;
                                            } else {
                                                $percentage = 0;
                                            }

                                            if ($current == $total) {
                                                $completed++;
                                            }

                                            $projects_total++;

                                        @endphp
                                        <tr style="cursor: pointer;"
                                            onclick="go_to('/projects/print/{{ $data->id }}')">
                                            <td>{{ $num++ }}.</td>
                                            <td>{{ $data->name }}</td>
                                            <td>( {{ $get_quality }} / <b>27</b> )</td>
                                            <td class="text-end">{{ number_format($percentage, 2) }}%</td>
                                            <td class="pt-3">
                                                <div class="progress">
                                                    <div class="progress-bar"
                                                        data-progress="{{ number_format($percentage, 2) }}"
                                                        style="width: {{ number_format($percentage, 2) }}%;"></div>
                                                </div>
                                            </td>
                                            <td>
                                                @if ($data->status == 'In Progress')
                                                    <span
                                                        class="badge badge-sm badge-dot has-bg bg-info d-none d-sm-inline-flex"
                                                        style="width: 100%">
                                                        In Progress
                                                    </span>
                                                @elseif($data->status == 'Completed')
                                                    <span
                                                        class="badge badge-sm badge-dot has-bg bg-success d-none d-sm-inline-flex"
                                                        style="width: 100%">
                                                        Completed
                                                    </span>
                                                @else
                                                    <span
                                                        class="badge badge-sm badge-dot has-bg bg-warning d-none d-sm-inline-flex"
                                                        style="width: 100%">
                                                        Pending
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="nk-ecwg nk-ecwg6">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Total Projects</h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="data-group">
                                        <div class="amount">{{ $projects_total }}</div>
                                        <div class="nk-ecwg6-ck">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="card">
                        <div class="nk-ecwg nk-ecwg6">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Completed Projects</h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="data-group">
                                        <div class="amount">{{ $completed }}</div>
                                        <div class="nk-ecwg6-ck">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="card card-full overflow-hidden">
                        <div class="nk-ecwg nk-ecwg7 h-100">
                            <div class="card-inner flex-grow-1">
                                <div class="card-title-group mb-4">
                                    <div class="card-title">
                                        <h6 class="title">Data Analytics</h6>
                                    </div>
                                </div>
                                <div class="nk-ecwg7-ck">
                                    <canvas class="ecommerce-doughnut-s1" id="orderStatistics"></canvas>
                                </div>
                                <ul class="nk-ecwg7-legends">
                                    <li>
                                        <div class="title">
                                            <span class="dot dot-lg sq" data-bg="#1EE0AC"></span>
                                            <span>Completed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <span class="dot dot-lg sq" data-bg="#09C2DE"></span>
                                            <span>In Progress</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <span class="dot dot-lg sq" data-bg="#F4BD0E"></span>
                                            <span>Pending</span>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- .card-inner -->
                        </div>
                    </div>
                </div>
    
               @include('projects.chart')

            </div>
        </div>
    </div>

</x-app-layout>
