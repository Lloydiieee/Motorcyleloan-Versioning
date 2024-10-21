<!DOCTYPE html>
<html lang="en">

@include('website.header')

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    <!--Nav-->
    @include('website.navbar')   
    @include('website.carousel')   


    <section class="bg-white py-8 ">
        <center>
            <h1 class="text-center text-3xl"><b style="color: #000;">Find Sulit Deals For You! 💕</b></h1>
            <br>
            <hr>
        </center>

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                        href="#">
                        Motorcycle Products
                    </a>

                    <div class="flex items-center" id="store-nav-content">

                        <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                            </svg>
                        </a>

                    </div>
                </div>
            </nav>


            @include('website.products')

        </div>

        <center>
            <a href="#" class="round bg-red-900 button">
                <span class="relative text-white font-normal text-primary dark:text-white">
                    Load More
                </span>
            </a>
        </center>

    </section>

    <section class="bg-white py-8">

        <div class="container py-8 px-6 mx-auto">
    
            <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-700 text-3xl mb-8"
                href="#">
                About Us
            </a>
    
            <p class="mb-8 mt-8" style="color: #000">
                Wheeltek Motor Sales Corporation is a multi-brand motorcycle dealer in the business of selling all types
                of motorcycle from smallest to the biggest displacements in nearly every provincxe nationwide. we sell
                nearly all models by all four prominent japanese brands – Honda, Kawasaki, Yamaha, Suzuki and just
                recently TVS from india and KTM from Austria.
            </p>
            <p class="mb-8" style="color: #000">
                Now at our 50th year in the business, we have more than 350 plus Branches branches all over the country
                and we ranked second in the industry. Wheeltek caters to all social classes and to all walks of life
                from regular office workers to motorcycle enthusiasts, to racers, to farmers and even collectors. Other
                businesses of Wheeltek include several showrooms of Chevrolet and Suzuki cars. The main office is
                located in Cabanatuan City while the NCR head office in located in Makati City.
            </p>
    
        </div>
    
    </section>
    
    <section class="">
        <div class="container py-8 px-6 mx-auto border-t border-gray-300">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.438560756217!2d124.78177696579789!3d8.7447404113309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ffe159bd998ac1%3A0x724800c5adc17c6b!2sWheeltek%20Motor%20Sales%20Corp-Balingasag!5e0!3m2!1sen!2sph!4v1729098371148!5m2!1sen!2sph"
                height="450" class="w-full" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    
    </section>

    @include('website.footer')   

</body>

</html>