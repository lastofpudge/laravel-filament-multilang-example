<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="antialiased bg-gray-100">
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <ul>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a class="text-blue-500 hover:text-blue-700" rel="alternate" hreflang="{{ $localeCode }}"
                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="px-6 py-6">
        @if($posts)
            <ul class="list-disc pl-5">
                @foreach($posts as $post)
                    <li class="mb-2">
                        <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                        <div lass="text-md">{!! $post->content !!}</div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
</body>
</html>
