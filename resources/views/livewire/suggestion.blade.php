<div>
    <div class="container bg-secondary rounded-3xl flex flex-col md:flex-row items-center justify-between p-10">
        <div class="w-full">
            <h1 class="text-primary text-3xl font-bold">{{ __('suggestion.title') }}</h1>
            <p class="text-md text-gray-800 mt-3">{{ __('suggestion.description') }}</p>
            <form wire:submit="send">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-7">
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                            {{ __('suggestion.name') }} *
                        </label>
                        <input type="text" wire:model="name"
                               class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                               style="box-shadow: 0px 2px 0px #9B2E2E;">
                        <div class="text-red-600 mt-3">@error('name') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                            {{ __('suggestion.phone') }} *
                        </label>
                        <input type="text" wire:model="phone"
                               class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                               style="box-shadow: 0px 2px 0px #9B2E2E;">
                        <div class="text-red-600 mt-3">@error('phone') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                            {{ __('suggestion.civil_id') }} *
                        </label>
                        <input type="text" wire:model="civil_id"
                               class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                               style="box-shadow: 0px 2px 0px #9B2E2E;">
                        <div class="text-red-600 mt-3">@error('civil_id') {{ $message }} @enderror</div>
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
                            {{ __('suggestion.connected_to_service') }} *
                        </label>
                        <div class="flex">
                            <div class="flex items-center me-4">
                                <input id="inline-radio" type="radio" name="connected_to_service" value="1"
                                       wire:model="connected_to_service"
                                       class="w-4 h-4 text-[#9B2E2E] bg-gray-100 border-gray-300 focus:ring-[#9B2E2E] dark:focus:ring-[#9B2E2E] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-radio"
                                       class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('suggestion.yes') }}</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="inline-2-radio" checked name="connected_to_service" type="radio" value="0"
                                       wire:model="connected_to_service"
                                       class="w-4 h-4 text-[#9B2E2E] bg-gray-100 border-gray-300 focus:ring-[#9B2E2E] dark:focus:ring-[#9B2E2E] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-2-radio"
                                       class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('suggestion.no') }}</label>
                            </div>
                        </div>
                        <div class="text-red-600 mt-3">@error('connected_to_service') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                            {{ __('suggestion.service_type') }}
                        </label>
                        <select wire:model="service_type" class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                                style="box-shadow: 0px 2px 0px #9B2E2E;">
                            <option
                                value="{{ __('suggestion.services.cr_renewal') }}">{{ __('suggestion.services.cr_renewal') }}</option>
                            <option
                                value="{{ __('suggestion.services.cr_amendment') }}">{{ __('suggestion.services.cr_amendment') }}</option>
                            <option
                                value="{{ __('suggestion.services.cr_cancellation') }}">{{ __('suggestion.services.cr_cancellation') }}</option>
                            <option
                                value="{{ __('suggestion.services.cr_transfer') }}">{{ __('suggestion.services.cr_transfer') }}</option>
                            <option
                                value="{{ __('suggestion.services.pay_fine') }}">{{ __('suggestion.services.pay_fine') }}</option>
                        </select>
                        <div class="text-red-600 mt-3">@error('service_type') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                            {{ __('suggestion.province_placeholder') }}
                        </label>
                        <select wire:model.live="province_id" class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                                style="box-shadow: 0px 2px 0px #9B2E2E;">
                            <option value="">{{ __('suggestion.province_placeholder') }}</option>
                            @foreach($this->provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                            @endforeach
                        </select>
                        <div class="text-red-600 mt-3">@error('province') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                            {{ __('suggestion.state_placeholder') }}
                        </label>
                        <select wire:model="state_id" class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                                style="box-shadow: 0px 2px 0px #9B2E2E;">
                            <option value="">{{ __('suggestion.state_placeholder') }}</option>
                            @foreach($this->states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                        <div class="text-red-600 mt-3">@error('state') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                            {{ __('suggestion.attachments') }}
                        </label>
                        <input wire:model="attachments"
                               class="block w-full text-lg text-gray-900 rounded-lg cursor-pointer bg-white  focus:outline-none"
                               type="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">PDF (MAX. 2MB).</p>
                        <div class="text-red-600 mt-3">@error('attachments') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-4">
                        <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                            <img src="{{ asset('image/polygon-small-dark.svg') }}" class="ltr:mr-2" alt="">
                            {{ __('suggestion.details') }}
                        </label>
                        <div class="relative">
                            <textarea type="text" wire:model="details"
                                      class="p-6 bg-white border-0 rounded-lg w-full outline-none h-64"
                                      style="box-shadow: 0px 2px 0px #9B2E2E;">
                            </textarea>
                            <div class="text-red-600 mt-3">@error('details') {{ $message }} @enderror</div>
                            <button class="p-4 bg-primary rounded-lg text-white absolute bottom-4 left-2">
                                <i class="fa-regular fa-paper-plane"></i>
                                {{ __('suggestion.send') }}
                            </button>
                        </div>
                    </div>
                </div>
                <div>
                    @if (session()->has('success'))

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
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
