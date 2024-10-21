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
<div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col shadow-lg rounded">
    <a href="/details">
        <center>
            <img class="hover:grow " style="height: 250px;" src="./uploads/{{ $bikes[$i - 1] }}">
        </center>
        <hr>
        <div class="pt-3 flex items-center justify-between">
            <p class=""><b class="text-xl" style="color: #000;">{{$names[$i - 1]}}</b></p>
            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
            </svg>
        </div>
        <p>from <b class="pt-1 text-red-500">₱ {{number_format(rand(53000,10000), 2)}} - ₱ {{number_format(rand(90000,17500), 2)}}</b></p>
        <p>as low as <b class="pt-1 text-red-500">₱ {{number_format(rand(2000,5000), 2)}} x {{rand(12,48)}} Months</b></p>

    </a>
</div>
@endfor