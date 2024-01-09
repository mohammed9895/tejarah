<div>
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            @foreach($blogs as $blog)
                <div class="shadow-lg rounded-2xl p-4 inline-block" wire:key="{{ $loop->index }}" href="#">
                    <div class="bg-gray-100 w-full h-80 rounded-2xl flex items-center justify-center mb-3" style="background: url('/storage/{{ $blog->cover }}'); background-size: cover; background-position: center center;">
                    </div>
                    <span
                        class="bg-primary/20 text-primary text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Default</span>
                    <h1 class="font-bold text-primary text-xl mt-3">{{ $blog->title }}</h1>
                    <p class="text-dark-gray mt-3">
                        {!!  Str::words($blog->content, 40, '') !!}
                    </p>
                    <a href="{{ route('single-blog', $blog->id) }}" class="inline-block bg-primary p-3 rounded mt-4 text-white">{{ __('global.blog.read-more') }}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
