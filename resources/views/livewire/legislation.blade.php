<div>
    <div class="container">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:flex-1 mb-16 md:mb-0 ml-10">
                <div class="bg-[#f6f8fa] rounded-2xl p-6">
                    <div class="relative">
                        <h1 class="text-primary text-2xl font-bold mb-7">{{ __('messages.search_legislation') }}</h1>
                    </div>
                    @foreach($legislationCategories as $category)
                        <div class="flex items-center">
                            <label class="relative flex items-center p-3 rounded-full cursor-pointer"
                                   htmlFor="ripple-on"
                                   data-ripple-dark="true">
                                <input id="ripple-on" type="checkbox" wire:model.live="legislationCategoriesList"
                                       value="{{ $category->id }}"
                                       class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-primary before:opacity-0 before:transition-opacity checked:border-secondary checked:bg-primary checked:before:bg-gray-900 hover:before:opacity-10"/>
                                <span
                                    class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                         fill="currentColor"
                                         stroke="currentColor" stroke-width="1">
                                      <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </label>
                            <label class="mt-px font-light text-gray-700 cursor-pointer select-none"
                                   htmlFor="ripple-on">
                                {{ $category->name }}
                            </label>
                        </div>
                    @endforeach

                    @php
                        $currentYear = date('Y');
                        $years = range(1970, $currentYear);
                    @endphp
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                    <select id="countries" wire:model.live="year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach($years as $y)
                            <option value="{{ $y }}">{{ $y }}</option>
                        @endforeach
                    </select>
                    <div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-2/3">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach($legislations as $legislation)
                        <a class="shadow-lg rounded-2xl p-4 inline-block" wire:key="{{ $loop->index }}" href="#">
                            <div class="bg-gray-100 w-20 h-20 rounded-2xl flex items-center justify-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5"
                                     stroke="currentColor" class="w-14 text-primary h-14 mx-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                                </svg>
                            </div>
                            <span
                                class="bg-primary/20 text-primary text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-primary dark:text-blue-300">{{ \Carbon\Carbon::parse($legislation->year)->format('Y') }}</span>
                            <h1 class="font-bold text-primary text-xl mt-3">{{ $legislation->title }}</h1>
                            <p class="text-dark-gray mt-3">
                                {!!   Str::words($legislation->description, 30, '') !!}
                            </p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
