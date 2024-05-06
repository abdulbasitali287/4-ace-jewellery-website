@extends('layouts.app')
@section('content')
    <div>
        {{-- banner component --}}
        <x-app.banner src="{{ asset('app/assets/images/banner/contact-banner.png') }}" text="CONTACT"></x-app.banner>

        {{-- card section 02 --}}
        {{-- <section class="bg-black py-10">
            <div class="container mx-auto pt-5 px-10">
                <div class="row-auto">
                    <h1 class="text-white text-center font-normal text-5xl leading-tight">CHECKOUT</h1>
                </div>
                <div class="row-auto py-5">
                    <div class="md:w-1/2 w-full pt-10 mx-auto px-4">
                        <form action="#">
                            <div>
                                <p class="text-white text-xl ps-3 pb-2">Please fill in your Email address to complete your order.</p>
                            </div>
                            <div class="mb-6">
                                <label for="success" class="block ps-3 mb-2 text-sm font-medium text-[#9D9D9D]">Email Address *</label>
                                <input type="text" id="success" class="placeholder-[#9D9D9DCF] text-sm rounded-full placeholder:ps-3 ps-3 md:mb-3 mb-2 focus:outline-none block w-full py-3 focus:border focus:border-gray-800 border border-transparent" placeholder="Enter Your Email Address">
                                <button class="bg-gradientButton w-full py-3 font-semibold text-xl text-white rounded-full" type="submit">PROCEED</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="bg-black">
            <div class="container mx-auto md:px-20">
                <div class="row-auto text-center">
                    <h1 class="font-semibold text-xl text-white py-4">PLEASE FILL OUT THE FORM BELOW:</h1>
                    <p class="text-[#DEDEDE] font-light text-lg">
                        <span class="block pb-4">
                            Got questions or need assistance with your jewelry purchase? Look no further than Meister
                            Jewelry's contact page. Our team is dedicated to providing top-notch support for all your
                            inquiries and concerns. From helping with orders to offering sizing and styling advice, we're
                            here to make your shopping experience seamless and enjoyable.
                        </span>
                        <span class="block pb-4">
                            Feel free to reach out to us today for personalized assistance and exceptional service. At
                            Meister Jewelry, we prioritize your satisfaction and strive to exceed your expectations every
                            step of the way.
                    </p>
                    </span>
                </div>
                <div class="row-auto">

                    <form>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="first_name" class="block mb-2 text-sm font-medium text-[#DEDEDE]">Name*</label>
                                <input type="text" id="first_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl block w-full p-2.5" />
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-[#DEDEDE]">Email*</label>
                                <input type="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl block w-full p-2.5" />
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-[#DEDEDE]">Mobile*</label>
                                <input type="tel" id="phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl block w-full p-2.5"
                                    pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
                            </div>
                            <div>
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-[#DEDEDE]">Subject*</label>
                                <input type="text" id="last_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl block w-full p-2.5" />
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="last_name" class="block mb-2 text-sm font-medium text-[#DEDEDE]">Comments</label>
                            <textarea id="message" rows="4"
                                class="block p-2.5 w-full rounded-2xl text-sm text-gray-900 bg-gray-50 border border-gray-300"></textarea>
                        </div>
                        <div class="">
                            <div>
                                <p class="text-[#DEDEDE]">* How would you like us to respond to your request?</p>
                            </div>
                            <div class="flex ps-2 py-2">
                                <div class="flex items-center me-4">
                                    <input id="inline-radio" type="radio" value="" name="inline-radio-group"
                                        class="size-4 text-[#C5AD8A] bg-gray-100 border-gray-300 focus:ring-[#C5AD8A] dark:focus:ring-[#C5AD8A] dark:ring-offset-gray-800 focus:ring-inset focus:outline-none">
                                    <label for="inline-radio"
                                        class="ms-2 text-sm font-medium text-[#DEDEDE] dark:text-gray-300">Call</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="inline-radio" type="radio" value="" name="inline-radio-group"
                                        class="size-4 text-[#C5AD8A] bg-gray-100 border-gray-300 focus:ring-[#C5AD8A] dark:focus:ring-[#C5AD8A] dark:ring-offset-gray-800 focus:ring-inset focus:outline-none">
                                    <label for="inline-2-radio"
                                        class="ms-2 text-sm font-medium text-[#DEDEDE] dark:text-gray-300">Email</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="inline-radio" type="radio" value="" name="inline-radio-group"
                                        class="size-4 text-[#C5AD8A] bg-gray-100 border-gray-300 focus:ring-[#C5AD8A] dark:focus:ring-[#C5AD8A] dark:ring-offset-gray-800 focus:ring-inset focus:outline-none">
                                    <label for="inline-checked-radio"
                                        class="ms-2 text-sm font-medium text-[#DEDEDE] dark:text-gray-300">Whatsapp</label>
                                </div>
                            </div>
                            <div>
                                <p class="text-[#DEDEDE]">* Fields marked with*are mandatory *All entered information is
                                    regarded as personal and will be treated as such.</p>
                            </div>
                        </div>
                        <div class="my-3 form-div ps-3">
                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                        </div>
                        <div class="mt-10 ps-1">
                            <a href="#"
                                class="bg-gradientButton hover:bg-gradientButtonHover z-50 mx-auto text-white font-semibold duration-300 transition-all py-3 px-14 rounded-full sm:my-10 my-5">SUBMIT</a>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </div>
@endsection
