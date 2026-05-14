<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Nieuwtjes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="max-w-4xl mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-6">Laatste nieuwtjes</h1>

        @foreach ($newsItems as $news)
            <div class="bg-white p-6 rounded-lg shadow mb-4">
                <h2 class="text-xl font-bold">{{ $news->title }}</h2>
                <p class="text-gray-500">{{ $news->publication_date }}</p>
                <p class="mt-3">{{ $news->content }}</p>
            </div>
        @endforeach

        <a href="/" class="text-green-700 underline">Terug naar home</a>
    </div>

</body>
</html>