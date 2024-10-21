{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="/images/logo.png">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased"  style="background-color: #FE0000 !imporant">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html> --}}



<!DOCTYPE html>
<html lang="en">

@vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles
@include('website.header')

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    <!--Nav-->
    @include('website.navbar')


    <section class="bg-white py-8 ">
        <center>
            <h1 class="text-center text-2xl"><b style="color: #000;">Connect to Apply for Installment!</b></h1>
            <br>
            <hr>
        </center>

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            <div class="w-7/12 items-center justify-center border-gray-800">
                <br><br>
                <center>
                    <b style="color: red" class="mt-3">Experience personalized service</b><br>
                    <h1 class="text-3xl"><b style="color: #000">Got no time? Let us call you.</b></h1>
                    <p>Enter your details here. A Wheeltek agent will contact you to help complete your application.</p>
                    <br>
                    <hr>
                    <br>
                    <img src="./banner.png" style="height: 450px" alt="">
                    <br>
                    <h1 class="text-3xl"><b style="color: #000">Talk to a Sales Associate Now!</b></h1>
                    <p>Connect with us now about the purchase you want to make. <br>
                    <small>Our sales associates are available to assist you from 10am to 8pm daily.</small>
                    </p>
                </center>
               
            </div>

            <div class="w-5/12 pl-6">
                <br><br>
                {{ $slot }}
                @livewireScripts
            </div>

           
        </div>
        
    </section>


    @include('website.footer')

</body>

</html>

