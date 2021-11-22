@extends('layouts.main')

@section('content')
    <div class="container w-11/12 mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">
                Popular Movies
            </h2>
            <div class="grid grid-cols-4 gap-8">
                @foreach ($popularMovies as $popularMovie)
                    <div class="mt-8">
                        <a href="">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $popularMovie['poster_path'] }}" alt=""
                                class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg mt-2 hover:text-gray-300">{{ $popularMovie['original_title'] }}</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <span class="ml-1">{{ $popularMovie['vote_average'] * 10 . '%' }}</span>
                                <span class="mx-2">|</span>
                                <span>{{ \Carbon\Carbon::parse($popularMovie['release_date'])->format('M d, Y') }}</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
