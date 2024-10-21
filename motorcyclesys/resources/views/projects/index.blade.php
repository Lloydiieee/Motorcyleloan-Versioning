
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Quality Management (ISO/IEC 9126)') }}</x-slot>
    <x-slot name="subHeader">{{ __('A Quality Management System (QMS) is a structured framework of policies, processes, and procedures that organizations use to ensure their products or services consistently meet customer and regulatory requirements. It promotes continuous improvement, enhances efficiency, and fosters a customer-focused approach to quality') }}</x-slot>
    <x-slot name="btn">
        {{-- <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                        class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt d-none d-sm-block">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#registration"
                                class="btn btn-info">
                                <em class="icon ni ni-plus"></em>
                                <span>Add New Project</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-4">
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

            <div class="col-md-8">
                <div class="card">
                    <div class="card-inner">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        {{-- <span style="float: right">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#registration"
                            class="btn btn-info">
                            <em class="icon ni ni-plus"></em>
                            <span>Add New Project</span>
                        </a>
                        </span> --}}
                        <table class="datatable-init table table-hover">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Project List</th>
                                    <th width="120" class="text-center">Status</th>
                                    <th width="180" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $num = 1;
                                @endphp
                                @foreach ($projects as $data)
                                    <tr>
                                        <td>{{ $num++ }}.</td>
                                        <td>{{ $data->name }}</td>
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
                                        <td>
                                            <center>
                                                <button onclick="go_to('/projects/details/{{ $data->id }}')"
                                                    class="btn btn-xs btn-light bg-white">
                                                    <em class="icon ni ni-eye"></em>
                                                </button>
                                                <button
                                                    onclick="edit_project({{ $data->id }}, '{{ $data->name }}', '{{ $data->description }}', '{{ $data->team_leader }}')"
                                                    data-bs-toggle="modal" data-bs-target="#edit"
                                                    class="btn btn-xs btn-light bg-white ">
                                                    <em class="icon ni ni-edit"></em>
                                                </button>
                                                &nbsp;
                                                <button onclick="remove({{ $data->id }})"
                                                    class="btn btn-xs btn-light bg-white">
                                                    <em class="icon ni ni-trash"></em>
                                                </button>
                                            </center>
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


    <div class="modal fade" tabindex="-1" role="dialog" id="edit">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body">
                    <h1 class="nk-block-title page-title text-2xl">
                        Edit Project
                    </h1>
                    <p>You can edit project to monitor the task.</p>
                    <hr class="mt-2 mb-2">

                    <form action="{{ route('projects.update') }}" method="POST">
                        @csrf
                        <div class="row mt-2 align-center">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label" for="inp_pn">Project Name <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Project Name here.</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-info"></em>
                                        </div>
                                        <input type="hidden" name="inp_id" id="inp_id">
                                        <input type="text" required class="form-control" id="inp_pn"
                                            id="inp_pn" name="inp_pn"
                                            placeholder="Enter (Required) Project Name here.. ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 align-center">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label" for="inp_pn">Project Leader <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Project Leader here.</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-info"></em>
                                        </div>
                                        <input type="text" required class="form-control" id="inp_leader"
                                            id="inp_leader" name="inp_leader"
                                            placeholder="Enter (Required) Project Leader here.. ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 align-center">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label" for="inp_description">Description
                                        <i>(Optional)</i></label>
                                    <span class="form-note">Specify the Description here.</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <textarea class="form-control" id="inp_description" name="inp_description" id="default-textarea" rows="2"
                                        placeholder="Enter Description here.."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-8" style="float: right">
                            <hr class="mt-2 mb-2">
                        </div>

                        <div class="col-lg-5">
                        </div>
                        <div class="col-lg-7 justify-end" style="float: right">
                            <div class="form-group mt-2 mb-2 justify-end">
                                <button type="submit" class="btn btn-success">
                                    <em class="icon ni ni-save"></em>
                                    &ensp;Save Changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function edit_project(id, name, description, leader) {
            document.getElementById('inp_id').value = id;
            document.getElementById('inp_pn').value = name;
            document.getElementById('inp_leader').value = leader;
            document.getElementById('inp_description').value = description;
        }

        function remove(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/api/remove/project',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function() {
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your record has been deleted.",
                                icon: "success"
                            });
                            setTimeout(function() {
                                location.reload(); // Reload the page
                            }, 1000);
                        }
                    })

                }
            });
        }
    </script>

    
</x-app-layout>
