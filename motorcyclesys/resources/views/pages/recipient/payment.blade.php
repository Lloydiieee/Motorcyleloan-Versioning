@php
    use App\Models\categoryModel;
@endphp
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('My Active Loans / ') }} <strong class="text-primary small">Yamaha YZF-R3
            BVJD</strong></x-slot>
    <x-slot name="subHeader">{{ __('You can manage your loans and update loans here.') }}</x-slot>
    <x-slot name="btn"></x-slot>

    <div class="nk-block ">
        <div class="row g-gs">

            @php
                $bikes = ['item-1-638573979682788476-uy8m6n.jpeg', 'item-1-638578133463908171-nqjonh.jpeg'];
                $names = ['Yamaha Mio I125 BB39', 'Yamaha YZF-R3 BVJD'];
                $percent = ['39', '80'];
                $month = ['14', '27'];
            @endphp

            @for ($i = 2; $i <= 2; $i++)
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="product-thumb p-5 pt-0 pb-0">
                                    <a href="#">
                                        <img class="card-img-top" src="/uploads/{{ $bikes[$i - 1] }}" alt="">
                                    </a>
                                </div>
                                <div class="project-head">
                                    <a href="#" class="project-title">
                                        <div class="project-info">
                                            <h6 class="title">{{ $names[$i - 1] }}</h6>
                                            <p>
                                                Best Price in Philippines
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="project-details">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td width="100" class="text-end">Price :</td>
                                            <td>₱ {{ number_format(rand(53000, 100000), 2) }}</td>
                                        </tr>
                                        <tr>
                                            @php
                                                $monthly = number_format(rand(3000, 8000), 2);
                                            @endphp
                                            <td width="100" class="text-end">Monthly :</td>
                                            <td>₱ {{ $monthly }} x {{ 36 - $month[$i - 1] }}
                                                Months</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>Installment</span></div>
                                        <div class="project-progress-percent"> {{ $month[$i - 1] }} / <b>36</b></div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar  bg-danger" data-progress="{{ $percent[$i - 1] }}"
                                            style="width: {{ $percent[$i - 1] }}%;"></div>
                                    </div>
                                </div>
                                <button class="btn btn-danger btn-block">Upload Payment Receipt</button>
                                <br><br>
                                <center>
                                    You can pay via E-Wallet or Bank Transfer.
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
            <div class="col-sm-6 col-lg-8 col-xxl-9">
                <div class="card h-100">
                    <div class="card-inner">
                        <div class="project">
                            <div class="project-head">
                                <a href="#" class="project-title">
                                    <div class="project-info">
                                        <h6 class="title"></h6>
                                        <p>
                                            Best Price in Philippines
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="project-details">
                                @php
                                    $currentDate = new DateTime();
                                    $num = 1;
                                @endphp
                                @php
                                    // Get the current date
                                    $currentDate = new DateTime();
                                    // Clone the current date and subtract one month for the previous month
                                    $previousDate = clone $currentDate;
                                    $previousDate->modify('-1 month');

                                    // Format the previous month and year
                                    $previousMonthName = $previousDate->format('F Y');
                                    $previousMonthDue = $previousDate->format('D, M. d Y');
                                    $num = 1;
                                @endphp
                                <table class="datatable-init table">
                                    <thead>
                                        <tr>
                                            <th width="50">#</th>
                                            <th>Months</th>
                                            <th width="150">Amount</th>
                                            <th width="240">Due Date</th>
                                            <th width="100">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $num++ }}</td>
                                            <td>{{ $previousMonthName }}</td>
                                            <td>₱ {{ $monthly }}</td>
                                            <td>{{ $previousMonthDue }}</td>
                                            <td>
                                                <span
                                                    class="badge badge-sm badge-dot has-bg bg-success d-none d-sm-inline-flex w-full">
                                                    Paid
                                                </span>
                                            </td> <!-- Remark column -->
                                        </tr>

                                        <!-- Display the upcoming 9 months -->
                                        @for ($i = 0; $i < 9; $i++)
                                            @php
                                                $date = clone $currentDate;
                                                $date->add(new DateInterval("P{$i}M")); // Add $i months

                                                // Format the month and year
                                                $monthName = $date->format('F Y'); // Example: "October 2023"
                                                $monthName_due = $date->format('D, M. d Y'); // Example: "October 2023"
                                            @endphp
                                            <tr>
                                                <td>{{ $num++ }}</td>
                                                <td>{{ $monthName }}</td>
                                                <td>₱ {{ $monthly }}</td>
                                                <td>{{ $monthName_due }} 11:59 PM</td>
                                                <td>
                                                    @if (isset($_GET['history']))
                                                        <span
                                                            class="badge badge-sm badge-dot has-bg bg-success d-none d-sm-inline-flex w-full">
                                                            Paid
                                                        </span>
                                                        @else
                                                        <span
                                                            class="badge badge-sm badge-dot has-bg bg-warning d-none d-sm-inline-flex w-full">
                                                            Pending
                                                        </span>
                                                    @endif
                                                </td> <!-- You can add a different remark if needed -->
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
