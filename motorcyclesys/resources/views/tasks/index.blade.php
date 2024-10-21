<x-app-layout>
    <x-slot name="back">
        <div class="nk-block-head-sub">
            <a class="back-to" href="/dashboard">
                <em class="icon ni ni-arrow-left"></em>
                <span>Back</span>
            </a>
        </div>
    </x-slot>
    <x-slot name="header">{{ $project->name }}</x-slot>
    <x-slot name="subHeader">{{ $project->description }}</x-slot>
    <x-slot name="btn">
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                        class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt d-none d-sm-block">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#registration"
                                class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add
                                    Task</span></a>
                        </li>
                        <li class="nk-block-tools-opt d-block d-sm-none">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#registration"
                                class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="nk-block">
        <div class="row g-gs">

            @include('tasks.pending')
            @include('tasks.ongoing')
            @include('tasks.completed')

        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="registration">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body">
                    <h1 class="nk-block-title page-title text-2xl">
                        Create New Task
                    </h1>
                    <p>You can create new task to monitor the projects here.</p>
                    <hr class="mt-2 mb-2">

                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        <!-- First Name -->
                        <div class="row mt-2 align-center">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label" for="inp_task">Task Name <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Task Name here.</span>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-info"></em>
                                    </div>
                                    <input type="hidden" name="inp_id" value="{{ $id }}">
                                    <input type="text" class="form-control" id="inp_task" name="inp_task"
                                        placeholder="Enter Task Name here..." required>
                                </div>
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="row mt-2 align-center">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label" for="inp_deadline">Date Deadline <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Date Deadline here.</span>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-calendar"></em>
                                    </div>
                                    <input type="date" min="{{ date('Y-m-d') }}" class="form-control" id="inp_deadline" name="inp_deadline"
                                        placeholder="Enter inp_deadline here..." required>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">

                        </div>
                        <div class="col-lg-9" style="float: right">
                            <hr class="mt-2 mb-2">
                        </div>

                        <!-- Submit Button -->
                        <div class="col-lg-5">
                        </div>
                        <div class="col-lg-7 justify-end" style="float: right">
                            <div class="form-group mt-2 mb-2 justify-end">
                                <button type="reset" class="btn btn-light bg-white mx-3">
                                    <em class="icon ni ni-repeat"></em>
                                    &ensp;Reset
                                </button>
                                <button type="submit" class="btn btn-light bg-white">
                                    <em class="icon ni ni-save"></em>
                                    &ensp;Submit Record
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function edit(task, deadline, id) {
            document.getElementById('inp_task').value = task;
            document.getElementById('inp_deadline').value = deadline;
            document.getElementById('inp_uid').value = id;
        }
    
        function remove() {
            const id = document.getElementById('inp_uid').value;
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
                        url: '/api/remove/task',
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

        function move(id, status) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, Please proceed!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/api/update/task',
                        type: 'POST',
                        data: {
                            id: id,
                            type: status
                        },
                        success: function() {
                            Swal.fire({
                                title: "Task Moved!",
                                text: "Your Task has been moved.",
                                icon: "success"
                            });
                            setTimeout(function() {
                                location.reload(); 
                            }, 1000);
                        }
                    })
    
                }
            });
        }

    </script>
</x-app-layout>
