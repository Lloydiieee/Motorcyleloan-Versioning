<div class="col-md-12">
    <div class="card">
        <div class="card-inner">
            <div class="alert alert-pro alert-danger shadow-none">
                <div class="alert-text fw-bold">
                    <h6>Pending Task</h6>
                </div>
            </div>
            <table class="datatable-initx table-bordered table table-hover">
                <thead>
                    <tr>
                        <th width="10" class="text-center">Status</th>
                        <th>Task</th>
                        <th width="140">Deadline</th>
                        <th width="140" style="font-size: 13px;">
                            <center>Days</center>
                        </th>
                        <th width="140" style="font-size: 13px;">
                            <center>Actions</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        date_default_timezone_set('Asia/Manila');
                    @endphp
                    @foreach ($pending as $data)
                        <tr>
                            <td class="text-center pt-2 fw-bolder">
                                <em class="icon ni ni-clock text-danger" style="font-size: 22px;"></em>
                            </td>
                            <td style="padding-top: 10px; font-size: 16px">
                                <a class="text-dark" href="#" target="_blank">
                                    Task: {{ $data->title }}
                                </a>
                            </td>
                            <td class="pt-2">
                                <span
                                    class="text-dark">{{ date_format(date_create($data->deadline), 'M. d, Y') }}</span>
                            </td>
                            <td>
                                @php
                                    // Get the current date and deadline
                                    $currentDate = new DateTime();
                                    $deadlineDate = new DateTime($data->deadline);
                                    // Calculate the difference
                                    $difference = $currentDate->diff($deadlineDate);
                                    // Determine if the task is overdue or still ongoing
                                    $daysLeft = $deadlineDate > $currentDate ? $difference->days : -$difference->days;
                                @endphp

                                @if ($daysLeft >= 0)
                                    <span class="badge badge-sm badge-dot has-bg bg-warning d-none d-sm-inline-flex"
                                        style="width: 100%">
                                        {{ $daysLeft + 1 }} Day(s) Left
                                    </span>
                                @else
                                    <span class="badge badge-sm badge-dot has-bg bg-danger d-none d-sm-inline-flex"
                                        style="width: 100%">
                                        {{ abs($daysLeft) }} Day(s) Overdue
                                    </span>
                                @endif
                            </td>
                            <td>
                                <center>
                                    <button class="btn btn-sm btn-light bg-white text-dark" data-bs-toggle="modal"
                                        data-bs-target="#edit"
                                        onclick="edit('{{ $data->title }}', '{{ $data->deadline }}', '{{ $data->id }}')">
                                        <em class="icon ni ni-edit"></em>
                                    </button>
                                    &nbsp;
                                    <button class="btn btn-sm btn-light bg-white text-dark"
                                        onclick="move({{ $data->id }}, 'On-going')"
                                        data-bs-toggle="modal" data-bs-target="#create-sub-instrument">
                                        <em class="icon ni ni-check-circle"></em>
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

<div class="modal fade" tabindex="-1" role="dialog" id="edit">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body">
                <h1 class="nk-block-title page-title text-2xl">
                    Update Task
                </h1>
                <p>You can create new task to monitor the projects here.</p>
                <hr class="mt-2 mb-2">

                <form action="{{ route('tasks.update') }}" method="POST">
                    @csrf
                    <!-- First Name -->
                    <div class="row mt-2 align-center">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label" for="inp_task">Task Name <b class="text-danger">*</b></label>
                                <span class="form-note">Specify the Task Name here.</span>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right">
                                    <em class="icon ni ni-info"></em>
                                </div>
                                <input type="hidden" name="inp_uid" id="inp_uid">
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
                                <input type="date" min="{{ date('Y-m-d') }}" class="form-control" id="inp_deadline"
                                    name="inp_deadline" placeholder="Enter inp_deadline here..." required>
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
                            <button type="button" onclick="remove()" class="btn btn-danger">
                                <em class="icon ni ni-trash"></em>
                                &ensp;Delete Task
                            </button>&ensp;
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


