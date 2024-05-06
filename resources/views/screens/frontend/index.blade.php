@extends('layouts.app')
@section('content')
    <div>
        {{-- banner component --}}
        <x-app.banner src="{{ asset('app/assets/images/banner/banner-neckless-1.png') }}"></x-app.banner>

        {{-- card section 01 --}}
        <section class="bg-black py-10">
            <div class="container mx-auto">
                <div class="bg-black py-10 gap-x-2">
                    <div class="w-full sm:flex md:justify-around justify-center flex-wrap lg:columns-3 gap-x-2 md:columns-2">
                        <x-app.three-column-cards src="{{ asset('app/assets/images/earrings-1.png') }}" title="OPTION 1"></x-app.three-column-cards>
                        <x-app.three-column-cards src="{{ asset('app/assets/images/earrings-1.png') }}" title="OPTION 2"></x-app.three-column-cards>
                        <x-app.three-column-cards src="{{ asset('app/assets/images/earrings-1.png') }}" title="OPTION 3"></x-app.three-column-cards>
                    </div>
                </div>
            </div>
        </section>

        {{-- card section 02 --}}
        <section class="bg-black">
            <div class="container mx-auto">
                <div class="row-auto md:py-10 py-5">
                    <h1 class="sm:text-4xl text-3xl text-white text-center">MEISTER’S CREATION</h1>
                </div>
            </div>
            <div class="row-auto border-t border-orange-300 pb-10">
                <div class="container mx-auto">
                    <div class="md:columns-2 gap-x-0">
                        <x-app.two-column-cards src="{{ asset('app/assets/images/bracelet-1.png') }}" title="Meister’s Ring 1" text="Diamond Silver Ring, Radiant symbols of a bright future." status="COMING SOON" position="border-b border-r"></x-app.two-column-cards>
                        <x-app.two-column-cards src="{{ asset('app/assets/images/bracelet-1.png') }}" title="Meister’s Ring 1" text="Diamond Silver Ring, Radiant symbols of a bright future." status="FEATURED" position="border-r"></x-app.two-column-cards>
                        <x-app.two-column-cards src="{{ asset('app/assets/images/bracelet-1.png') }}" title="Meister’s Ring 1" text="Diamond Silver Ring, Radiant symbols of a bright future." status="FEATURED" position="border-b border-b"></x-app.two-column-cards>
                        <x-app.two-column-cards src="{{ asset('app/assets/images/bracelet-1.png') }}" title="Meister’s Ring 1" text="Diamond Silver Ring, Radiant symbols of a bright future." status="FEATURED"></x-app.two-column-cards>
                    </div>
                </div>
            </div>
        </section>

        {{-- about card section 03 --}}
        <x-app.about-card-section url="url('{{ asset('app/assets/images/about-image-1.jpg') }}')" title="ABOUT US" buttonText="EXPLORE OUR COLLECTION NOW" paragraph="Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sunt aut expedita ratione nihil incidunt minima illo sint doloribus, rerum sit fugit voluptates quaerat blanditiis dolore nesciunt qui provident nulla numquam harum ducimus cumque praesentium. Nobis facere officia eius odit quo, aliquid placeat doloremque veniam nostrum ipsa. Maxime beatae eum ducimus tempore rem praesentium iusto illo quo consectetur minus enim eveniet hic inventore quos deserunt, porro itaque sint, voluptate blanditiis aperiam id explicabo in qui dolorem. Numquam enim suscipit modi error, porro eaque recusandae ut cupiditate debitis blanditiis repellendus rem totam aut vitae illo maiores autem sapiente fugit iste officia quis ipsa temporibus pariatur? Expedita incidunt praesentium harum porro officiis nostrum fuga perspiciatis iste, quis consequatur minima deleniti quas animi et. Culpa, placeat corporis laboriosam quo amet suscipit enim doloremque inventore esse, blanditiis reiciendis nisi, repellendus asperiores voluptatum sequi. Architecto blanditiis magnam ipsa? Delectus nisi iste mollitia aut tempora tempore?"></x-app.about-card-section>

        {{-- newsletter subscribe --}}
        <section class="bg-black border-b border-orange-300 md:pb-4 pb-2">
            <div class="sm:py-0 py-10">
                <div class="container mx-auto">
                    <div class="row-auto sm:py-10 py-5">
                        <h1 class="sm:text-4xl text-3xl text-white text-center">SUBSCRIBE TO OUR NEWSLETTER</h1>
                    </div>
                    <div class="row-auto text-center">
                        {!! Form::open() !!}
                            <div class="flex relative justify-center">
                                <input type="email" class="outline-none rounded-l-3xl text-sm px-10 placeholder:text-center" placeholder="Your Email">
                                <button type="submit" class="bg-gradientButton hover:bg-gradientButtonHover duration-300 text-white px-8 rounded-r-3xl py-1">SUBSCRIBE</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
