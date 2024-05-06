@extends('layouts.app')
@section('content')
    <div class="m-0 p-0">
        {{-- banner component --}}
        <div class="row-auto bg-black">
            <div class="container mx-auto">
                <div class="relative w-full h-screen">
                    <div class="w-full h-full py-2">
                        <img src="{{ asset('app/assets/images/banner/collections-banner.png') }}" class="w-full h-full object-cover rounded-3xl border border-orange-400 border-opacity-50" alt="">
                    </div>
                    <div class="absolute inset-0 flex flex-col justify-end items-center">
                        <h1 class="md:text-4xl sm:text-2xl text-2xl font-semibold pb-20 text-white text-center opacity-100 tracking-wide">SAPPHIRE</h1>
                    </div>
                </div>
            </div>
        </div>

        {{-- card section 02 --}}
        <section class="bg-black">
            <div class="row-auto py-10">
                <div class="container mx-auto">
                    <div class="md:columns-2 pb-16">
                        <div class="relative w-full md:h-screen">
                            <img src="{{ asset('app/assets/images/emerald.png') }}" class="rounded-2xl w-full h-full object-cover border border-orange-400 border-opacity-50" alt="">
                            <div class="absolute inset-0 flex flex-col justify-end items-center">
                                <h1 class="md:text-4xl sm:text-2xl text-2xl font-thin pb-8 text-white text-center opacity-100 tracking-wide">EMERALD</h1>
                            </div>
                        </div>
                        <div class="relative w-full md:h-screen">
                            <img src="{{ asset('app/assets/images/rose.png') }}" class="rounded-2xl w-full h-full object-cover border border-orange-400 border-opacity-50" alt="">
                            <div class="absolute inset-0 flex flex-col justify-end items-center">
                                <h1 class="md:text-4xl sm:text-2xl text-2xl font-thin pb-8 text-white text-center opacity-100 tracking-wide">ROSE</h1>
                            </div>
                        </div>
                    </div>
                    <div class="columns-1">
                        <div class="relative w-full md:h-screen">
                            <img src="{{ asset('app/assets/images/ocean.png') }}" class="rounded-2xl w-full h-full object-cover border border-orange-400 border-opacity-50" alt="">
                            <div class="absolute inset-0 flex flex-col justify-end items-center">
                                <h1 class="md:text-4xl sm:text-2xl text-2xl font-thin pb-8 text-white text-center opacity-100 tracking-wide">OCEAN</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- about card section 03 --}}
        <x-app.about-card-section url="url('{{ asset('app/assets/images/about-image-1.jpg') }}')" title="Our Story" buttonText="EXPLORE OUR COLLECTION NOW" paragraph="Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sunt aut expedita ratione nihil incidunt minima illo sint doloribus, rerum sit fugit voluptates quaerat blanditiis dolore nesciunt qui provident nulla numquam harum ducimus cumque praesentium. Nobis facere officia eius odit quo, aliquid placeat doloremque veniam nostrum ipsa. Maxime beatae eum ducimus tempore rem praesentium iusto illo quo consectetur minus enim eveniet hic inventore quos deserunt, porro itaque sint, voluptate blanditiis aperiam id explicabo in qui dolorem."></x-app.about-card-section>
    </div>
@endsection
