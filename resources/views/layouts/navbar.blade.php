<div class="relative bg-gray-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6">
        <div class="flex items-center justify-between   py-3 md:justify-start md:space-x-10">
            
                <nav class="hidden space-x-10 md:flex">
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Home<br></a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Lojas<br></a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Produtos<br></a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Anúncios<br></a>                    
                </nav>
            <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
                {{-- <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900 ">PUBLIQUE GRÁTIS<br></a> --}}
                <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Sign
                    in</a>
                <a href="#"
                    class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-blue-500   px-4 py-2 text-base font-medium text-gray-500 shadow-sm hover:text-gray-900">Sign
                    up</a>
            </div>
        </div>       
    </div>

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
</div>
<div class="mt-2">
    <a href="#">
        <div class="flex flex-1">
            <h1 class="bg-yellow-300 w-44 ml-16 text-4xl font-bold text-gray-700 rounded-l">PUBLIQUE</h1>
            <h1 class="bg-gray-700 w-46 text-4xl font-bold text-yellow-300 rounded-r">GRATIS</h1>

            <div class="relative ml-36 w-96">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-700 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 pl-10 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Busque roupas, calçados..." required>
                <button type="submit" class="text-gray-700 absolute right-2.5 bottom-2.5 bg-yellow-300   font-medium rounded-lg text-sm px-4 py-2 ">Pesquisar</button>
            </div>

            <div class="relative ml-60">
                <h1 class="ml-6 font-bold text-gray-500" >Contato</h1>
                <h2>(00)9 9999-8888</h2>
            </div>
           
        </div>
        
    </a>
</div>
