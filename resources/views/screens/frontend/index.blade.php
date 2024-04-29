@extends('layouts.app')
@section('content')
    <div>
        {{-- banner component --}}
        <x-app.banner src="{{ asset('app/assets/images/banner/home-banner.jpg') }}"></x-app.banner>

        {{-- card section 01 --}}
        <section class="bg-slate-900 py-10">
            <div class="container mx-auto">
                <div class="bg-slate-900 py-10 gap-x-2">
                    <div class="w-full md:flex lg:justify-around justify-center flex-wrap lg:columns-3 gap-x-2 md:columns-2">
                        <div class="">
                            <div class="md:mx-0 mx-4 h-96 relative mb-2 w-96">
                                <img src="{{ asset('app/assets/images/earring.jpg') }}"
                                    class="object-cover rounded-2xl w-full h-full" alt="">
                                <div class="w-full absolute top-40 right-0">
                                    <h4 class="font-thin text-4xl text-slate-200 text-center">OPTION 1</h4>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="md:mx-0 mx-4 h-96 relative mb-2 w-96">
                                <img src="{{ asset('app/assets/images/earring.jpg') }}"
                                    class="object-cover rounded-2xl w-full h-full" alt="">
                                <div class="w-full absolute top-40 right-0">
                                    <h4 class="font-thin text-4xl text-slate-200 text-center">OPTION 2</h4>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="md:mx-0 mx-4 h-96 relative mb-2 w-96">
                                <img src="{{ asset('app/assets/images/earring.jpg') }}"
                                    class="object-cover rounded-2xl w-full h-full" alt="">
                                <div class="w-full absolute top-40 right-0">
                                    <h4 class="font-thin text-4xl text-slate-200 text-center">OPTION 3</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- card section 02 --}}
        <section class="bg-slate-950">
            <div class="container mx-auto">
                <div class="row-auto md:py-10">
                    <h1 class="md:text-4xl sm:text-3xl text-white text-center">MEISTER<sup>,</sup>S CREATION</h1>
                </div>
            </div>
            <div class="row-auto border-t border-orange-300 py-10">
                <div class="container mx-auto">
                    <div class="columns-2 gap-x-2">
                        <div class="flex w-full mb-2">
                            <div class="relative w-full h-[450px]">
                                <img src="{{ asset('app/assets/images/earring.jpg') }}"
                                    class="object-cover object-center rounded-2xl w-full h-full" alt="">
                                <div class="w-full absolute top-40 right-0">
                                    <h4 class="font-thin text-4xl text-slate-200 text-center">OPTION 3</h4>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full mb-2">
                            <div class="relative w-full h-[450px]">
                                <img src="{{ asset('app/assets/images/earring.jpg') }}"
                                    class="object-cover object-center rounded-2xl w-full h-full" alt="">
                                <div class="w-full absolute top-40 right-0">
                                    <h4 class="font-thin text-4xl text-slate-200 text-center">OPTION 3</h4>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full mb-2">
                            <div class="relative w-full h-[450px]">
                                <img src="{{ asset('app/assets/images/earring.jpg') }}"
                                    class="object-cover object-center rounded-2xl w-full h-full" alt="">
                                <div class="w-full absolute top-40 right-0">
                                    <h4 class="font-thin text-4xl text-slate-200 text-center">OPTION 3</h4>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full mb-2">
                            <div class="relative w-full h-[450px]">
                                <img src="{{ asset('app/assets/images/earring.jpg') }}"
                                    class="object-cover object-center rounded-2xl w-full h-full" alt="">
                                <div class="w-full absolute top-40 right-0">
                                    <h4 class="font-thin text-4xl text-slate-200 text-center">OPTION 3</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- card section 03 --}}
        <section class="bg-slate-950">
            <div class="border-y border-e border-orange-300 mx-4">
                <div class="container mx-auto">
                    <div class="row-auto md:py-10">
                        <h1 class="md:text-4xl sm:text-3xl text-white text-center">ABOUT US</h1>
                    </div>
                    <div class="row-auto text-center">
                        <p class="opacity-45 text-white md:text-justify md:px-40">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sunt aut expedita ratione nihil incidunt minima illo sint doloribus, rerum sit fugit voluptates quaerat blanditiis dolore nesciunt qui provident nulla numquam harum ducimus cumque praesentium. Nobis facere officia eius odit quo, aliquid placeat doloremque veniam nostrum ipsa. Maxime beatae eum ducimus tempore rem praesentium iusto illo quo consectetur minus enim eveniet hic inventore quos deserunt, porro itaque sint, voluptate blanditiis aperiam id explicabo in qui dolorem. Numquam enim suscipit modi error, porro eaque recusandae ut cupiditate debitis blanditiis repellendus rem totam aut vitae illo maiores autem sapiente fugit iste officia quis ipsa temporibus pariatur? Expedita incidunt praesentium harum porro officiis nostrum fuga perspiciatis iste, quis consequatur minima deleniti quas animi et. Culpa, placeat corporis laboriosam quo amet suscipit enim doloremque inventore esse, blanditiis reiciendis nisi, repellendus asperiores voluptatum sequi. Architecto blanditiis magnam ipsa? Delectus nisi iste mollitia aut tempora tempore?</p>
                        <button class="mx-auto text-white font-semibold hover:bg-gradient-to-r hover:from-orange-400 hover:to-orange-600 bg-gradient-to-r from-orange-500 to-orange-700 duration-300 py-2 px-3 shadow rounded-lg md:my-10">EXPLORE
                            OUR COLLECTION NOW</button>
                    </div>
                </div>
            </div>
        </section>
        {{-- newsletter subscribe --}}
        <section class="bg-slate-950">
            <div class="">
                <div class="container mx-auto">
                    <div class="row-auto md:py-10">
                        <h1 class="md:text-4xl sm:text-3xl text-white text-center">SUBSCRIBE TO OUR NEWSLETTER</h1>
                    </div>
                    <div class="row-auto text-center">
                        {!! Form::open() !!}
                            <div class="flex relative justify-center">
                                <input type="email" class="outline-none rounded-l-3xl placeholder-gray-500">
                                <button type="submit" class="bg-orange-400 text-white px-4 rounded-r-3xl py-1">SUBSCRIBE</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
