 <header class="sticky top-0 h-[90px] shadow-xl z-30 bg-white">
        <div class="container mx-auto flex justify-between h-full items-center">
            {{-- logo --}}
            <a href="">
                <img src="{{ asset('img/hashmicro.jpg') }}" alt="" class="">
            </a>
            {{-- navbar --}}
            <nav>
                <div class="cursor-pointer lg:hidden" id="nav_trigger_btn">
                    <i class="ri-menu-4-line text-4xl text-primary"></i>
                </div>
                <ul class="fixed w-full h-0 p-0 bg-white overflow-hidden border-t top-[90px] left-0 right-0 flex flex-col gap-4 lg:relative lg:flex-row lg:p-0 lg:top-0 lg:border-none lg:h-full transition-all duration-300 "
                    id="nav_menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Our Work</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>


    </header>