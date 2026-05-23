<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuws bewerken</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-4xl mx-auto py-16 px-6">

    <h1 class="text-4xl font-bold mb-10 text-red-700">
        Nieuws bewerken
    </h1>

    <form method="POST"
          action="/admin/news/{{ $newsItem->id }}"
          class="bg-white p-8 rounded-lg shadow space-y-6">

        @csrf
        @method('PUT')

        <div>
            <label class="block mb-2 font-semibold">Titel</label>
            <input type="text"
                   name="title"
                   value="{{ $newsItem->title }}"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        <div>
            <label class="block mb-2 font-semibold">Afbeelding</label>
            <input type="text"
                   name="image"
                   value="{{ $newsItem->image }}"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        <div>
            <label class="block mb-2 font-semibold">Content</label>
            <textarea name="content"
                      rows="6"
                      class="w-full border rounded-lg px-4 py-2">{{ $newsItem->content }}</textarea>
        </div>

        <div>
            <label class="block mb-2 font-semibold">Publicatiedatum</label>
            <input type="date"
                   name="publication_date"
                   value="{{ $newsItem->publication_date }}"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        <button class="bg-green-700 text-white px-6 py-3 rounded-lg hover:bg-green-800">
            Opslaan
        </button>

    </form>

    <a href="/admin/news"
       class="inline-block mt-6 text-green-700 font-semibold hover:underline">
        Terug naar nieuwsbeheer
    </a>

</div>

</body>
</html>