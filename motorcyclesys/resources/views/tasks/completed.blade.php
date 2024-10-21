<div class="col-md-12">
    <div class="card">
        <div class="card-inner">
            <div class="alert alert-pro alert-success shadow-none">
                <div class="alert-text fw-bold">
                    <h6>Completed Task</h6>
                </div>
            </div>
            <table class="datatable-initx table-bordered table table-hover">
                <thead>
                    <tr>
                        <th width="10" class="text-center">Status</th>
                        <th>Task</th>
                        <th width="140">Date Completed</th>
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
                    @foreach ($completed as $data)
                        <tr>
                            <td class="text-center pt-2 fw-bolder">
                                <em class="icon ni ni-check-circle text-success" style="font-size: 22px;"></em>
                            </td>
                            <td style="padding-top: 10px; font-size: 16px">
                                <a class="text-dark" href="#" target="_blank">
                                    Task: {{ $data->title }}
                                </a>
                            </td>
                            <td class="pt-2">
                                <span
                                    class="text-dark">{{ date_format(date_create($data->completed), 'M. d, Y') }}</span>
                            </td>
                            <td>
                                @php
                                    // Get the current date and deadline
                                    $currentDate = new DateTime();
                                    $deadlineDate = new DateTime($data->completed);
                                    // Calculate the difference
                                    $difference = $currentDate->diff($deadlineDate);
                                    // Determine if the task is overdue or still ongoing
                                    $daysLeft = $completed > $currentDate ? $difference->days : -$difference->days;
                                @endphp

                                @if ($daysLeft >= 0)
                                    <span class="badge badge-sm badge-dot has-bg bg-success d-none d-sm-inline-flex"
                                        style="width: 100%">
                                        Completed
                                    </span>
                                @else
                                    <span class="badge badge-sm badge-dot has-bg bg-success d-none d-sm-inline-flex"
                                        style="width: 100%">
                                        {{ abs($daysLeft) }} Day(s) Ago
                                    </span>
                                @endif
                            </td>
                            <td>
                                <center>
                                  -
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


