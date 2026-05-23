<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ toevoegen</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-4xl mx-auto py-16 px-6">

    <h1 class="text-4xl font-bold mb-10 text-red-700">
        FAQ toevoegen
    </h1>

    <form method="POST"
          action="/admin/faq"
          class="bg-white p-8 rounded-lg shadow space-y-6">

        @csrf

        <div>
            <label class="block mb-2 font-semibold">Categorie</label>

            <input type="text"
                   name="category"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        <div>
            <label class="block mb-2 font-semibold">Vraag</label>

            <input type="text"
                   name="question"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        <div>
            <label class="block mb-2 font-semibold">Antwoord</label>

            <textarea name="answer"
                      rows="6"
                      class="w-full border rounded-lg px-4 py-2"></textarea>
        </div>

        <button class="bg-green-700 text-white px-6 py-3 rounded-lg hover:bg-green-800">

            Opslaan

        </button>

    </form>

    <a href="/admin/faq"
       class="inline-block mt-6 text-green-700 font-semibold hover:underline">

        Terug naar FAQ beheer

    </a>

</div>

</body>
</html>