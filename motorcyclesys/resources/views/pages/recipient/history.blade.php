@php
    use App\Models\categoryModel;
@endphp
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('My History Loans') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your history loans and update loans here.') }}</x-slot>
    <x-slot name="btn"></x-slot>

    <div class="nk-block ">
        <div class="row g-gs">

            @php
                $bikes = [
                    'item-1-638574877713280732-kgankb.jpeg',
                    'item-1-638578131641082710-njf4wz.jpeg',
                    'item-1-638578133463908171-nqjonh.jpeg',
                    'item-1-638568873323604401-0alma9.jpeg',
                ];
                $names = [
                    'Yamaha Mio Gear S BJN5',
                    'Skygo KPV 150',
                    'Skygo Stallion 150',
                    'Yamaha Mio I125 BB39',
                ];

                $percent = ['39', '80'];
                $month = ['14', '27'];
            @endphp

            @for ($i = 1; $i <= 3; $i++)
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="product-thumb p-5 pt-0 pb-0">
                                    <a href="/active/loans/payment?history">
                                        <img class="card-img-top" style="filter: grayscale(100%);" src="/uploads/{{ $bikes[$i - 1] }}" alt="">
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
                                            <td>₱ {{number_format(rand(3000,8000), 2)}} x {{ 36  }} Months</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>Installment</span></div>
                                        <div class="project-progress-percent"> 36 / <b>36</b>&ensp; <em class="icon ni ni-check-circle-cut text-success" style="font-size: 18px"></em></div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar  bg-success" data-progress="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                                <center><b>Installment Completed</b></center>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

</x-app-layout>
