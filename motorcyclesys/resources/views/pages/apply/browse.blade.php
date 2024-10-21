<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Browse Products') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can view the motorcycle and appy here.') }}</x-slot>
    <x-slot name="btn"></x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            @php
                $bikes = [
                    'item-1-638568701981732698-bn7efa.jpeg',
                    'item-1-638573979682788476-uy8m6n.jpeg',
                    'item-1-638574886123649010-9y1e3g.jpeg',
                    'item-1-638574877713280732-kgankb.jpeg',
                    'eee.jpeg',
                    'item-1-638578131641082710-njf4wz.jpeg',
                    'item-1-638578133463908171-nqjonh.jpeg',
                    'item-1-638568873323604401-0alma9.jpeg',
                    'item-1-638574889904291684-oytqa0.jpeg',
                    'item-1-638568915300639097-pt59ok.jpeg',
                    'item-1-638574884082385004-wellzx.jpeg',
                    'item-1-638574878000000749-cbi13l.jpeg',
                ];

                $names = [
                    'Kawasaki CT100B',
                    'Honda XR150LEKP',
                    'Yamaha WR155R B3MB',
                    'Yamaha SZ BE94',
                    'Yamaha Mio Gear S BJN5',
                    'Skygo KPV 150',
                    'Skygo Stallion 150',
                    'Yamaha Mio I125 BB39',
                    'Yamaha YZF-R3 BVJD',
                    'Yamaha Mio Aerox BRW6',
                    'Yamaha Mio I125 BB39',
                    'Yamaha Mio I 125S',
                ];
            @endphp
            @for ($i = 1; $i <= 12; $i++)
                <div class="col-xxl-3 col-lg-3 col-sm-6">
                    <div class="card card-bordered product-card">
                        <div class="product-thumb p-5 pb-0">
                            <a href="#">
                                <img class="card-img-top" src="./uploads/{{ $bikes[$i - 1] }}" alt="">
                            </a>
                        </div>
                        <div class="card-inner text-center">
                            <hr class="mb-3 ">
                            <h5 class="product-title"><a href="#"><b class="text-dark text-2xl">
                                {{$names[$i - 1]}}</b></a></h5>
                            <div class="text-1xl">from <b class="text-danger">₱ {{number_format(rand(53000,10000), 2)}} - ₱ {{number_format(rand(90000,17500), 2)}}</b></div>
                            <div class="text-1xl">As Low as <b class="text-danger">₱ {{number_format(rand(2000,5000), 2)}} x {{rand(12,48)}} Months</b></div>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </div>

    <script>
        function dev() {
            Swal.fire({
                icon: 'warning',
                title: 'Under Development',
                text: 'Opps! Please try again later. thank you.',
                confirmButtonText: 'OK'
            });
        }
    </script>
</x-app-layout>
