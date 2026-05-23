<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqItemController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();

        return view('admin.faq.index', [
            'faqs' => $faqs,
        ]);
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|max:255',
            'question' => 'required|max:255',
            'answer' => 'required',
        ]);

        Faq::create($request->only('category', 'question', 'answer'));

        return redirect()->route('admin.faq.index')
            ->with('success', 'FAQ werd aangemaakt.');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('admin.faq.index')
            ->with('success', 'FAQ werd verwijderd.');
    }
}