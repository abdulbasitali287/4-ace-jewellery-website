<div class="md:columns-2 pb-16">
    <div class="w-full pt-4">
        <div class="px-5">
            <h1 class="font-light text-4xl pb-2 text-[#FFFFFF] leading-9">{{ $attributes->has('heading') ? $attributes->get('heading') : '' }}</h1>
            <p class="pb-10 font-light text-xl text-[#DEDEDE] leading-6">
                <span>
                    {{ $attributes->has('paragraphOne') ? $attributes->get('paragraphOne') : '' }}
                </span>
                <strong class="block py-4 text-[#FFFFFF] opacity-95">
                    {{ $attributes->has('subHeading') ? $attributes->get('subHeading') : '' }}
                </strong>
                <span>
                    {{ $attributes->has('paragraphTwo') ? $attributes->get('paragraphTwo') : '' }}
                </span>
            </p>
            <a href="#" class="bg-gradientButton hover:bg-gradientButtonHover  text-white font-semibold duration-300 transition-all py-3 px-6 rounded-full sm:my-10 my-5">EXPLORE DE CARTIER RINGS</a>
        </div>
    </div>
    <div class="w-full md:h-[430px]">
        <img src="{{ $attributes->get('src') }}" class="rounded-2xl object-cover w-full h-full" alt="">
    </div>
</div>
