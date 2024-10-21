@php
    use App\Models\categoryModel;
@endphp
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Pending Loans Application') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage the pending loans and update loans here.') }}</x-slot>
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
                            $units = ['Yamaha NMAX', 'Honda PCX', 'Suzuki Raider', 'Kawasaki Rouser', 'Vespa Sprint'];
                            $statuses = ['Pending', 'Approved', 'Rejected'];
                            $num_rows = 5; // Number of rows to generate
                        @endphp
                        <table class="datatable-init table table-hover text-dark">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th width="">Applicant Name</th>
                                    <th width="">Unit / Model Description</th>
                                    <th width="">Price</th>
                                    <th width="">Monthly</th>
                                    <th width="120" class="">Status</th>
                                    <th width="200">Date Submitted</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 2; $i++)
                                    @php
                                        $applicantName = $names[array_rand($names)];
                                        $unit = $units[array_rand($units)];
                                        $price = rand(50000, 150000); // Random price between 50k to 150k
                                        $monthly = rand(3000, 8000); // Random monthly between 3k to 8k
                                        $status = $statuses[array_rand($statuses)];
                                        $dateSubmitted = date('Y-m-d', strtotime('-' . rand(0, 60) . ' days')); // Random date within the last 60 days
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $applicantName }}</td>
                                        <td>{{ $unit }}</td>
                                        <td>₱ {{ number_format($price) }}</td>
                                        <td>₱ {{ number_format($monthly) }}</td>
                                        <td>
                                            <span
                                                class="badge badge-sm badge-dot has-bg bg-warning d-none d-sm-inline-flex w-full">
                                                Pending
                                            </span>
                                        </td>
                                        <td>{{ $dateSubmitted }}</td>
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
