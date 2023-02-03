@extends('layouts.base')
@section('title', 'Mangcoding Finance - Homepage')

@section('content')

@include('partials.navbar')

<section class="bg-[#F5FBFC]">
    <section class="container pt-8 pb-28 flex flex-col items-center lg:flex-row">
        <div class="space-y-8 flex-1 max-w-[810px] ">
            <span class="text-orange-500">Dashboard Admin Manager</span>
            <h1 class="text-7xl font-bold leading-none relative">
                <span class="text-blue-500"> Managing Finances </span> Well will make you Live rich
            </h1>
            <p class="text-xl text-gray-500">
                Seduten will help you to manage your finances, starting from your monthly expenses and income, ensuring
                that your account and money are safe with our professional system.
            </p>

            <div class="flex space-x-5">
                <a href="" class="btn rounded"> Get Started </a>
                <a href="" class="btn rounded">Download</a>

            </div>
        </div>

        <div class="absolute right-0">
            <div class="bg-[url('/img/Group 173.png')]">
                <img src="./img/heroo.png" alt="">
            </div>
        </div>

        <!-- <div class="flex space-x-4 flex-1 hidden lg:flex">
      <img class="w-full" src="./assets/chair-1.png" alt="">
      <img class="relative -bottom-14 w-full" src="./assets/chair-2.png" alt="">
    </div> -->
    </section>
</section>

<section class="bg-[#FFC741;]">

    <div class="relative">

        <div class="absolute right-0 -top-56  ">

            <img class="" src="img/Frame 433.png" alt="">

        </div>

    </div>
    <section class="container mx-auto mt-32 ">

        <section class=" text-white py-10 ">
            <div class="flex gap-24 text-3xl">
                <p>500 +</p>
                <p>100K +</p>
                <P>3,23m +</P>
            </div>

            <div class="flex gap-32 ml-4 mt-2 ">
                <p>Partner</p>
                <p>User </p>
                <P>Download</P>
            </div>

            <div class="flex gap-24">
                <p>Word Wide</p>
                <p>Word Wide</p>
                <P class="ml-5">Total</P>
            </div>

        </section>


    </section>

