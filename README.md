PROJECTBESCHRIJVING:

     # Football Community

Football Community is een dynamische webapplicatie gemaakt met Laravel 13 voor het vak Backend web.

De website laat gebruikers toe om:
- een account aan te maken;
- in te loggen;
- hun profiel te beheren;
-nieuwsartikelen te bekijken;
-publieke profielen van andere gebruikers te zien;
-de FAQ pagina te raadplegen;
-contact op te nemen via het contactformulier.

---
 # Gebruikte technologieen
   - Laravel 13 
   - PHP
   - MySQL
   - Blade templates
   - CSS
   -Github
   - Laravel Breeze

   ---

   #Functionaliteiten

   ## Gebruikers
   -Registreren
   -Inloggen
   -Profiel aanpassen
   -Publiek profiel bekijken

   ### Nieuws
   - Nieuwsartikelen bekijken vanuit de database

   ### Extre pagina's
   -FAQ pagina
   -Contact pagina

   ---
   ## Installatie

   1.Clone de repository

   '''bash
   git clone https://github.com/raniamohsine/backend.project
   '''

   2. Installeer dependencies
   2. Installeer dependencies

```bash
composer install
npm install
```

3. Maak het .env bestand aan

```bash
cp .env.example .env
```

4. Genereer de application key

```bash
php artisan key:generate
```

5. Voer de migraties uit

```bash
php artisan migrate --seed
```

6. Start de server

```bash
php artisan serve
```

---

## Auteur

Rania Mohsine

---

## Opmerking

Voor dit project werd AI gebruikt als ondersteuning voor:
- code uitleg;
- debugging;
- structuur van controllers en routes;
- README documentatie.

Alle code werd getest en aangepast binnen het project.