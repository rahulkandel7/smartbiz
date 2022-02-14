<div class="w-full " x-data="{scrolAtTop: true}" :class="{ 'bg-white fixed top-0 z-20 shadow-md': !scrolAtTop }">
    <div class="w-11/12 mx-auto " @scroll.window="scrolAtTop = (window.pageYOffset > 100) ? false : true">
        <div class="flex justify-between items-center">
            <div>
                Logo
            </div>
            <div class="py-2 flex items-center">
                <a href="#home" class="px-4" >
                    <x-navlinks values="Home" class=" text-[#284b81] border-t-2 border-b-2 border-[#ed1b24]"></x-navlinks>
                </a>
    
                <a href="#about" class="px-4" >
                    <x-navlinks values="About" ></x-navlinks>
                </a>
    
                <a href="#services" class="px-4">
                    <x-navlinks values="Services"></x-navlinks>
                </a>
    
                <a href="#teams" class="px-4">
                    <x-navlinks values="Teams"></x-navlinks>
                </a>
    
                <a href="#contact" class="px-4">
                    <x-navlinks values="Contact"></x-navlinks>
                </a>
            </div>
        </div>
    </div>
    
</div>