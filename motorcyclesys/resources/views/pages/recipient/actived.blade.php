@php
    use App\Models\categoryModel;
@endphp
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('My Active Loans') }}</x-slot>
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

            @for ($i = 1; $i <= 2; $i++)
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="product-thumb p-5 pt-0 pb-0">
                                    <a href="/active/loans/payment">
                                        <img class="card-img-top" src="/uploads/{{ $bikes[$i - 1] }}" alt="">
                                    </a>
                                </div>
                                <div class="project-head">
                                    <a href="#" class="project-title">
                                        <div class="project-info">
                                            <h6 class="title">{{ $names[$i - 1] }}</h6><p>
                                                Best Price in Philippines
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="project-details">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td width="100" class="text-end">Price :</td>
                                            <td>₱ {{number_format(rand(53000,100000), 2)}}</td>
                                        </tr>
                                        <tr>
                                            <td width="100" class="text-end">Monthly :</td>
                                            <td>₱ {{number_format(rand(3000,8000), 2)}} x {{ 36 - $month[$i - 1] }} Months</td>
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
                                        <div class="progress-bar  bg-danger" data-progress="{{ $percent[$i - 1] }}" style="width: {{ $percent[$i - 1] }}%;"></div>
                                    </div>
                                </div>
                                
                                <button class="btn btn-light bg-white text-dark btn-block">Make Payment</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

</x-app-layout>
