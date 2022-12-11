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

    <div class="w-screen pt-24 md:hidden">
        <div class="flex flex-1 w-full">
            <div class="relative ml-10">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-700 " fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class=" p-4 pl-10 focus:bg-white  border-b-2 focus:border-blue-600 focus:outline-none text-gray-600"
                    placeholder="Busque roupas, calçados..." required style="width: 30rem">
                <button type="submit"
                    class="text-white absolute right-2.5 bottom-2.5 bg-blue-600   font-medium rounded-lg text-sm px-4 py-2 ">Buscar</button>
            </div>
            <p class="absolute right-16 py-3 text-gray-500">Serviços Personalizados</p>
            <p class="absolute right-16 py-8 text-black font-bold">(38) 9 9999-8888</p>
        </div>
        <div class="main-carrocel">
            <img src="/images/teste.jpg" alt="">
        </div>
        <div class="cards-box grid grid-cols-2 gap-4  pt-2">
             <div class="bg-green-500"><h1>testes</h1></div>
             <div class="bg-green-500"><h1>testes</h1></div>
             <div class="bg-green-500"><h1>testes</h1></div>
             <div class="bg-green-500"><h1>testes</h1></div>
        </div>
    </div>
</div>
