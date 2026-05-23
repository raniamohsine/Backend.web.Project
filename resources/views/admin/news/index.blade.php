<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuws beheren</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-6xl mx-auto py-16 px-6">

    <h1 class="text-4xl font-bold mb-10 text-red-700">
        Nieuws beheren
    </h1>

    @if(session('success'))

        <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-6">

            {{ session('success') }}

        </div>

    @endif

    <div class="bg-white p-8 rounded-lg shadow">

        <div class="flex justify-between items-center mb-6">

            <h2 class="text-2xl font-semibold">
                Nieuwsitems
            </h2>

            <a href="/admin/news/create"
               class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800">

                Nieuw item toevoegen

            </a>

        </div>

        <div class="space-y-4">

            @foreach($newsItems as $newsItem)

                <div class="border p-4 rounded-lg">

                    <h3 class="text-xl font-bold mb-2">

                        {{ $newsItem->title }}

                    </h3>

                    <p class="text-gray-700 mb-4">

                        {{ $newsItem->content }}

                    </p>
<div class="flex gap-3 mt-4">

    <a href="/admin/news/{{ $newsItem->id }}/edit"
       class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">

        Bewerken

    </a>

    <form method="POST"
          action="/admin/news/{{ $newsItem->id }}">

        @csrf
        @method('DELETE')

        <button
            class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">

            Verwijderen

        </button>

    </form>

</div>
                </div>

    @endforeach

        </div>

    </div>

</div>

</body>
</html>