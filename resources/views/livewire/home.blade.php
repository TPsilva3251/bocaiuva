<div>
    <title>{{ $title }}</title>
    @extends('layouts.navbar')

    {{-- <div class="flex flex-wrap items-center justify-between m-auto pt-36 ">       
        <div class="grid  grid-flow-col gap-4 pt-16 w-screen bg-blue-800">
            <div class="row-span-6 bg-blue-600 w-100 ml-3 max- h-60 " >
                <p>kfkafhkadjfhkajhfakdsjfhskadjh</p>
            </div>
            <div class="h-20 teste w-48" >01</div>
            <div class="h-20 bg-red-300 w-48" >01</div>
            <div class="h-20 bg-red-300 w-48" >01</div>
           
        </div>
    </div> --}}

    <div class="w-screen pt-14 md:pt-36 ">
        <div class="flex flex-1 w-full md:hidden">
            <div class="relative ml-32">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-700 " fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class=" py-4 pl-10 focus:bg-white  border-b-2 focus:border-blue-600 focus:outline-none text-gray-600 w-100 -mr-16"
                    placeholder="O que você procura?" required>
                <button type="submit"
                    class="text-white absolute  bottom-2.5 bg-blue-600   font-medium rounded-lg text-sm px-2 py-2 ">Buscar</button>
            </div>
            {{-- <p class="absolute right-16 py-3 text-gray-500">Serviços Personalizados</p>
            <p class="absolute right-16 py-8 text-black font-bold">(38) 9 9999-8888</p> --}}
        </div>
        {{-- Carrossel inicio --}}
        <div class="slideshow-container pt-1">

            <div class="mySlides fade" id="1">
                <img src="/images/teste.jpg" class="h-64 w-screen m-auto">
                <div class="text">caption One</div>
            </div>

            <div class="mySlides fade">
                <img src="/images/teste2.jpg" class="h-64 w-screen m-auto">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <img src="/images/teste3.jpg" class="h-64 w-screen m-auto">
                <div class="text">Caption Three</div>
            </div>

        </div>
        <div style="text-align:center">
            <a href="/" class="dot"></a>
            <a href="/" class="dot"></a>
            <a href="/" class="dot"></a>
        </div>
        {{-- Carrossel fim --}}
        <div class="cards-box grid grid-cols-4 gap-4  pt-2 ">
            <div class="bg-blue-500 w-50 h-10 mx-6 rounded-lg flex items-center justify-center xl: mx-2"><svg
                    class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>
                <h1 class="pl-4 text-white">Mercado</h1>
            </div>
            <div class="bg-blue-500 w-50 h-10 mx-6 rounded-lg flex items-center justify-center  xl: mx-2"><svg
                    xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grill text-white"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M19 8h-14a6 6 0 0 0 6 6h2a6 6 0 0 0 5.996 -5.775l.004 -.225z"></path>
                    <path d="M17 20a2 2 0 1 1 0 -4a2 2 0 0 1 0 4z"></path>
                    <path d="M15 14l1 2"></path>
                    <path d="M9 14l-3 6"></path>
                    <path d="M15 18h-8"></path>
                    <path d="M15 5v-1"></path>
                    <path d="M12 5v-1"></path>
                    <path d="M9 5v-1"></path>
                </svg>
                <h1 class="pl-4 text-white">Alimentção</h1>
            </div>
            <div class="bg-blue-500 w-50 h-10 mx-6 rounded-lg flex items-center justify-center  xl: mx-2"><svg
                    class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                <h1 class="pl-4 text-white">Moda</h1>
            </div>
            <div class="bg-blue-500 w-50 h-10 mx-6 rounded-lg flex items-center justify-center  xl: mx-2"><svg
                    xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tool text-white"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5">
                    </path>
                </svg>
                <h1 class="pl-4 text-white">Mecânicas</h1>
            </div>
            <div class="bg-blue-500 w-50 h-10 mx-6 rounded-lg flex items-center justify-center  xl: mx-2"><svg
                    xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-medical-cross text-white"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M13 3a1 1 0 0 1 1 1v4.535l3.928 -2.267a1 1 0 0 1 1.366 .366l1 1.732a1 1 0 0 1 -.366 1.366l-3.927 2.268l3.927 2.269a1 1 0 0 1 .366 1.366l-1 1.732a1 1 0 0 1 -1.366 .366l-3.928 -2.269v4.536a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-4.536l-3.928 2.268a1 1 0 0 1 -1.366 -.366l-1 -1.732a1 1 0 0 1 .366 -1.366l3.927 -2.268l-3.927 -2.268a1 1 0 0 1 -.366 -1.366l1 -1.732a1 1 0 0 1 1.366 -.366l3.928 2.267v-4.535a1 1 0 0 1 1 -1h2z">
                    </path>
                </svg>
                <h1 class="pl-4 text-white">Saúde</h1>
            </div>
            <div class="bg-blue-500 w-50 h-10 mx-6 rounded-lg flex items-center justify-center  xl: mx-2"><svg
                    xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-24-hours text-white"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                    <path d="M4 13a8.094 8.094 0 0 0 3 5.24"></path>
                    <path d="M11 15h2a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-1a1 1 0 0 0 -1 1v1a1 1 0 0 0 1 1h2"></path>
                    <path d="M17 15v2a1 1 0 0 0 1 1h1"></path>
                    <path d="M20 15v6"></path>
                </svg>
                <h1 class="pl-4 text-white">24 Horas</h1>
            </div>
            <div class="bg-blue-500 w-50 h-10 mx-6 rounded-lg flex items-center justify-center  xl: mx-2"><svg
                    xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-beach text-white"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M17.553 16.75a7.5 7.5 0 0 0 -10.606 0"></path>
                    <path d="M18 3.804a6 6 0 0 0 -8.196 2.196l10.392 6a6 6 0 0 0 -2.196 -8.196z"></path>
                    <path d="M16.732 10c1.658 -2.87 2.225 -5.644 1.268 -6.196c-.957 -.552 -3.075 1.326 -4.732 4.196">
                    </path>
                    <path d="M15 9l-3 5.196"></path>
                    <path
                        d="M3 19.25a2.4 2.4 0 0 1 1 -.25a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 1 .25">
                    </path>
                </svg>
                <h1 class="pl-4 text-white">Lazer</h1>
            </div>
            <div class="bg-blue-500 w-50 h-10 mx-6 rounded-lg flex items-center justify-center  xl: mx-2"><svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-square-rounded-letter-s text-white" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M10 15a1 1 0 0 0 1 1h2a1 1 0 0 0 1 -1v-2a1 1 0 0 0 -1 -1h-2a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1">
                    </path>
                    <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z"></path>
                </svg>
                <h1 class="pl-4 text-white">Serviços</h1>
            </div>
        </div>
    </div>
    <button id="back-to-top" class="rounded-lg p-1"><svg xmlns="http://www.w3.org/2000/svg"
            class="icon icon-tabler icon-tabler-arrow-up text-white" width="30" height="30"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <line x1="18" y1="11" x2="12" y2="5"></line>
            <line x1="6" y1="11" x2="12" y2="5"></line>
        </svg></button>
    @include('layouts.footer')
</div>
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }

    // 

    var btn = document.querySelector("#back-to-top");

    btn.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: "smooth"
        });
    });
</script>
