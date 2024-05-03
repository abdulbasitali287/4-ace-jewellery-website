@extends('layouts.app')
@section('content')
    <div class="m-0 p-0">
        <section class="bg-black">
            <div class="row-auto">
                <div class="container mx-auto">
                    <div class="columns-2">
                        <div class="bg-purple-700">
                            <div class="flex flex-col">
                                <div class="flex bg-purple-500">
                                    <img src="{{ asset('app/assets/images/products/image-1.png') }}" alt="">
                                </div>
                                <div class="flex bg-purple-700">
                                    <div class="flex-auto basis-1/2">
                                        <img src="{{ asset('app/assets/images/products/image-2.png') }}" alt="">
                                    </div>
                                    <div class="flex-auto  basis-1/2">
                                        <img src="{{ asset('app/assets/images/products/image-3.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="flex bg-purple-700">
                                    <div class="flex-auto basis-1/2">
                                        <img src="{{ asset('app/assets/images/products/image-4.png') }}" alt="">
                                    </div>
                                    <div class="flex-auto  basis-1/2">
                                        <img src="{{ asset('app/assets/images/products/image-5.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-white">
                            <p class="">
                                <span><a href="#">Home ></a></span>
                                <span><a href="#">Sapphire ></a></span>
                                <span><a href="#">Entincelle De Cartier Ring</a></span>
                            </p>
                            <h1 class="">ETINCELLE DE CARTIER RING</h1>
                            <h2 class="">10,000.00 AED</h2>
                            <p>Étincelle de Cartier ring, rose gold (750/1000), set with 18 brilliant-cut diamonds totaling 0.63 carat (for size 52).</p>
                            <a href="#" class="bg-gradientButton hover:bg-gradientButtonHover  text-white font-semibold duration-300 transition-all py-3 px-6 rounded-full sm:my-10 my-5">ADD TO BAG</a>
                            <p><span>Ref.</span><span>B4230200</span></p>
                            <h3>Description</h3>
                            <p>Étincelle de Cartier ring, rose gold (750/1000), set with 18 brilliant-cut diamonds totaling 0.63 carat (for size 52). Please note that the carat weight, number of stones and product dimensions will vary based on the size of the creation you order. For detailed information please contact us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- related products --}}
        <section class="bg-black">
                <div class="row-auto">
                    <div class="container mx-auto">
                        <div class="py-10">
                            <h1 class="text-4xl text-white font-normal text-center">RELATED PRODUCTS</h1>
                        </div>
                        <div class="md:columns-2 gap-x-0">
                            <div class="flex flex-col relative w-full pb-4 m-0 p-0 border-gray-400 border-opacity-50">
                                <div class="relative flex justify-center w-full h-[360px]">
                                    <img src="{{ asset('app/assets/images/products/image-6.png') }}"
                                        class="object-cover rounded-2xl sm:w-96 w-full h-96" alt="">
                                </div>
                                <div class="flex lg:flex-row flex-col ps-4">
                                    <div class="lg:flex-1 lg:w-3/4 w-full text-white">
                                        <strong class="text-gray-200 font-medium">Meister’s Ring 1</strong>
                                        <p class="text-gray-300">Diamond Silver Ring, Radiant symbols of a bright future.</p>
                                    </div>
                                    <div class="flex pe-3">
                                        <a href="#" class="self-end bg-white text-gray-600 mt-12 py-4 px-6 rounded-full font-semibold text-xs border border-transparent hover:border-white hover:bg-transparent hover:text-white transition duration-300" id="addToCart">ADD TO BAG</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col relative w-full pb-4 m-0 p-0 border-gray-400 border-opacity-50">
                                <div class="relative flex justify-center w-full h-[360px]">
                                    <img src="{{ asset('app/assets/images/products/image-6.png') }}"
                                        class="object-cover rounded-2xl sm:w-96 w-full h-96" alt="">
                                </div>
                                <div class="flex lg:flex-row flex-col ps-4">
                                    <div class="lg:flex-1 lg:w-3/4 w-full text-white">
                                        <strong class="text-gray-200 font-medium">Meister’s Ring 1</strong>
                                        <p class="text-gray-300">Diamond Silver Ring, Radiant symbols of a bright future.</p>
                                    </div>
                                    <div class="flex pe-3">
                                        <a href="#" class="self-end bg-white text-gray-600 mt-12 py-4 px-6 rounded-full font-semibold text-xs border border-transparent hover:border-white hover:bg-transparent hover:text-white transition duration-300" id="addToCart">ADD TO BAG</a>
                                    </div>
                                </div>
                                {{-- <div class="absolute top-0 right-0 pt-3">
                                    <a href="#" class="px-4 me-1 rounded-full text-xs font-semibold text-white border border-transparent" id="status">{{ $attributes->get('status') }}</a>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                </div>
        </section>

        {{-- more collections --}}
        <section class="bg-black pb-10">
                <div class="row-auto">
                    <div class="container mx-auto">
                        <div class="py-10">
                            <h1 class="text-4xl text-white font-normal text-center">MORE COLLECTIONS</h1>
                        </div>
                        <div class="grid grid-cols-3 gap-x-2 place-items-center">
                            <div class="relative ms-auto md:w-80 md:h-[450px]">
                                <img src="{{ asset('app/assets/images/banner/collections-banner.png') }}" class="rounded-2xl w-full h-full object-cover border border-orange-400 border-opacity-50" alt="">
                                <div class="absolute inset-0 flex flex-col justify-end items-center">
                                    <h1 class="md:text-4xl sm:text-2xl text-2xl font-thin pb-8 text-white text-center opacity-100 tracking-wide">OCEAN</h1>
                                </div>
                            </div>
                            <div class="relative md:w-80 md:h-[450px]">
                                <img src="{{ asset('app/assets/images/emerald.png') }}" class="rounded-2xl w-full h-full object-cover border border-orange-400 border-opacity-50" alt="">
                                <div class="absolute inset-0 flex flex-col justify-end items-center">
                                    <h1 class="md:text-4xl sm:text-2xl text-2xl font-thin pb-8 text-white text-center opacity-100 tracking-wide">EMERALD</h1>
                                </div>
                            </div>
                            <div class="relative ms-auto md:w-80 md:h-[450px]">
                                <img src="{{ asset('app/assets/images/rose.png') }}" class="rounded-2xl w-full h-full object-cover border border-orange-400 border-opacity-50" alt="">
                                <div class="absolute inset-0 flex flex-col justify-end items-center">
                                    <h1 class="md:text-4xl sm:text-2xl text-2xl font-thin pb-8 text-white text-center opacity-100 tracking-wide">ROSE</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>





        {{-- about card section 03 --}}
        <x-app.about-card-section url="url('{{ asset('app/assets/images/about-image-1.jpg') }}')" title="ABOUT US" buttonText="EXPLORE OUR COLLECTION NOW" paragraph="Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sunt aut expedita ratione nihil incidunt minima illo sint doloribus, rerum sit fugit voluptates quaerat blanditiis dolore nesciunt qui provident nulla numquam harum ducimus cumque praesentium. Nobis facere officia eius odit quo, aliquid placeat doloremque veniam nostrum ipsa. Maxime beatae eum ducimus tempore rem praesentium iusto illo quo consectetur minus enim eveniet hic inventore quos deserunt, porro itaque sint, voluptate blanditiis aperiam id explicabo in qui dolorem. Numquam enim suscipit modi error, porro eaque recusandae ut cupiditate debitis blanditiis repellendus rem totam aut vitae illo maiores autem sapiente fugit iste officia quis ipsa temporibus pariatur? Expedita incidunt praesentium harum porro officiis nostrum fuga perspiciatis iste, quis consequatur minima deleniti quas animi et. Culpa, placeat corporis laboriosam quo amet suscipit enim doloremque inventore esse, blanditiis reiciendis nisi, repellendus asperiores voluptatum sequi. Architecto blanditiis magnam ipsa? Delectus nisi iste mollitia aut tempora tempore?"></x-app.about-card-section>
    </div>
@endsection
