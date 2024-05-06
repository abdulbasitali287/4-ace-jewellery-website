@extends('layouts.app')
@section('content')
    <div>
        {{-- banner component --}}
        <x-app.banner src="{{ asset('app/assets/images/banner/newsroom-banner.png') }}" text="NEWSROOM"></x-app.banner>

        {{-- card section 02 --}}
        <section class="bg-black py-10">
            <div class="container mx-auto px-10">
                {{-- search bar --}}
                <div class="row-auto flex justify-end py-10">
                    <form class="max-w-lg">
                        <div class="flex">
                            <div class="relative w-full">
                                <input type="search" class="ps-6 pe-28 py-2 w-full z-20 bg-black rounded-s-lg rounded-e-lg border border-e-0 border-gray-300 focus:text-white" placeholder="Search for..."/>
                                <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-gradientButton rounded-e-lg border border-gray-300 border-opacity-20">
                                    <span class="">GO!</span>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>

                {{-- card area --}}
                <div class="row-auto pb-10">
                    <div class="md:columns-2 gap-x-20">
                        <div class="flex flex-col relative w-full pb-10 m-0 p-0 border border-gray-50 rounded-2xl border-opacity-50 mb-10 break-inside-avoid-column">
                            <div class="relative flex justify-center w-full h-[300px]">
                                <img src="{{ asset('app/assets/images/newsroom/card-1.png') }}"
                                    class="object-cover w-full rounded-t-2xl h-full" alt="">
                            </div>
                            <div class="px-5 border-t border-gray-50 border-opacity-50">
                                <div>
                                    <h1 class="text-white text-2xl font-semibold leading-7 pt-2 pb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry....</h1>
                                </div>
                                <div class="text-center pt-6">
                                    <div class="pb-8">
                                        <p class="text-[#C5C5C5]">{{ date('F d, Y') }}</p>
                                    </div>
                                    <div>
                                        <a href="{{ url('newsroom-details') }}" class="bg-gradientButton hover:bg-gradientButtonHover mx-auto text-white font-semibold duration-300 transition-all py-4 px-12 rounded-full sm:my-10 my-5">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col relative w-full pb-10 m-0 p-0 border border-gray-50 rounded-2xl border-opacity-50 mb-10 break-inside-avoid-column">
                            <div class="relative flex justify-center w-full h-[300px]">
                                <img src="{{ asset('app/assets/images/newsroom/card-3.png') }}"
                                    class="object-cover w-full rounded-t-2xl h-full" alt="">
                            </div>
                            <div class="px-5 border-t border-gray-50 border-opacity-50">
                                <div>
                                    <h1 class="text-white text-2xl font-semibold leading-7 pt-2 pb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry....</h1>
                                </div>
                                <div class="text-center pt-6">
                                    <div class="pb-8">
                                        <p class="text-[#C5C5C5]">{{ date('F d, Y') }}</p>
                                    </div>
                                    <div>
                                        <a href="{{ url('newsroom-details') }}" class="bg-gradientButton hover:bg-gradientButtonHover mx-auto text-white font-semibold duration-300 transition-all py-4 px-12 rounded-full sm:my-10 my-5">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col relative w-full pb-10 m-0 p-0 border border-gray-50 rounded-2xl border-opacity-50 mb-10 break-inside-avoid-column">
                            <div class="relative flex justify-center w-full h-[300px]">
                                <img src="{{ asset('app/assets/images/newsroom/card-2.png') }}"
                                    class="object-cover w-full rounded-t-2xl h-full" alt="">
                            </div>
                            <div class="px-5 border-t border-gray-50 border-opacity-50">
                                <div>
                                    <h1 class="text-white text-2xl font-semibold leading-7 pt-2 pb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry....</h1>
                                </div>
                                <div class="text-center pt-6">
                                    <div class="pb-8">
                                        <p class="text-[#C5C5C5]">{{ date('F d, Y') }}</p>
                                    </div>
                                    <div>
                                        <a href="{{ url('newsroom-details') }}" class="bg-gradientButton hover:bg-gradientButtonHover mx-auto text-white font-semibold duration-300 transition-all py-4 px-12 rounded-full sm:my-10 my-5">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col relative w-full pb-10 m-0 p-0 border border-gray-50 rounded-2xl border-opacity-50 mb-10 break-inside-avoid-column">
                            <div class="relative flex justify-center w-full h-[300px]">
                                <img src="{{ asset('app/assets/images/newsroom/card-4.png') }}"
                                    class="object-cover w-full rounded-t-2xl h-full" alt="">
                            </div>
                            <div class="px-5 border-t border-gray-50 border-opacity-50">
                                <div>
                                    <h1 class="text-white text-2xl font-semibold leading-7 pt-2 pb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry....</h1>
                                </div>
                                <div class="text-center pt-6">
                                    <div class="pb-8">
                                        <p class="text-[#C5C5C5]">{{ date('F d, Y') }}</p>
                                    </div>
                                    <div>
                                        <a href="{{ url('newsroom-details') }}" class="bg-gradientButton hover:bg-gradientButtonHover mx-auto text-white font-semibold duration-300 transition-all py-4 px-12 rounded-full sm:my-10 my-5">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- pagination area --}}
            <div class="row-auto">
                <div class="flex justify-end">
                    <nav aria-label="Page navigation example ">
                        <ul class="flex items-center -space-x-px h-8 text-sm">
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-white bg-black border rounded-s-full border-e-0 border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                              <span class="sr-only">Previous</span>
                              <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                              </svg>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-white bg-black border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white border-opacity-80">1</a>
                          </li>
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-white bg-black border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white border-opacity-80">2</a>
                          </li>
                          <li>
                            <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-white border border-blue-300 bg-gradientButton hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white border-opacity-80">3</a>
                          </li>
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-white bg-black border border-gray-300 rounded-e-full hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                              <span class="sr-only">Next</span>
                              <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                              </svg>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
            </div>
        </section>
    </div>
@endsection
