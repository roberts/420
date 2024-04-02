@extends('layout')

@section('content')
    <main class="flex-auto">
        <div class="sm:px-8 mt-16 sm:mt-32">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
                <div class="relative px-4 sm:px-8 lg:px-12">
                    <div class="mx-auto max-w-2xl lg:max-w-5xl">
                        <header>
                            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">{{ $title }}</h1>
                            <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">{{ $description }}</p>
                        </header>

                        <div class="relative flex justify-items-end w-full mt-16 mb-8 sm:mt-8">
                            <a class="flex justify-end w-fit mr-auto text-base font-semibold text-zinc-800 dark:text-zinc-100 hover:text-teal-500" href="{{ $meme->meme_type->path }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-4">
                                    <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm5.03 4.72a.75.75 0 0 1 0 1.06l-1.72 1.72h10.94a.75.75 0 0 1 0 1.5H10.81l1.72 1.72a.75.75 0 1 1-1.06 1.06l-3-3a.75.75 0 0 1 0-1.06l3-3a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                                </svg>
                                View all {{ $meme->meme_type->title === 'JPEG' ? 'JPEG Meme' : $meme->meme_type->title }}s
                            </a>
                            <a class="flex justify-end w-fit ml-auto text-base font-semibold text-zinc-800 dark:text-zinc-100 hover:text-teal-500" href="{{ $image }}" download="{{ $image_name }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-4">
                                    <path fill-rule="evenodd" d="M12 2.25a.75.75 0 0 1 .75.75v11.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 1 1 1.06-1.06l3.22 3.22V3a.75.75 0 0 1 .75-.75Zm-9 13.5a.75.75 0 0 1 .75.75v2.25a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5V16.5a.75.75 0 0 1 1.5 0v2.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V16.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                                </svg>
                                Download This Meme
                            </a>
                        </div>

                        <div class="w-full">
                            <img alt="" width="{{ $meme->image->width }}" height="3{{ $meme->image->height }}" decoding="async" class="w-full bg-zinc-100 object-cover dark:bg-zinc-800" style="color:transparent" src="{{ $image }}">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection       