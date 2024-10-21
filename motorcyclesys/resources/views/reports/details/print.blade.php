<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/vendor/images/favicon.png">
    <link rel="stylesheet" href="/vendor/assets/css/dashlite.css?ver=3.0.3">
    <link id="skin-default" rel="stylesheet" href="/vendor/assets/css/theme.css?ver=3.0.3">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .form-control,
        .dual-listbox .dual-listbox__search,
        div.dataTables_wrapper div.dataTables_filter input {
            display: block;
            width: 100%;
            padding: 0.4375rem 1rem;
            font-size: 0.8125rem;
            font-weight: 400;
            line-height: 1.25rem;
            color: #3c4d62;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #dbdfea;
            appearance: none;
            border-radius: 4px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        td,
        tr,
        th {
            padding: 5px !important;
        }
    </style>
    @livewireStyles
</head>

<body class="nk-body bg-lighter npc-general has-sidebar font-sans antialiased " onload="window.print()">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap ">
                <div class="nk-content ">
                    <center>
                        <h1 class="fw-bolder text-dark text-2xl">Reports</h1>
                    </center>
                    <br>
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">


                                <!-- Page Content -->
                                <main>
                                    <div class="nk-block">
                                        <div class="row g-gs">

                                            <div class="col-md-12">

                                                <div class="card">
                                                    <div class="card-inner">
                                                    <table class="table table-bordered">
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
                                                            @foreach ($projects as $data)
                                                                @php
                                                                    $get_quality = $checking
                                                                        ->where('project_id', $data->id)
                                                                        ->count();

                                                                    $current = $get_quality; // Example value for current
                                                                    $total = 27; // Example value for total

                                                                    if ($total > 0) {
                                                                        $percentage = ($current / $total) * 100;
                                                                    } else {
                                                                        $percentage = 0;
                                                                    }

                                                                @endphp
                                                                <tr>
                                                                    <td>{{ $num++ }}.</td>
                                                                    <td>{{ $data->name }}</td>
                                                                    <td>( {{ $get_quality }} / <b>27</b> )</td>
                                                                    <td class="text-end">
                                                                        {{ number_format($percentage, 2) }}%</td>
                                                                    <td class="pt-3">
                                                                        <div class="progress">
                                                                            <div class="progress-bar"
                                                                                data-progress="{{ number_format($percentage, 2) }}"
                                                                                style="width: {{ number_format($percentage, 2) }}%;">
                                                                            </div>
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
                                    </div>

                                </main>

                            </div>
                        </div>

                        @stack('modals')
                        @livewireScripts
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/vendor/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/vendor/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/vendor/assets/js/libs/datatable-btns.js?ver=3.0.3"></script>

</body>

</html>
