<section class="bg-cover relative" style="background-image: @if($attributes->has('url')) {{ $attributes->get('url') }} @endif ;box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);">
    <div class="absolute inset-0 bg-black opacity-30"></div>
    <div class="border-y border-orange-300">
        <div class="container mx-auto">
            <div class="row-auto sm:py-10 py-5">
                <h1 class="md:text-4xl text-3xl text-white text-center {{ !$attributes->has('buttonText') ? 'md:pb-20 pb-10' : '' }}">{{ $attributes->get('title') }}</h1>
            </div>
            <div class="row-auto flex flex-col text-center z-20">
                <p class="text-[#FFFFFF] text-center md:px-40 px-10 {{ !$attributes->has('buttonText') ? 'md:pb-32 pb-10' : '' }}">{{ $attributes->get('paragraph') }}</p>
                @if ($attributes->has('buttonText'))
                    <a href="#" class="mx-auto text-white font-semibold bg-[#9D5933] bg-gradient-to-r hover:bg-[#F4935E] duration-300 py-2 px-3 rounded-lg sm:my-10 my-5">
                        {{ $attributes->get('buttonText') }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>
