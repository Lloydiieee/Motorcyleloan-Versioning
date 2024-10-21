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
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">


                                <!-- Page Content -->
                                <main>
                                    <div class="nk-block">
                                        <div class="row g-gs">

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <p class="text-dark"><b><em class="icon ni ni-user"></em>&nbsp; Team
                                                            Leader :</b> &nbsp; {{ $project->team_leader }}</p>
                                                    <h1 class="text-dark"><b>{{ $project->name }}</b></h1>
                                                    <p>{{ $project->description }}</p>
                                                    <br>
                                                    <div class="card">
                                                        <div class="card-inner">

                                                            <h1 class="text-dark"><b>ISO/IEC 9126 in Software
                                                                    Engineering</b></h1>
                                                            <hr class="mt-2 mb-2">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th width="100" class="text-center">Status
                                                                        </th>
                                                                        <th>External and Internal Quantity</th>
                                                                        <th width="50">..</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php
                                                                        $num = 1;
                                                                    @endphp
                                                                    @foreach ($category as $data)
                                                                        @php
                                                                            $list = $category_raw->where(
                                                                                'category',
                                                                                $data,
                                                                            );
                                                                        @endphp
                                                                        <tr>
                                                                            <td width="50" class="text-center">
                                                                                -
                                                                            </td>
                                                                            <td><span
                                                                                    class="fw-bolder text-dark">{{ $data }}</span>
                                                                            </td>
                                                                            <td class="text-center">
                                                                                -
                                                                            </td>
                                                                        </tr>
                                                                        @foreach ($list as $rw)
                                                                            @php
                                                                                $check = $checking
                                                                                    ->where('project_id', $project->id)
                                                                                    ->where('resources_id', $rw->id);
                                                                            @endphp
                                                                            <tr>
                                                                                <td>
                                                                                    @if ($check->count() != 0)
                                                                                        <center>
                                                                                            <em
                                                                                                class="icon ni ni-check-circle text-success"></em>
                                                                                        </center>
                                                                                    @endif
                                                                                </td>
                                                                                <td
                                                                                    style="padding-left: 50px !important">
                                                                                    <span class="text-dark">
                                                                                        <em class="icon ni ni-dot"></em>
                                                                                        {{ $rw->name }}
                                                                                    </span>
                                                                                </td>
                                                                                <td>

                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
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
