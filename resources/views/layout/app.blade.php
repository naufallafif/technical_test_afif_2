 <main class="max-w-[1980px] mx-auto bg-white overflow-hidden ">
     <div class="xl-bg-grid xl:bg-center xl:bg-repeat-y fixed top-0 bottom-0 left-0 right-0 z-10"></div>

<section class="bg-head h-[640px] xl:h-[840px] bg-center bg-hero bg-cover bg-no-repeat bg-fixed xl:rounded-bl-[290px] relative z-20">
    <div class="container mx-auto h-full flex items-center justify-center xl:justify-start">
        <div class="head__text w-[867px] flex flex-col items-center text-center xl:text-left lg:items-start">
            <h1 class="h1 mb-8">{{ $headline }}</h1>
            <p class="poppins mb-8 text-white justify-normal">{{ $description }}</p>

            <button class="btn btn-primary mx-auto xl:mx-0 mt-10 text-white font-bold">
                {{ $buttonText }}
                <i class="{{ $buttonIcon }}"></i>
            </button>
        </div>
    </div>
</section>


     {{-- Benefits ERP --}}
   <section class="benefits xl:mt-[100px] relative z-20">
    <h1 class="h1 mb-8 text-center bg-gradient-to-r from-yellow-500 via-orange-400-900 to-red-900 bg-clip-text text-transparent text-5xl font-bold transition-all duration-500 hover:scale-110 hover:rotate-2 hover:shadow-2xl hover:bg-gradient-to-l cursor-pointer">
       Benefits
    </h1>
    <!-- Erp Benefits -->
    <div class="container mx-auto">
        <div class="grid grid-cols-2 gap-12 xl:grid-cols-3">
            @foreach ($benefits as $benefit)
                <div class="benefit__erp text-center text-accent hover:scale-110 hover:text-red-500 hover:shadow-md transition duration-300 cursor-pointer">
                    <div>
                        <i class="{{ $benefit['icon'] }} text-5xl"></i>
                    </div>
                    <h3 class="h3 mb-4 text-black">{{ $benefit['title'] }}</h3>
                    <p class="mb-4 max-w-md mx-auto">{{ $benefit['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


     {{-- About HashMicro --}}
     <section class="about mt-[50px] xl:mt-[50px] relative z-20">
         <div class="container mx-auto xl:px-0">
             <div
                 class="flex flex-col text-center xl:flex-row xl:text-left justify-between items-center gap-8 xl:gap-[74px]">

                 <div
                     class="about__text flex-1 order-2 xl:order-none max-w-xl xl:max-w-[810px] flex flex-col items-center xl:items-start gap-2">
                     <h2 class="h2 text-accent-thirty mb-5">Best ERP Software for All Industries</h2>
                     <p class="xl:max-w-[810px]">
                         As a leading ERP provider solution, we recognize the importance of enterprises’ productivity
                         and efficiency. That is why, in 2015, we took the opportunity to set up a cloud-based system
                         that automates end-to-end business operations. Our clients trust us for our capability to
                         develop a system that complies with their regular and specific regulations. This motivates us
                         to bring the benefits of ERP software to a greater range of industries and solutions.
                     </p>

                     <div class="flex items-center justify-center xl:justify-start gap-4 mt-5">
                         <div class="bg-accent/15 w-[90px] rounded-full flex justify-center items-center">
                             <i class="ri-customer-service-2-line text-accent-thirty text-4xl"></i>
                         </div>
                         <div class="text-left">
                             <div class="text-2xl font-bold">62 878 8800 0015</div>
                             <div>Call Us Anytime</div>
                         </div>
                     </div>

                     <button class="btn btn-primary mx-auto xl:mx-0 mt-10 text-white font-bold mb-10">
                         Free Demonstration
                         <i class="ri-arrow-right-line text-accent-thirty"></i>
                     </button>
                 </div>

                 {{-- Image --}}
                 <div class="about__img order-1 xl:order-none max-w-[500px] mx-auto xl:max-w-none xl:mx-0">
                     <img src="{{ asset('img/about.png') }}" alt="About Image">
                 </div>

             </div>
         </div>
     </section>


     {{-- Testimonials --}}
     <section class="testimonial mt-[80px] xl:mt-[200px] relative z-20">
         <div class="testimonial__bg container mx-auto bg-accent-secondary rounded-[70px] px-6 ">

             <div class="flex flex-col items-center pt-[80px] pb-[110px]">
                 <h2 class="testimonial__title h2 mb-9 text-center text-red-500">Clients testimonial</h2>
                 {{-- Slider --}}
                 <div class="w-full">
                     <div class="testimonial__slider swiper h-400px">

                         <div class="swiper-wrapper">
                             {{-- slide 1 --}}
                             <div class="swiper-slide">
                                 {{-- item --}}
                                 <div
                                     class="testimonial__item w-full max-w-[450px] h-[300px] rounded-[30px] bg-red-500 flex flex-col p-9 mx-auto ">

                                     <div class="flex gap-4 mb-6">
                                         <img src="{{ asset('img/brands/brand1.png') }}"
                                             class="max-w-[77px]" alt="Choco">
                                         <div class="text-white  ">
                                             <h3 class="h3">Bee Choo Origin</h3>
                                             <div>100% Natural Herbal Treatment</div>
                                         </div>
                                     </div>
                                     <p class="text-white poppins">Lorem ipsum dolor sit amet consectetur,
                                         adipisicing elit.</p>
                                 </div>
                             </div>
                             {{-- slide 2 --}}
                             <div class="swiper-slide">
                                 {{-- item --}}
                                 <div
                                     class="testimonial__item w-full max-w-[450px] h-[300px] rounded-[30px] bg-red-500 flex flex-col p-9 mx-auto ">

                                     <div class="flex gap-4 mb-6">
                                         <img src="{{ asset('img/brands/brand1.png') }}"
                                             class="max-w-[77px]" alt="Choco">
                                         <div class="text-white poppins">
                                             <h3 class="h3">Bee Choo Origin</h3>
                                             <div>100% Natural Herbal Treatment</div>
                                         </div>
                                     </div>
                                     <p class="text-white poppins">Lorem ipsum dolor sit amet consectetur,
                                         adipisicing elit.</p>
                                 </div>
                             </div>
                             {{-- slide 3 --}}
                             <div class="swiper-slide">
                                 {{-- item --}}
                                 <div
                                     class="testimonial__item w-full max-w-[450px] h-[300px] rounded-[30px] bg-red-500 flex flex-col p-9 mx-auto ">

                                     <div class="flex gap-4 mb-6">
                                         <img src="{{ asset('img/brands/brand1.png') }}"
                                             class="max-w-[77px]" alt="Choco">
                                         <div class="text-white poppins">
                                             <h3 class="h3">Bee Choo Origin</h3>
                                             <div>100% Natural Herbal Treatment</div>
                                         </div>
                                     </div>
                                     <p class="text-white poppins">Lorem ipsum dolor sit amet consectetur,
                                         adipisicing elit.</p>
                                 </div>
                             </div>
                             {{-- slide 4 --}}
                             <div class="swiper-slide">
                                 {{-- item --}}
                                 <div
                                     class="testimonial__item w-full max-w-[450px] h-[300px] rounded-[30px] bg-red-500 flex flex-col p-9 mx-auto ">

                                     <div class="flex gap-4 mb-6">
                                         <img src="{{ asset('img/brands/brand1.png') }}"
                                             class="max-w-[77px]" alt="Choco">
                                         <div class="text-white poppins">
                                             <h3 class="h3">Bee Choo Origin</h3>
                                             <div>100% Natural Herbal Treatment</div>
                                         </div>
                                     </div>
                                     <p class="text-white poppins">Lorem ipsum dolor sit amet consectetur,
                                         adipisicing elit.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     {{-- pagination --}}
                     <div class="swiper-pagination"></div>
                 </div>
             </div>
         </div>
     </section>

     {{-- Clients --}}
     <section class="clients mt-[80px] xl:mt-[100px] relative z-20">
         <div class="container mx-auto">

             <div class="flex flex-col xl:flex-row max-xl:[200px] justify-between items-center gap-12 ">

                 <img class="clients__img max-w-[250px]"
                     src="{{ asset('img/clients/client1.svg') }}" alt="">
                 <img class="clients__img max-w-[250px]"
                     src="{{ asset('img/clients/client2.svg') }}" alt="">
                 <img class="clients__img max-w-[250px]"
                     src="{{ asset('img/clients/client.svg') }}" alt="">
                 <img class="clients__img max-w-[250px]"
                     src="{{ asset('img/clients/client4.svg') }}" alt="">
                 <img class="clients__img max-w-[250px]"
                     src="{{ asset('img/clients/client5.svg') }}" alt="">

             </div>
         </div>
     </section>

     {{-- Stats --}}
     <section class="stats mt-[80px] xl:mt-[150px] relative z-20 bg-accent-secondary py-[50px] xl:py[100px]">
         <div class="container mx-auto ">
             {{-- grid --}}
             <div class="grid grid-cols-1 xl:grid-cols-4 gap-12">
                 {{-- grid item --}}
                 <div class="stats__item text-center xl:border-r xl:border-primary-second poppins">
                     <h3 class="h1 font-primary text-accent-thirty">2</h3>
                     <p>Years CNBC Awards Winner</p>
                 </div>
                 {{-- grid item --}}
                 <div class="stats__item text-center xl:border-r xl:border-accent-default poppins">
                     <h3 class="h1 text-accent-thirty">200+</h3>
                     <p>Clients</p>
                 </div>
                 {{-- grid item --}}
                 <div class="stats__item text-center xl:border-r xl:border-accent-default poppins">
                     <h3 class="h1 font-primary text-accent-thirty">40+</h3>
                     <p>Moduls</p>
                 </div>
                 {{-- grid item --}}
                 <div class="stats__item text-center poppins ">
                     <h3 class="h1 font-primary text-accent-thirty">3</h3>
                     <p>ISO Cerified</p>
                 </div>
             </div>

         </div>
     </section>

     {{-- News --}}
     <section class="news mt-[80px] xl:mt-[150px] relative z-20">
         <div class="container mx-auto px-0 gap-1">
             {{-- Title --}}
             <div class="poppins max-w-[810px] mx-auto text-center mb-[52px]">
                 <h2 class="news__title h2 text-black mb-3 font-semibold"> Article & News</h2>
                 <p class="news__subtitle italic">HashMicro, The Next Big Thing dalam Industri IT dari Indonesia</p>
             </div>
             {{-- Swiper --}}
             <div class="news__swiper swiper h-400px">
                 <div class="swiper-wrapper">
                     {{-- Slide 1 --}}
                     <div class="swiper-slide">
                         {{-- Grid Item --}}
                         <div
                             class="news__item w-full max-w-[382px] h-[460px] border border-primary/20 rounded-[62px] p-[20px] mx-auto xl:mx-0 transition-all duration-500 hover:scale-110 hover:rotate-2 hover:shadow-2xl hover:bg-gradient-to-l cursor-pointer mt-10 gap-1">
                             <img class="mb-5 rounded-t-3xl"
                                 src="{{ asset('img/news/news1.png') }}" alt="">
                             <div class="poppins flex flex-col gap-[30px]">
                                 <h3 class="h3 text-black font-semibold">HashMicro Raih Penghargaan Kategori Best
                                     Business Software</h3>
                                 <div class="flex items-center justify-between">
                                     <p class="text-base">01 December 2023 </p>
                                     <button
                                         class="btn btn-primary  text-white w-[52px] h-[52px] rounded-full transition-all">
                                         <i
                                             class="ri-arrow-right-s-line text-1xl text-primary-second  items-center"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                     </div>
                     {{-- Slide 2 --}}
                     <div class="swiper-slide">
                         {{-- Grid Item --}}
                         <div
                             class="news__item w-full max-w-[382px] h-[460px] border border-primary/20 rounded-[62px] p-[20px] mx-auto xl:mx-0 transition-all duration-500 hover:scale-110 hover:rotate-2 hover:shadow-2xl hover:bg-gradient-to-l cursor-pointer mt-10 gap-2">
                             <img class="mb-5 rounded-t-3xl"
                                 src="{{ asset('img/news/news1.png') }}" alt="">
                             <div class="poppins flex flex-col gap-[30px]">
                                 <h3 class="h3 text-black font-semibold">HashMicro Raih Penghargaan Kategori Best
                                     Business Software</h3>
                                 <div class="flex items-center justify-between">
                                     <p class="text-base">01 December 2023 </p>
                                     <button
                                         class="btn btn-primary  text-white w-[52px] h-[52px] rounded-full transition-all">
                                         <i
                                             class="ri-arrow-right-s-line text-1xl text-primary-second  items-center"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                     </div>
                     {{-- Slide 3 --}}
                     <div class="swiper-slide">
                         {{-- Grid Item --}}
                         <div
                             class="news__item w-full max-w-[382px] h-[460px] border border-primary/20 rounded-[62px] p-[20px] mx-auto xl:mx-0 transition-all duration-500 hover:scale-110 hover:rotate-2 hover:shadow-2xl hover:bg-gradient-to-l cursor-pointer mt-10 gap-2">
                             <img class="mb-5 rounded-t-3xl"
                                 src="{{ asset('img/news/news1.png') }}" alt="">
                             <div class="poppins flex flex-col gap-[30px]">
                                 <h3 class="h3 text-black font-semibold">HashMicro Raih Penghargaan Kategori Best
                                     Business Software</h3>
                                 <div class="flex items-center justify-between">
                                     <p class="text-base">01 December 2023 </p>
                                     <button
                                         class="btn btn-primary  text-white w-[52px] h-[52px] rounded-full transition-all">
                                         <i
                                             class="ri-arrow-right-s-line text-1xl text-primary-second  items-center"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                     </div>
                     {{-- Slide 4 --}}
                     <div class="swiper-slide">
                         {{-- Grid Item --}}
                         <div
                             class="news__item w-full max-w-[382px] h-[460px] border border-primary/20 rounded-[62px] p-[20px] mx-auto xl:mx-0 transition-all duration-500 hover:scale-110 hover:rotate-2 hover:shadow-2xl hover:bg-gradient-to-l cursor-pointer mt-10 gap-2">
                             <img class="mb-5 rounded-t-3xl"
                                 src="{{ asset('img/news/news1.png') }}" alt="">
                             <div class="poppins flex flex-col gap-[30px]">
                                 <h3 class="h3 text-black font-semibold">HashMicro Raih Penghargaan Kategori Best
                                     Business Software</h3>
                                 <div class="flex items-center justify-between">
                                     <p class="text-base">01 December 2023 </p>
                                     <button
                                         class="btn btn-primary  text-white w-[52px] h-[52px] rounded-full transition-all">
                                         <i
                                             class="ri-arrow-right-s-line text-1xl text-primary-second  items-center"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 {{-- Pagination --}}
                 <div class="swiper-pagination"></div>
             </div>
         </div>
     </section>
     @include('partials.footer')



     <script src="{{ asset('js/main.js') }}"></script>
     <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
     <script src="{{ asset('js/swiper-bundle-min.js') }}"></script>
     <script src="https://cdn.tailwindcss.com"></script>
     <script src="https://unpkg.com/swiper/swiper"></script>
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <script>
         const swiper = new Swiper('.swiper', {
             direction: 'horizontal',
             loop: true,
             pagination: {
                 el: '.swiper-pagination',
                 clickable: true,
             },

             slidesPerView: 3,
             spaceBetween: 20,
             breakpoints: {
                 320: {
                     slidesPerView: 1,
                 },
                 960: {
                     slidesPerView: 2,
                 },
                 1200: {
                     slidesPerView: 3,
                 },
             },
         });

         // Scroll
         const sr = ScrollReveal({
             origin: 'bottom',
             distance: '100px',
             duration: 5000,
             delay: 200,
         });

         //  head
         sr.reveal('.head__text', {
             origin: 'top',
         });

         //steps
         sr.reveal('.benefit__erp', {
             distance: '100px',
             interval: 100
         });

         // about
         sr.reveal('.about__text', {
             origin: 'left',
         });
         sr.reveal('.about__img', {
             origin: 'right',
             delay: 600
         });

         //testimonial
         sr.reveal('.testimonial__bg', {
             delay: 400,
         });
         sr.reveal('.testimonial__title');
         sr.reveal('.testimonial__slider', {
             delay: 800
         });

         sr.reveal('.clients__img', {
             origin: 'left',
         });

         sr.reveal('.stats');
         sr.reveal('.stats__item', {
             distance: '100px',
             interval: '100'
         });

         // news
         sr.reveal('.news__title');
         sr.reveal('.news__subtitle');
         sr.reveal('.news__swiper', {
             delay: 500
         });

         sr.reveal('.news_item', {
             distance: '100px',
             interval: 100,
             delay: 700,
         });

         sr.reveal('.footer__item', {
             origin: 'bottom',
         });

         sr.reveal('.footer__copy', {
             origin: 'bottom',
         });

     </script>
 </main>
