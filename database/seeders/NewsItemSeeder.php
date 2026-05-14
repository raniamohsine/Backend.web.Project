<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsItem;

class NewsItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsItem::create([
            'title'=>'Nieuwe speler toegevoegd',
            'image'=> null,
            'content' => 'Welkom aan onze nieuwe middenvelder.',
            'publication_date' => now(),
        ]);

        NewsItem::creatz([
            'title'=> 'Wedstrijd gewonnen',
            'image' => null,
            'content' => 'Onze ploeg won met 3-1.',
            'publication_date' => now(),
        ]);
    }
}
