<?php

namespace App\Http\Controllers;

use App\Models\ProcessFile;
use Illuminate\Http\Request;

class ProcessFileController extends Controller
{
    public function index()
    {
        $processFiles = ProcessFile::all();
        return view('process_files.index', compact('processFiles'));
    }

    public function create()
    {
        return view('process_files.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'process_id' => 'required|exists:processes,id',
            'title' => 'required|string|max:255',
            'attachment' => 'required|string|max:255',
            'inclusion_date' => 'required|date',
        ]);

        ProcessFile::create($request->all());

        return redirect()->route('process-files.index')->with('success', 'Process File created successfully!');
    }

    public function show($id)
    {
        $processFile = ProcessFile::findOrFail($id);
        return view('process_files.show', compact('processFile'));
    }

    public function edit($id)
    {
        $processFile = ProcessFile::findOrFail($id);
        return view('process_files.edit', compact('processFile'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'process_id' => 'required|exists:processes,id',
            'title' => 'required|string|max:255',
            'attachment' => 'required|string|max:255',
            'inclusion_date' => 'required|date',
        ]);

        $processFile = ProcessFile::findOrFail($id);
        $processFile->update($request->all());

        return redirect()->route('process-files.index')->with('success', 'Process File updated successfully!');
    }

    public function destroy($id)
    {
        $processFile = ProcessFile::findOrFail($id);
        $processFile->delete();

        return redirect()->route('process-files.index')->with('success', 'Process File deleted successfully!');
    }
}

