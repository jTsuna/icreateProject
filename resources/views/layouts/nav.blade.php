<div class="sticky flex flex-row items-center w-full h-24 space-x-10 bg-white border-b-4 border-yellow-600">
    <div class="flex justify-start pl-6 md:pl-40">
        <div class="flex-shrink-0">
            <a href="{{ url('/') }}">
                <img src="{{asset('logo.png')}}" class="block w-auto h-24 py-2" />
            </a>
        </div>
    </div>  
    <div class="flex justify-end flex-grow">
        <div id="nav" class="items-center justify-start hidden w-full h-12 pl-20 space-x-10 text-yellow-600 bg-black md:flex">
            <a class="text-2xl font-bold focus:text-white active:text-white hover:text-white" href="#">HOME</a>
            <a class="text-2xl font-bold focus:text-white active:text-white hover:text-white" href="#">OUR WORKS</a>
            <a class="text-2xl font-bold focus:text-white active:text-white hover:text-white" href="#">OUR CLIENTS</a>
            <a class="text-2xl font-bold focus:text-white active:text-white hover:text-white" href="#">CONTACT US</a>
        </div>
        <svg id="btn" onclick="ToggleNav('nav')" class="block w-6 h-6 text-yellow-600 fill-current md:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </div>
</div>
<div id="nav" class="flex items-center justify-center hidden mb-10 md:block">
    <div class="flex flex-row items-center justify-center w-full text-white md:space-x-3 sm:space-x-1 text-md">
        <a class="flex items-center justify-center px-6 py-2 bg-black rounded-b-md" href="#">EVENTS MANAGEMENT</a>
            <a class="flex items-center justify-center px-6 py-2 bg-black rounded-b-md" href="#">WEB DEVELOPMENT</a>
            <a class="flex items-center justify-center px-6 py-2 bg-black rounded-b-md" href="#">LIVE STREAMING</a>
            <a class="flex items-center justify-center px-6 py-2 bg-black rounded-b-md" href="#">VIRTUAL STAGE</a>
            <a class="flex items-center justify-center px-6 py-2 bg-black rounded-b-md" href="#">VIDEO EDITING</a>
            <a class="flex items-center justify-center px-6 py-2 bg-black rounded-b-md" href="#">GRAPHIC ANIMATION</a>
    </div>
</div>
<script>
        function ToggleNav(collapseID){
            document.getElementById(collapseID).classList.remove('hidden');
            document.getElementById(collapseID).classList.add('block');
        }
</sript>


