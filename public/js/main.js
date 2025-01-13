import { Autoplay, Navigation, Pagination } from "swiper";
import Swiper from "swiper";

const navTriggerBtn = document.querySelector('#nav_trigger_btn');
const navMenu = document.querySelector('#nav_menu');

// Corrected listener
navTriggerBtn.addEventListener('click', () => {
    navMenu.classList.toggle('nav-is-open'); // 
  });

// swpier 


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
            origin:'bottom',
            distance:'100px',
            duration:5000,
            delay: 200,
         });

        //  head
        sr.reveal('.head__text', {
            origin:'top',
        });

        //steps
        sr.reveal('.benefit__erp',{
            distance:'100px',
            interval:100
        });

        // about
        sr.reveal('.about__text',{
            origin:'left',
        });
        sr.reveal('.about__img',{
            origin:'right',delay:600
        });

        //testimonial
        sr.reveal('.testimonial__bg',{
            delay:400,
        });
        sr.reveal('.testimonial__title');
        sr.reveal('.testimonial__slider',{delay:800});

        sr.reveal('.clients__img',{
            origin:'left',
        });
        
        sr.reveal('.stats');
        sr.reveal('.stats__item',{
            distance:'100px',
            interval:'100'
        });

        // news
         sr.reveal('.news__title');
         sr.reveal('.news__subtitle');
         sr.reveal('.news__swiper',{
            delay:500
         });

         sr.reveal('.news_item',{
            distance:'100px',
            interval:100,
            delay:700,
         });

         sr.reveal('.footer__item',{
            origin:'bottom',
         });

           sr.reveal('.footer__copy',{
            origin:'bottom',
         });


