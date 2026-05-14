<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsItem;

class NewsItemSeeder extends Seeder
{
    public function run(): void
    {
        NewsItem::create([
            'title' => 'Nieuw seizoen gestart',
            'image' => null,
            'content' => 'Het nieuwe voetbalseizoen is gestart. Leden kunnen zich registreren en de community volgen.',
            'publication_date' => now(),
        ]);

        NewsItem::create([
            'title' => 'Nieuwe leden welkom',
            'image' => null,
            'content' => 'Football Community verwelkomt nieuwe voetballiefhebbers die graag profielen en nieuwtjes willen volgen.',
            'publication_date' => now(),
        ]);

        NewsItem::create([
            'title' => 'Training van de week',
            'image' => null,
            'content' => 'Deze week ligt de focus op teamwork, passing en communicatie op het veld.',
            'publication_date' => now(),
        ]);
    }
}