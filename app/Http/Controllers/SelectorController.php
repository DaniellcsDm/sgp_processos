<?php

namespace App\Http\Controllers;

use App\Models\Selector;
use Illuminate\Http\Request;

class SelectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $selectors = Selector::all();
        return view('pages.selector.index', compact('selectors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.selector.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'subcategory' => 'nullable|string|max:255',
            'external_code' => 'nullable|string|max:255',
            'description' => 'required|string|max:255',
            'is_principal' => 'required|boolean',
        ]);

        Selector::create($request->all());

        return redirect()->route('selectors.index')->with('success', 'Selector created successfully!');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $selector = Selector::findOrFail($id);
        return view('pages.selector.show', compact('selector'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $selector = Selector::findOrFail($id);
        return view('pages.selector.edit', compact('selector'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'subcategory' => 'nullable|string|max:255',
            'external_code' => 'nullable|string|max:255',
            'description' => 'required|string|max:255',
            'is_principal' => 'required|boolean',
        ]);

        $selector = Selector::findOrFail($id);
        $selector->update($request->all());

        return redirect()->route('selectors.index')->with('success', 'Selector updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $selector = Selector::findOrFail($id);
        $selector->delete();

        return redirect()->route('selectors.index')->with('success', 'Selector deleted successfully!');
   
    }
}
