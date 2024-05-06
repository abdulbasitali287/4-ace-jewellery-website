@extends('layouts.app')
@section('content')
    <div>
        {{-- banner component --}}
        <x-app.banner src="{{ asset('app/assets/images/banner/newsroom-banner.png') }}" text="NEWSROOM"></x-app.banner>

        {{-- card section 02 --}}
        <section class="bg-black py-10">
            <div class="container mx-auto px-10">
                {{-- search bar --}}
                <div class="row-auto py-10">
                    <a href="{{ url('newsroom') }}" class="flex space-x-2 text-white w-max border rounded-lg p-3 hover:space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                        <span>Back to Newsroom</span>
                    </a>
                </div>

                {{-- content area --}}
                <div class="row-auto px-5">
                    <div class="columns-1 break-inside-avoid-column">
                        <div class="text-white">
                            <h1 class="font-semibold text-5xl pb-7">Lorem Ipsum is simply dummy text of the printing and typesetting industry....</h1>
                            <div class="w-full h-[540px]">
                                <img src="{{ asset('app/assets/images/newsroom/card-1.png') }}" class="object-cover w-full h-full" alt="">
                            </div>
                            <div class="pt-5">
                                <p class="text-[#DEDEDE] font-light leading-7 text-lg">
                                    <span class="block pb-2">
                                        Libero, iaculis sit iaculis in leo. Est pretium velit enim vel amet curabitur urna facilisis vestibulum. Scelerisque fames id id vestibulum, turpis. Odio arcu gravida turpis sodales justo interdum etiam a vitae. Arcu, faucibus urna, rhoncus proin aliquet justo, lobortis sapien purus. Lorem ut amet ac maecenas. Adipiscing mauris, quam velit consectetur pellentesque. Sem morbi vitae enim egestas egestas aliquam ullamcorper ipsum. Amet ullamcorper tellus sit leo, odio ipsum. Vitae nulla cras varius amet, orci faucibus adipiscing consectetur euismod.
                                    </span>
                                    <span class="block pb-2">
                                        Aucibus pharetra id sagittis sit vel. Cursus diam semper sed augue nullam amet, ac sed. In nibh at consectetur cursus fringilla sit ut. Nisl, eget duis turpis nunc.
                                    </span>
                                    <span class="block pb-2">
                                        Ipsum pharetra pulvinar a eget. Nullam placerat et, faucibus tellus aenean pretium hac dictum quam. At fringilla aliquam turpis dui vehicula et. Adipiscing quis nisl integer tristique bibendum libero cursus. Nibh tellus enim nisl sollicitudin lobortis enim convallis diam. Gravida nulla tortor, gravida ultricies sit.
                                    </span>
                                    <span class="block pb-2">
                                        Erat duis sed massa malesuada dictumst. In lobortis a, erat quis nibh odio sed neque. Euismod pulvinar ultricies aenean nulla.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- pagination area --}}
                <div class="row-auto">
                    <div class="flex flex-col items-center">
                        <!-- Buttons -->
                        <div class="inline-flex space-x-1 mt-2 xs:mt-0">
                            <button class="flex items-center justify-center md:w-40 w-max h-10 text-base font-medium text-white bg-gradientButton rounded-s-full">
                                Previous
                            </button>
                            <button class="flex items-center justify-center md:w-40 w-max h-10 text-base font-medium text-white bg-gradientButton rounded-e-full">
                                Next
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
