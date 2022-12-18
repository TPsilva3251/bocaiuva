<div class="absolute w-full z-10 top-0">
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5  dark:bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">PortalBocaiúva</span>
            </a>
            {{-- <button data-collapse-toggle="navbar-default" id="btn" onclick="open_menu()" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button> --}}
            {{-- media-sm inicio --}}
            <div class="md:hidden space-x-3">
                <a href="#" class="text-blue-500 text-sm ">Home</a>
                <a href="#" class="text-gray-500 text-sm ">About</a>
                <a href="#" class="text-gray-500 text-sm ">Services</a>
                <a href="#" class="text-gray-500 text-sm ">Pricing</a>
                <a href="#" class="text-gray-500 text-sm ">Contact</a>
            </div>
            {{-- media-sm fim --}}
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!--
          Mobile menu, show/hide based on mobile menu state.
      
          Entering: "duration-200 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
          Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
    {{-- <div class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden">
            <div class="divide-y-2 divide-gray-50 ">
                <div class="px-5 pt-5 pb-6">
                    <div class="flex items-center justify-between">
                        <div class="-mr-2">
                            <a href="/home"><span class="sr-only">Portal Bocaiuva</span></a>
                        </div>
                        <div>
                            <a href="#"
                                class="flex w-full items-center justify-center rounded-md border border-blue-500 hover:border-2  px-4 py-2 text-base font-medium text-gray-500 shadow-sm hover:text-gray-900">Sign
                                up</a>
                            <p class="mt-6 text-center text-base font-medium text-gray-500">
                                Existing customer?
                                <a href="#" class="text-indigo-600 hover:text-indigo-500">Sign in</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="space-y-6 py-6 px-5">
                    <div class="flex items-center gap-y-4 gap-x-8">
                        <a href="/home" class="text-base font-medium text-gray-500 hover:text-gray-900"><span
                                class="">Home<br><i class="fa-solid fa-house text-2xl px-2"></i></span></a>
                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"><span
                                class="">Lojas<br><i class="fa-solid fa-shop text-2xl"></i></span></a>
                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"><span
                                class="">Produtos<br><i class="fa-brands fa-shopify text-2xl px-4"></i></span></a>
                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"><span
                                class="">Anúncios<br><i class="fa-solid fa-newspaper text-2xl px-4"></i></span></a>
                    </div>
                </div>
            </div>
        </div> --}}
    {{--  --}}

    <div class="container flex flex-wrap items-center justify-between mx-auto">

        <div class="hidden w-full md:block md:w-auto py-2 xl:ml-28 2xl:ml-56">
            <div class="flex flex-1 w-full ">
                <div class="relative ml-10">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-700 " fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class=" p-4 pl-10 focus:bg-white  border-b-2 focus:border-blue-600 focus:outline-none text-gray-600 w-30r xl:w-50r"
                        placeholder="Busque roupas, calçados..." required>
                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-600   font-medium rounded-lg text-sm px-4 py-2 ">Buscar</button>
                </div>
                <p class="absolute right-16 py-3 xl:right-48 2xl:right-72 text-gray-500">Serviços Personalizados</p>
                <p class="absolute right-16 py-8 xl:right-48 2xl:right-72 text-black font-bold">(38) 9 9999-8888</p>
            </div>
        </div>
    </div>
</div>

<script>
    function open_menu() {
        console.log("deu");
    }
</script>
