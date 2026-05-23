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

@if(session('success'))

    <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-6">

        {{ session('success') }}

    </div>

@endif

<!-- Contactformulier -->
<form method="POST"
      action="/contact"
      class="bg-white p-8 rounded-lg shadow space-y-6">

    @csrf

    <!-- Naam -->
    <div>
        <label class="block mb-2 font-semibold">Naam</label>

        <input type="text"
               name="name"
               class="w-full border rounded-lg px-4 py-2">
    </div>

    <!-- Email -->
    <div>
        <label class="block mb-2 font-semibold">Email</label>

        <input type="email"
               name="email"
               class="w-full border rounded-lg px-4 py-2">
    </div>

    <!-- Bericht -->
    <div>
        <label class="block mb-2 font-semibold">Bericht</label>

        <textarea rows="5"
                  name="message"
                  class="w-full border rounded-lg px-4 py-2"></textarea>
    </div>

    <!-- Verzenden knop -->
    <button
        class="bg-green-700 text-white px-6 py-3 rounded-lg hover:bg-green-800">

        Verzenden

    </button>

</form>

<!-- Terug knop -->
<a href="/"
   class="inline-block mt-6 text-green-700 font-semibold hover:underline">

    Terug naar home

</a>

</div>

</body>
</html>