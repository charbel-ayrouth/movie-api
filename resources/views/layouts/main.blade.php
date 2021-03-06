<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Movie App</title>
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800 w-11/12 mx-auto">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex item-center">
                <li>
                    <a href="#">MovieApp</a>
                </li>
                <li class="ml-16">
                    <a href="" class="hover::test-gray-300">Movies</a>
                </li>
                <li class="ml-6">
                    <a href="" class="hover::test-gray-300">TV Shows</a>
                </li>
                <li class="ml-6">
                    <a href="" class="hover::test-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text"
                        class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-ouline"
                        placeholder="Search">
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
