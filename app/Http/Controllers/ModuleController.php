<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Module::all();
        return view('pages.module.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.module.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:modules',
            'position' => 'required',
            'icon' => 'nullable|string|max:255',
            'status' => 'required|in:Ativo,Inativo',
        ]);

        Module::create($request->all());

        return redirect()->route('modules.index')->with('success', 'Module created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        return view('pages.module.show', compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        return view('pages.module.edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Module $module)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:modules,slug,' . $module->id,
            'position' => 'required',
            'icon' => 'nullable|string|max:255',
            'status' => 'required|in:Ativo,Inativo',
        ]);
        $module->update($request->all());
    
        return redirect()->route('modules.index')->with('success', 'Module updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {    
        $module->delete();

        return redirect()->route('modules.index')->with('success', 'Module deleted successfully!');
  
    }
}
