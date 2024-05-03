<section class="bg-cover relative" style="background-image: @if($attributes->has('url')) {{ $attributes->get('url') }} @endif ;box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);">
        <div class="absolute top-0 w-full h-full bg-black bg-opacity-40"></div>
        <div class="border-y border-orange-300">
            <div class="aboslute top-0 w-full h-full container mx-auto">
                <div class="row-auto sm:py-10 py-5 opacity-80">
                    <h1 class="md:text-4xl text-3xl text-white text-center {{ !$attributes->has('buttonText') ? 'md:pb-20 pb-10' : '' }}">{{ $attributes->get('title') }}</h1>
                </div>
                <div class="row-auto flex flex-col text-center">
                    <p class="text-[#FFFFFF] opacity-80 text-center md:px-40 px-10 {{ !$attributes->has('buttonText') ? 'md:pb-32 pb-10' : '' }}">{{ $attributes->get('paragraph') }}</p>
                    @if ($attributes->has('buttonText'))
                        <a href="#" class="bg-gradientButton hover:bg-gradientButtonHover z-50 mx-auto text-white font-semibold duration-300 transition-all py-4 px-10 rounded-full sm:my-10 my-5">{{ $attributes->get('buttonText') }}</a>
                    @endif
                </div>
            </div>
        </div>
</section>
