<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Community</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navigatie -->
    <nav class="bg-green-700 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Football Community</h1>
            <div class="space-x-4">
                <a href="/login" class="hover:underline">Inloggen</a>
                <a href="/register" class="hover:underline">Registreren</a>
                <a href="/users/1" class="bg-white text-green-700 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100">
                    Publiek profiel
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-green-700 text-white py-20">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-5xl font-bold mb-6">
                Welkom bij de Football Community
            </h2>
            <p class="text-xl mb-8">
                Deel je passie voor voetbal, ontdek spelersprofielen en connecteer met andere voetballiefhebbers.
            </p>
            <a href="/register"
               class="bg-white text-green-700 px-8 py-4 rounded-lg text-lg font-bold hover:bg-gray-100">
                Start nu
            </a>
        </div>
    </section>

    <!-- Features -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-12">Wat kan je doen?</h3>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-100 p-8 rounded-xl shadow">
                    <h4 class="text-xl font-bold mb-4"> Profielen</h4>
                    <p>Bekijk publieke profielen van andere gebruikers.</p>
                </div>

                <div class="bg-gray-100 p-8 rounded-xl shadow">
                    <h4 class="text-xl font-bold mb-4"> Favoriete Clubs</h4>
                    <p>Toon jouw favoriete club en spelers.</p>
                </div>

                <div class="bg-gray-100 p-8 rounded-xl shadow">
                    <h4 class="text-xl font-bold mb-4"> Community</h4>
                    <p>Maak contact met andere voetbalfans.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-6">
        <p>&copy; 2026 Football Community - Gemaakt door Rania Mohsine</p>
    </footer>

</body>
</html>