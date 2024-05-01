@extends('layouts.app')
@section('content')
    <div>
        {{-- banner component --}}
        <x-app.banner src="{{ asset('app/assets/images/banner/bracelet.png') }}" text="BRACELETS"></x-app.banner>

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
        <x-app.about-card-section url="url('{{ asset('app/assets/images/about-image-1.jpg') }}')" title="TITLE OF THE TEXT" paragraph="Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sunt aut expedita ratione nihil incidunt minima illo sint doloribus, rerum sit fugit voluptates quaerat blanditiis dolore nesciunt qui provident nulla numquam harum ducimus cumque praesentium. Nobis facere officia eius odit quo, aliquid placeat doloremque veniam nostrum ipsa. Maxime beatae eum ducimus tempore rem praesentium iusto illo quo consectetur minus enim eveniet hic inventore quos deserunt, porro itaque sint, voluptate blanditiis aperiam id explicabo in qui dolorem. Numquam enim suscipit modi error, porro eaque recusandae ut cupiditate debitis blanditiis repellendus rem totam aut vitae illo maiores autem sapiente fugit iste officia quis ipsa temporibus pariatur? Expedita incidunt praesentium harum porro officiis nostrum fuga perspiciatis iste, quis consequatur minima deleniti quas animi et. Culpa, placeat corporis laboriosam quo amet suscipit enim doloremque inventore esse, blanditiis reiciendis nisi, repellendus asperiores voluptatum sequi. Architecto blanditiis magnam ipsa? Delectus nisi iste mollitia aut tempora tempore?"></x-app.about-card-section>
    </div>
@endsection
