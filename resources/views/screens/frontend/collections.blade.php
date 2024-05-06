@extends('layouts.app')
@section('content')
    <div>
        {{-- banner component --}}
        <x-app.banner src="{{ asset('app/assets/images/banner/collections-banner.png') }}" text="SAPPHIRE"></x-app.banner>

        {{-- card section 02 --}}
        <section class="bg-black border-y border-orange-300 border-opacity-45">
            <div class="row-auto py-10">
                <div class="container mx-auto">
                    <x-app.collections-left-image-card src="{{ asset('app/assets/images/collections/collection-card-image-1.png') }}" heading="INDOMPTABLES DE CARTIER BRACELET" subHeading="STORY" paragraphOne="Indomptables de Cartier Tiger and Giraffe bracelet, yellow gold 750/1000, black lacquer, set with tsavorite garnet and onyx. Please note that the carat weight, number of stones and product dimensions will vary based on the size of the creation you order. For detailed information please contact us." paragraphTwo="Invincible and alluring, the Panthère de Cartier imprints her character and power on the Maison's bracelets..."></x-app.collections-left-image-card>

                    <x-app.collections-right-image-card src="{{ asset('app/assets/images/collections/collection-card-image-2.png') }}" heading="TRINITY CUSHION RING, MEDIUM MODEL" subHeading="STORY" paragraphOne="Trinity ring, 18K white gold (750/1000), 18K rose gold (750/1000), 18K yellow gold (750/1000). Please note that the carat weight, number of stones and product dimensions will vary based on the size of the creation you order. For detailed information please contact us." paragraphTwo="Three bands of gold - white, yellow, rose - that are harmoniously interlinked, moving to the same rhythm..."></x-app.collections-right-image-card>

                    <x-app.collections-left-image-card src="{{ asset('app/assets/images/collections/collection-card-image-3.png') }}" heading="LOVE NECKLACE" subHeading="STORY" paragraphOne="LOVE necklace, 18K yellow gold (750/1000). Inner diameter 16mm. Chain length: 420mm. Please note that the carat weight, number of stones and product dimensions will vary based on the size of the creation you order. For detailed information please contact us." paragraphTwo="A love child of '70s New York, the LOVE collection is a symbol of free-spirited love. Its binding closure and screw motif give it..."></x-app.collections-left-image-card>

                    <x-app.collections-right-image-card src="{{ asset('app/assets/images/collections/collection-card-image-4.png') }}" heading="TRINITY EARRINGS" subHeading="STORY" paragraphOne="Trinity earrings, 18K white gold (750/1000), 18K rose gold (750/1000), 18K yellow gold (750/1000), each set with 71 brilliant-cut diamonds totaling 0.08 carats. Inner diameter 13.4mm. Please note that the carat weight, number of stones and product dimensions will vary based on the size of the creation you order. For detailed information please contact us." paragraphTwo="White gold, yellow gold, rose gold: the signature chromatic trilogy for Trinity, just like the purity and simplicity of its design."></x-app.collections-right-image-card>
                </div>
            </div>
            <div class="row-auto">
                <div class="container mx-auto">
                    <div class="pb-16 text-center">
                        <a href="#" class="bg-gradientButton hover:bg-gradientButtonHover  text-white font-semibold duration-300 transition-all py-4 px-14 rounded-full sm:my-10 my-5">BACK TO COLLECTIONS</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- about card section 03 --}}
        <x-app.about-card-section url="url('{{ asset('app/assets/images/about-image-1.jpg') }}')" title="Our Story" buttonText="EXPLORE OUR COLLECTION NOW" paragraph="Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sunt aut expedita ratione nihil incidunt minima illo sint doloribus, rerum sit fugit voluptates quaerat blanditiis dolore nesciunt qui provident nulla numquam harum ducimus cumque praesentium. Nobis facere officia eius odit quo, aliquid placeat doloremque veniam nostrum ipsa. Maxime beatae eum ducimus tempore rem praesentium iusto illo quo consectetur minus enim eveniet hic inventore quos deserunt, porro itaque sint, voluptate blanditiis aperiam id explicabo in qui dolorem."></x-app.about-card-section>
    </div>
@endsection
