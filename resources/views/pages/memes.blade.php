@extends('layout')

@section('content')
    <main class="flex-auto">
        <div class="sm:px-8 mt-16 sm:mt-32">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
                <div class="relative px-4 sm:px-8 lg:px-12">
                    <div class="mx-auto max-w-2xl lg:max-w-5xl">
                        <header>
                            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">Not just a memecoin. It’s a lifestyle.</h1>
                            <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">Feel free to use the best memes in the history of TaRDie bArbIE wherever you want on the interwebs:</p>
                        </header>

                        @foreach ($memeTypes as $meme_type)
                            @if($meme_type->memes->count() >= 1)
                                <h2 class="mt-24 text-2xl font-semibold text-zinc-800 dark:text-zinc-100"><a href="{{ $meme_type->path }}">{{ $meme_type->title === 'JPEG' ? 'Meme' : $meme_type->title }}s</a></h2>
                                <div class="mt-8 sm:mt-8">
                                    <ul role="list" class="grid grid-cols-1 gap-x-12 gap-y-16 sm:grid-cols-2 lg:grid-cols-3">
                                        @foreach ($meme_type->memes->take(6) as $meme)
                                            <li class="group relative flex flex-col items-start">
                                                <div class="relative z-10 flex h-full w-full items-center justify-center bg-white shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0"><img alt="" width="{{ $meme->image->width }}" height="{{ $meme->image->height }}" decoding="async" class="h-full w-full" src="{{ $meme->image->url . $meme->meme_image_type }}" style="color: transparent;"></div>
                                                <h2 class="mt-6 text-base font-semibold text-zinc-800 dark:text-zinc-100 group-hover:text-teal-500">
                                                    <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-zinc-800/50"></div><a href="{{ $meme->path }}"><span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                                                    <span class="relative z-10">{{ $meme->title }}</span></a>
                                                </h2>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @if($meme_type->memes->count() > 6)
                                    <div class="relative flex justify-items-end w-full mt-8 sm:mt-8">
                                        <a class="flex justify-end w-fit ml-auto text-base font-semibold text-zinc-800 dark:text-zinc-100 hover:text-teal-500" href="{{ $meme_type->path }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-2">
                                                <path fill-rule="evenodd" d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6Zm-5.03 4.72a.75.75 0 0 0 0 1.06l1.72 1.72H2.25a.75.75 0 0 0 0 1.5h10.94l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 0 0-1.06 0Z" clip-rule="evenodd" />
                                            </svg>
                                            View all {{ $meme_type->title === 'JPEG' ? 'Meme' : $meme_type->title }}s
                                        </a>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection       