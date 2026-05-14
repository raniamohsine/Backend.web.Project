<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Football Community</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-3xl mx-auto py-16 px-6">
    <h1 class="text-4xl font-bold mb-10">Contact</h1>

    <form class="bg-white p-8 rounded-lg shadow space-y-6">
        <div>
            <label class="block mb-2 font-semibold">Naam</label>
            <input type="text"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        <div>
            <label class="block mb-2 font-semibold">Email</label>
            <input type="email"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        <div>
            <label class="block mb-2 font-semibold">Bericht</label>
            <textarea rows="5"
                      class="w-full border rounded-lg px-4 py-2"></textarea>
        </div>

        <button
            class="bg-green-700 text-white px-6 py-3 rounded-lg hover:bg-green-800">
            Verzenden
        </button>
    </form>

    <a href="/" class="inline-block mt-6 text-green-700 font-semibold hover:underline">
        Terug naar home
    </a>
</div>

</body>
</html>