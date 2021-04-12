<x-guest-layout>
<div class="fixed overflow-y-auto font-sans bg-no-repeat bg-auto md:bg-cover" style="background-image: url({{asset('bg.png')}})">    
        <div class="relative flex justify-center w-screen h-screen">
            <div class="flex flex-col w-full">
                @include('layouts.nav')
                <div class="flex items-center justify-center pt-6">
                    <div class="w-auto h-auto p-10 mb-6 text-lg bg-white md:mx-32 md:rounded-xl">
                        <div class="flex flex-col items-center justify-center space-x-10 md:flex-row">
                            <div class="w-auto h-auto bg-yellow-600 md:rounded-xl md:w-1/2">
                                <div class="flex flex-col items-center justify-center p-6">
                                    <img src="{{asset('logo.png')}}" alt=" iCreate Logo">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                            <div class="w-auto h-auto bg-white md:rounded-xl md:w-1/2">
                                <div class="flex flex-col items-center justify-center p-6">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-guest-layout>
