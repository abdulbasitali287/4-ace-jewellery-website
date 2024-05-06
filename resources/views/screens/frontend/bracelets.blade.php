@extends('layouts.app')
@section('content')
    <div>
        {{-- banner component --}}
        <x-app.banner src="{{ asset('app/assets/images/banner/360_F_584416508_eDB9BQA99eNiJg7YOE63WY8tV57jiPI6.jpg') }}" text="BRACELETS"></x-app.banner>

        {{-- card section 02 --}}
        <section class="bg-black">
            <div class="row-auto border-t border-orange-300 py-10">
                <div class="container mx-auto">
                    <div class="md:columns-2 gap-x-2">
                        <x-app.two-column-cards src="{{ asset('app/assets/images/bracelet-1.png') }}" title="Meister’s Ring 1" text="Diamond Silver Ring, Radiant symbols of a bright future." status="COMING SOON"></x-app.two-column-cards>
                        <x-app.two-column-cards src="{{ asset('app/assets/images/bracelet-1.png') }}" title="Meister’s Ring 1" text="Diamond Silver Ring, Radiant symbols of a bright future." status="FEATURED"></x-app.two-column-cards>
                        <x-app.two-column-cards src="{{ asset('app/assets/images/bracelet-1.png') }}" title="Meister’s Ring 1" text="Diamond Silver Ring, Radiant symbols of a bright future." status="FEATURED"></x-app.two-column-cards>
                        <x-app.two-column-cards src="{{ asset('app/assets/images/bracelet-1.png') }}" title="Meister’s Ring 1" text="Diamond Silver Ring, Radiant symbols of a bright future." status="FEATURED"></x-app.two-column-cards>
                        <x-app.two-column-cards src="{{ asset('app/assets/images/bracelet-1.png') }}" title="Meister’s Ring 1" text="Diamond Silver Ring, Radiant symbols of a bright future." status="COMING SOON"></x-app.two-column-cards>
                        <x-app.two-column-cards src="{{ asset('app/assets/images/bracelet-1.png') }}" title="Meister’s Ring 1" text="Diamond Silver Ring, Radiant symbols of a bright future." status="FEATURED"></x-app.two-column-cards>
                        <x-app.two-column-cards src="{{ asset('app/assets/images/bracelet-1.png') }}" title="Meister’s Ring 1" text="Diamond Silver Ring, Radiant symbols of a bright future." status="FEATURED"></x-app.two-column-cards>
                        <x-app.two-column-cards src="{{ asset('app/assets/images/bracelet-1.png') }}" title="Meister’s Ring 1" text="Diamond Silver Ring, Radiant symbols of a bright future." status="FEATURED"></x-app.two-column-cards>
                    </div>
                </div>
            </div>
        </section>

        {{-- about card section 03 --}}
        <x-app.about-card-section url="url('{{ asset('app/assets/images/about-image-1.jpg') }}')" title="Our Story" buttonText="EXPLORE OUR COLLECTION NOW" paragraph="Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sunt aut expedita ratione nihil incidunt minima illo sint doloribus, rerum sit fugit voluptates quaerat blanditiis dolore nesciunt qui provident nulla numquam harum ducimus cumque praesentium. Nobis facere officia eius odit quo, aliquid placeat doloremque veniam nostrum ipsa. Maxime beatae eum ducimus tempore rem praesentium iusto illo quo consectetur minus enim eveniet hic inventore quos deserunt, porro itaque sint, voluptate blanditiis aperiam id explicabo in qui dolorem."></x-app.about-card-section>
    </div>
@endsection
