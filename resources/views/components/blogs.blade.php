@foreach($blogs as $blog)
    <div class="shadow-lg rounded-2xl p-4 inline-block" wire:key="{{ $loop->index }}" href="#">
        <div class="bg-gray-100 w-full h-80 rounded-2xl flex items-center justify-center mb-3"
             style="background: url('/storage/{{ $blog->data['cover'] ?? '' }}'); background-size: cover; background-position: center center;">
        </div>

        <h1 class="font-bold text-primary text-xl mt-3">{{ $blog->title }}</h1>
        <p class="text-dark-gray mt-3">
            {!!  Str::words($blog->data['content'] ?? '', 40, '') !!}...
        </p>
        <a href="/blogs/{{ $blog->slug }}"
           class="inline-block bg-secondary p-3 rounded mt-4 text-primary hover:text-secondary hover:bg-primary transition-all hvr-icon-wobble-horizontal">
            {{ __('global.blog.read-more') }}
            @if(app()->getLocale() == 'ar')
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block hvr-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block hvr-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            @endif
        </a>
    </div>
@endforeach
