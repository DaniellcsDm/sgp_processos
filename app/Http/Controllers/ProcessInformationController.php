<?php

namespace App\Http\Controllers;

use App\Models\ProcessInformation;
use Illuminate\Http\Request;

class ProcessInformationController extends Controller
{
    public function index()
    {
        $processInformations = ProcessInformation::all();
        return view('process_informations.index', compact('processInformations'));
    }

    public function create()
    {
        return view('process_informations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'process_id' => 'required|exists:processes,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'inclusion_date' => 'required|date',
        ]);

        ProcessInformation::create($request->all());

        return redirect()->route('process-informations.index')->with('success', 'Process Information created successfully!');
    }

    public function show($id)
    {
        $processInformation = ProcessInformation::findOrFail($id);
        return view('process_informations.show', compact('processInformation'));
    }

    public function edit($id)
    {
        $processInformation = ProcessInformation::findOrFail($id);
        return view('process_informations.edit', compact('processInformation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'process_id' => 'required|exists:processes,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'inclusion_date' => 'required|date',
        ]);

        $processInformation = ProcessInformation::findOrFail($id);
        $processInformation->update($request->all());

        return redirect()->route('process-informations.index')->with('success', 'Process Information updated successfully!');
    }

    public function destroy($id)
    {
        $processInformation = ProcessInformation::findOrFail($id);
        $processInformation->delete();

        return redirect()->route('process-informations.index')->with('success', 'Process Information deleted successfully!');
    }
}
