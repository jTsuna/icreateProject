<x-guest-layout>
<div class="fixed bg-no-repeat bg-auto md:bg-cover overflow-y-auto font-sans" style="background-image: url({{asset('bg.png')}})">    
        <div class="relative flex justify-center w-screen h-screen">
            <div class="flex flex-col w-full">
            @include('layouts.nav')
                <div class="flex justify-center items-center pt-6 pb-6">
                    <div class="bg-white h-auto w-full px-32 py-20 md:py-48  md:mx-32 2xl:mx-64 xl:mx-9 md:rounded-xl text-lg">
                        <div class="flex flex-col justify-center items-center lg:flex-row">
                            <div class="grid grid-cols-1 gap-6 justify-center items-center md:grid-cols-3 lg:grid-cols-5">
                                <div class="h-auto w-auto bg-white ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-auto w-auto bg-white ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-auto w-auto bg-white ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-auto w-auto bg-white ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-auto w-auto bg-white ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-auto w-auto bg-white ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-auto w-auto bg-white ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-auto w-auto bg-white ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-auto w-auto bg-white ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-auto w-auto bg-white ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>