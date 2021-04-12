<x-guest-layout>
<div class="fixed bg-no-repeat bg-auto md:bg-cover overflow-y-auto font-sans" style="background-image: url({{asset('bg.png')}})">    
        <div class="relative flex justify-center w-screen h-screen">
            <div class="flex flex-col w-full">
            @include('layouts.nav')
                <div class="flex justify-center items-center mt-6">
                    <div class="bg-white h-auto w-full pt-8 pb-16 mb-6 md:mx-20 md:rounded-xl">
                        <!-- event title -->
                        <div class="bg-yellow-600 flex justify-start">
                            <div class="w-full h-auto text-3xl pl-12 py-1 font-bold uppercase">
                                Event Title 1
                            </div>
                        </div>
                        <!-- nav bar -->
                        <div class="flex justify-center items-center mb-10 pl-12 ">
                            <div class="flex flex-row w-full justify-start md:space-x-5 space-x-2 text-white text-lg">
                                <a class="flex justify-center items-center bg-black py-2 px-8 rounded-b-md focus:text-yellow-600" href="#">PHOTOS</a>
                                <a class="flex justify-center items-center bg-black py-2 px-8 rounded-b-md focus:text-yellow-600" href="#">VIDEOS</a>
                            </div>
                        </div>
                        <!-- image containers -->
                        <div class="flex flex-col justify-center items-center pt-10 md:flex-row">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 justify-center items-center text-2xl lg:grid-cols-5">
                                <div class="h-44 w-44 bg-gray-500 ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-44 w-44 bg-gray-500 ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-44 w-44 bg-gray-500 ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-44 w-44 bg-gray-500 ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-44 w-44 bg-gray-500 ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-44 w-44 bg-gray-500 ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-44 w-44 bg-gray-500 ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-44 w-44 bg-gray-500 ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-44 w-44 bg-gray-500 ">
                                    <img src="{{asset('logo.png')}}" alt="">
                                </div>
                                <div class="h-44 w-44 bg-gray-500 ">
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