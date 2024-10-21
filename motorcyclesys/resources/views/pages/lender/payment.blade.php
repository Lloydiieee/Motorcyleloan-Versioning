@php
    use App\Models\categoryModel;
@endphp
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Loans Payments') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage the payments and update loans here.') }}</x-slot>
    <x-slot name="btn">

    </x-slot>

    <div class="nk-block ">
        <div class="row g-gs">
            <div class="col-sm-12">
                @if (session('trash'))
                    <div class="alert alert-pro alert-success">
                        <div class="alert-text">
                            <h6>
                                <em class="icon ni ni-check" style="font-size: 18px"></em>
                                &nbsp; Moved to Trash Successfully.
                            </h6>
                            <p>
                                The post <i>{{ session('trash') }}</i> have been move to trash. You can check to
                                trash bin.
                            </p>
                        </div>
                    </div>
                @endif
                <div class="card h-100">
                    <div class="card-inner">
                        @php
                            $names = ['John Doe', 'Jane Smith', 'Michael Brown', 'Lisa Johnson', 'David Lee'];
                            $statuses = ['Paid', 'Unpaid', 'Late'];
                            $num_rows = 10; // Number of rows to generate
                        @endphp

                        <table class="datatable-init table">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th width="">Applicant Name</th>
                                    <th width="">Loan Amount</th>
                                    <th width="">Monthly Payment</th>
                                    <th width="">Due Date</th>
                                    <th width="">Amount Paid</th>
                                    <th width="120" class="">Status</th>
                                    <th width="200">Payment Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= $num_rows; $i++)
                                    @php
                                        $applicantName = $names[array_rand($names)];
                                        $loanAmount = rand(100000, 500000); // Random loan amount between 100k to 500k
                                        $monthlyPayment = rand(5000, 20000); // Random monthly payment between 5k to 20k
                                        $dueDate = date('Y-m-d', strtotime('+' . rand(1, 12) . ' months')); // Random due date in the future (1-12 months)
                                        $amountPaid = rand(0, $monthlyPayment); // Random amount paid (can be partial or full)
                                        $status =
                                            $amountPaid >= $monthlyPayment ? 'Paid' : $statuses[array_rand($statuses)];
                                        $paymentDate =
                                            $status === 'Paid'
                                                ? date('Y-m-d', strtotime('-' . rand(1, 30) . ' days'))
                                                : 'N/A'; // Random payment date for "Paid" status
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $applicantName }}</td>
                                        <td>₱ {{ number_format($loanAmount) }}</td>
                                        <td>₱ {{ number_format($monthlyPayment) }}</td>
                                        <td>{{ $dueDate }}</td>
                                        <td>₱ {{ number_format($amountPaid) }}</td>
                                        <td>{{ $status }}</td>
                                        <td>{{ $paymentDate }}</td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
