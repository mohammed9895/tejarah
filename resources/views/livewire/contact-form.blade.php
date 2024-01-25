<div>
    <div class="container bg-secondary rounded-3xl flex flex-col md:flex-row items-center justify-between p-10">
        <div class="w-full md:w-1/3 relative">
            <img src="{{ asset('image/contact.svg') }}" class="rounded" alt="">
            <img src="{{ asset('image/arrow.svg') }}" class="absolute -top-10 -right-10 w-36" alt="">
        </div>
        <div class="w-full md:flex-1 mr-6 ltr:ml-6 ltr:mr-0 mt-16 md:mt-0">
            <h1 class="text-primary text-3xl font-bold">{{ __('contact-form.title') }}</h1>
            <p class="text-md text-gray-800 mt-3">{{ __('contact-form.description') }}</p>
            <form wire:submit="send">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-7">
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}"  class="ltr:mr-2" alt="">
                            {{ __('contact-form.first_name') }} *
                        </label>
                        <input type="text" wire:model="first_name"
                               class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                               style="box-shadow: 0px 2px 0px #9B2E2E;">
                        <div class="text-red-600 mt-3">@error('first_name') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                            {{ __('contact-form.family_name') }} *
                        </label>
                        <input type="text" wire:model="family_name"
                               class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                               style="box-shadow: 0px 2px 0px #9B2E2E;">
                        <div class="text-red-600 mt-3">@error('family_name') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                            {{ __('contact-form.email') }} *
                        </label>
                        <input type="email" wire:model="email"
                               class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                               style="box-shadow: 0px 2px 0px #9B2E2E;">
                        <div class="text-red-600 mt-3">@error('email') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                            {{ __('contact-form.confirm_email') }} *
                        </label>
                        <input type="email" wire:model="confirm_email"
                               class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                               style="box-shadow: 0px 2px 0px #9B2E2E;">
                        <div class="text-red-600 mt-3">@error('confirm_email') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                            {{ __('contact-form.phone') }} *
                        </label>
                        <input type="tel" wire:model="phone"
                               class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                               style="box-shadow: 0px 2px 0px #9B2E2E;">
                        <div class="text-red-600 mt-3">@error('phone') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                            {{ __('contact-form.company_name') }}
                        </label>
                        <input type="text" wire:model="company_name"
                               class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                               style="box-shadow: 0px 2px 0px #9B2E2E;">
                        <div class="text-red-600 mt-3">@error('company_name') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                           {{ __('contact-form.cr') }}
                        </label>
                        <input type="text" wire:model="cr" class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                               style="box-shadow: 0px 2px 0px #9B2E2E;">
                        <div class="text-red-600 mt-3">@error('cr') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                            {{ __('contact-form.interested_in') }}
                        </label>
                        <div class="relative">
                            <input type="text" wire:model="interested_in"
                                   class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                                   style="box-shadow: 0px 2px 0px #9B2E2E;">
                            <div class="text-red-600 mt-3">@error('interested_in') {{ $message }} @enderror</div>
                            <button class="p-4 bg-primary rounded-lg text-white absolute top-2 left-2">
                                <i class="fa-regular fa-paper-plane"></i>
                                {{ __('contact-form.send') }}
                            </button>
                        </div>
                    </div>
                </div>
                <div>
                    @if (session()->has('message'))

                        <div
                            class="flex p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                            role="alert">
                            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
