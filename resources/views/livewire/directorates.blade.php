<div>
    <div class="container flex items-center">
        <div class="w-1/4">
            @for($i = 0; $i <= 5; $i++)
                <button class="pointer w-full flex items-center justify-start bg-[#F56868] p-4 mb-2 rounded-r-lg @if($directorates[$i]['number']  != $number) bg-secondary @endif" wire:click="setNumber({{ $directorates[$i]['number'] }})" wire:key="{{ $i }}">
                    <div>
                        <h1 class="text-2xl ml-1.5 @if($directorates[$i]['number'] != $number) text-primary @else text-secondary @endif">{{ $directorates[$i]['number'] }}</h1>
                    </div>
                    <div>
                        <h1 class="font-bold text-lg @if($directorates[$i]['number'] != $number) text-primary @else text-secondary @endif">{{ $directorates[$i]['title'] }}</h1>
                    </div>
                </button>
            @endfor
        </div>
        <div class="w-1/2 bg-[#F56868] px-10 py-20  z-20 rounded-lg">
            @foreach($directorates as $directoray)
                <div class="relative @if($directoray['number'] != $number) hidden @endif" wire:key="{{ $loop->index }}">
                    <div class="relative">
                        <img src="{{ asset('image/perlog.svg') }}" class="w-12 absolute -right-1.5 -z-10" alt="">
                        <h1 class="text-[#9B2E2E] font-bold text-2xl">{{ $directoray['title'] }}</h1>
                    </div>
                    <div class="mt-10 text-white list-of-content">
                        {!! $directoray['content'] !!}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="w-1/4">
            @for($i = 6; $i <= 11; $i++)
                <button class="pointer w-full flex items-center justify-start bg-[#F56868] p-4 mb-2 rounded-l-lg @if($directorates[$i]['number']  != $number) bg-secondary @endif" wire:click="setNumber({{ $directorates[$i]['number'] }})" wire:key="{{ $i }}">
                    <div>
                        <h1 class="text-2xl ml-1.5 @if($directorates[$i]['number'] != $number) text-primary @else text-secondary @endif">{{ $directorates[$i]['number'] }}</h1>
                    </div>
                    <div>
                        <h1 class="font-bold text-lg @if($directorates[$i]['number'] != $number) text-primary @else text-secondary @endif">{{ $directorates[$i]['title'] }}</h1>
                    </div>
                </button>
            @endfor
        </div>
    </div>
</div>
