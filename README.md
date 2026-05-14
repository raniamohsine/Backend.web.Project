PROJECTBESCHRIJVING:

     # Football Community

Voor het vak Backend Web moest ik een dynamische website maken met Laravel 13. Ik heb gekozen om een website te maken rond voetbal, omdat ik dit een interessant thema vind en omdat het goed past bij de gevraagde functionaliteiten.

Mijn project heet Football Community. Het is een website waar bezoekers zich kunnen registreren en inloggen. Daarnaast kunnen ze een publiek profiel bekijken, nieuwtjes lezen, veelgestelde vragen raadplegen en contact opnemen via een contactformulier.

Ik heb dit project stap voor stap opgebouwd. Eerst heb ik Laravel geïnstalleerd en het login- en registratiesysteem ingesteld. Daarna heb ik de database uitgebreid met extra tabellen en modellen, zoals profielen en nieuwsitems. Vervolgens heb ik verschillende pagina’s gemaakt, zoals de homepagina, een publieke profielpagina, een nieuwspagina, een FAQ-pagina en een contactpagina.

Tijdens het maken van het project heb ik regelmatig getest of alles correct werkte in de browser. Na elke belangrijke stap heb ik mijn wijzigingen gecommit en gepusht naar GitHub.

Wanneer ik vastzat of een foutmelding kreeg, heb ik ChatGPT gebruikt om uitleg te krijgen en mij verder te helpen. Dit hielp mij om de code beter te begrijpen en zelf verder te werken. Alle code werd door mij nagekeken, getest en aangepast waar nodig.


Functionaliteiten

- Registreren en inloggen
- Publiek profiel bekijken
- Nieuwtjes pagina
- FAQ pagina
- Contactpagina
- Admin account via seeder

Installatie

bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve


Default admin account
Email: admin@ehb.be
Password: Password!321


Auteur

Rania Mohsine
Graduaat Programmeren
Erasmushogeschool Brussel