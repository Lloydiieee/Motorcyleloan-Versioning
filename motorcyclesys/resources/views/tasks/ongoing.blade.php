<div class="col-md-12">
    <div class="card">
        <div class="card-inner">
            <div class="alert alert-pro alert-info shadow-none">
                <div class="alert-text fw-bold">
                    <h6>On-Going Task</h6>
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
                    @foreach ($ongoing as $data)
                        <tr>
                            <td class="text-center pt-2 fw-bolder">
                                <em class="icon ni ni-setting text-info" style="font-size: 22px;"></em>
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
                                    <span class="badge badge-sm badge-dot has-bg bg-info d-none d-sm-inline-flex"
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
                                        onclick="move({{ $data->id }}, 'Done')"
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

