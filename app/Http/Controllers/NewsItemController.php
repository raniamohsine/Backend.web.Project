<?php

namespace App\Http\Controllers;

use App\Models\NewsItem;
use Illuminate\Http\Request;

class NewsItemController extends Controller
{
    // Toon alle nieuwsitems in de admin
    public function index()
    {
        $newsItems = NewsItem::latest()->get();

        return view('admin.news.index', [
            'newsItems' => $newsItems,
        ]);
    }

    // Toon formulier om een nieuwsitem aan te maken
    public function create()
    {
        return view('admin.news.create');
    }

    // Sla een nieuw nieuwsitem op
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|max:255',
            'published_at' => 'nullable|date',
        ]);

        NewsItem::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
            'published_at' => $request->publication_date,
        ]);

        return redirect()->route('admin.news.index')
            ->with('success', 'Nieuwsitem werd aangemaakt.');
    }

    // Toon formulier om een nieuwsitem te bewerken
    public function edit(NewsItem $newsItem)
    {
        return view('admin.news.edit', [
            'newsItem' => $newsItem,
        ]);
    }

    // Sla wijzigingen op
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|max:255',
            'publication_date'=>'required|date',
        ]);

        $newsItem->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
            'published_at' => $request->publication_date,
        ]);

        return redirect()->route('admin.news.index')
            ->with('success', 'Nieuwsitem werd aangepast.');
    }

    // Verwijder een nieuwsitem
    public function destroy(NewsItem $newsItem)
    {
        $newsItem->delete();

        return redirect()->route('admin.news.index')
            ->with('success', 'Nieuwsitem werd verwijderd.');
    }
}