</section>
<section>


    <section class="container mx-auto mb-64 bg-[#FFFFFF]">

        <div>
            <p>
                partner :
            </p>
        </div>

        <div class="flex gap-10">
            <img src="img/microsoft logo.png" alt="">
            <img src="img/Google logo.png" alt="">
            <img src="img/Tesla logo.png" alt="">



        </div>

        <div class="flex gap-10 mt-10">
            <img src="img/Payoneer logo.png" alt="">
            <img src="img/PayPal_logo logo.png" alt="">
        </div>

    </section>

    <section class="container mx-auto mt-40">

        <div class="flex float-right ">
            <img src="img/Mask group (1).png" alt="">
        </div>

        <div>
            <p class="text-sm text-[#FFC741] mb-4">Dashboard Admin Manager </p>
            <h1 class="text-5xl">Very professional <span class="text-blue-500"> protection </span></h1>
            <p class="text-sm mt-5 max-w-[540px]">
                Seduten will help you to manage your finances, starting from your monthly expenses and income, ensuring
                that your account and money are safe with our professional system.
            </p>
            <p class="font-bold text-sm mt-5">For Protect your date:</p>
        </div>

        <div class="flex gap-2">
            <img src="img/Group 187.png" alt="">
            <img class="ml-5 " src="img/wordpress-lockup logo.png" alt="">

        </div>

    </section>

    <section class="bg-[#F5FBFC]">

        <section class="container mx-auto mb-64">


            <div class="flex gap-32 mt-32">


                <div class="relative  w-[500px]">


                    <div class="absolute">

                        <img class="" src="img/Group 196.png" alt="">

                    </div>

                </div>

                <div class="mt-24">

                    <p class="text-sm text-[#FFC741] mb-4">Money Saved</p>

                    <h1 class="text-5xl max-w-[500px] flex items-center font-bold ">
                        Want to know how much You can on $eduiten ?
                    </h1>

                    <img src="img/Group 192.png" alt="">

                </div>

            </div>


            </div>

        </section>

    </section>

    <section class="container mx-auto ">

        <div>


            <div class="grid grid-cols-2 grid-rows-2 float-right gap-2">
                @include('partials.features')
            </div>

            <div class="pt-28 ">
                <p class="text-sm text-[#FFC741] mb-4">Available Features </p>
                <h1 class="text-5xl max-w-[540px]">We come with some Amazing features</h1>
                <p class="text-sm mt-5 max-w-[540px]">
                    Seduten will help you to manage your finances, starting from your monthly expenses and income,
                    ensuring that your account and money are safe with our professional system.
                </p>

                <div class="pt-10">
                    <a href="" class="btn rounded">Browse Features</a>
                </div>

            </div>



        </div>

    </section>

    <section class="bg-[#F5FBFC] mt-60 pt-10 pb-10">

        <section class="container mx-auto">

            <div class="flex justify-center">

                <div class="">
                    <p class="text-sm text-[#FFC741] mb-4 pl-64">Available Features </p>
                    <h1 class="text-6xl text-[#33B8C8] ">Dashboard Profesional for </h1>
                    <h1 class="text-6xl pl-36 text-[#33B8C8] ">Your E-Wallet</h1>
                </div>



            </div>

            <div class="relative">

                <div class=" flex justify-center">
                    <img src="img/Group 197.png" alt="">
                </div>

                <div class="absolute top-32">
                    <img src="img/Frame 191.png" alt="">
                </div>

                <div class="absolute top-32 right-0">
                    <img src="img/Frame 192.png" alt="">
                </div>

            </div>

            <div class="flex justify-center">
                <p>
                    Lörem ipsum sagt dilig av anasa hemigon, blåbrun. Vanat lobel och bertad. Traktigt suprabon ett
                    jeling.
                </p>
            </div>

            <div class="flex justify-center gap-10 mt-10">
                <a href="" class="btn rounded">Get Started</a>
                <a href="" class="btn rounded">download</a>
            </div>



        </section>



    </section>

    <section class="container mx-auto">

        <div class="pt-28 ">
            <p class="text-sm text-[#FFC741] mb-4">Testimonial </p>
            <h1 class="text-5xl ">Our clients say</h1>
            <p class="text-sm mt-5 max-w-[540px]">
                Lörem ipsum sagt dilig av anasa hemigon, blåbrun. Vanat lobel och bertad. Traktigt suprabon ett jeling.
            </p>


        </div>

        <div class="grid grid-cols-2 grid-rows-1 mt-10">
            @include('partials.feedback')

            {{-- <div class="flex flex-col lg:flex-row gap-6">

                <div class="bg-[#F9F9F9] pb-5 pr-5">

                    <div class=" pl-10">
                        <img src="img/Frame 48.png" alt="">
                    </div>

                    <div>

                        <p class="text-sm mt-2 ml-5 max-w-[500px]"> Great experience with Seduten, with
                            easy-to-understand features and guaranteed safety </p>


                    </div>

                    <div class="mt-10 ml-5">
                        <img src="img/Group 204.png" alt="">
                    </div>

                </div>

                <div class="bg-[#F9F9F9] pb-5 pr-5">

                    <div class=" pl-10">
                        <img src="img/Tesla logo2.png" alt="">
                    </div>

                    <div>

                        <p class="text-sm mt-2 ml-5 max-w-[500px]"> Great money storage with very large limits for
                            saving money, safe and very reliable </p>


                    </div>

                    <div class="mt-10 ml-5">
                        <img src="img/Group 204 (1).png" alt="">
                    </div>

                </div>


            </div> --}}

        </div>

    </section>

    <section class="container mx-auto py-8">
        <a href="{{ route('feedback') }}">add feedback</a>
    </section>
    @include('partials.footer')

    @endsection
