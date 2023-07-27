<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Process;
use App\Models\Selector;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $processes = Process::all();
        return view('pages.process.index', compact('processes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $active_clients = Client::where('role', 'Ativo')->get();
        $passive_clients = Client::where('role', 'Passivo')->get();
        $selectors = Selector::all();
        return view('pages.process.create', compact('active_clients', 'passive_clients', 'selectors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'active_parties' => 'required|array',
            'active_parties.*' => 'required|exists:clients,id',
            'active_lawyers' => 'required|array',
            'active_lawyers.*' => 'required|exists:lawyers,id',
            'passive_parties' => 'required|array',
            'passive_parties.*' => 'required|exists:clients,id',
            'passive_lawyers' => 'required|array',
            'passive_lawyers.*' => 'required|exists:lawyers,id',
            'court' => 'required|string|max:255',
            'number' => 'required|string|max:255|unique:processes',
            'subject' => 'required|string|max:255',
            'value' => 'required|numeric',
            'status' => 'required|in:Ativo,Inativo,Concluído,Arquivado',
            'file_title' => 'nullable|string|max:255',
            'file_attachment' => 'nullable|string|max:255',
            'file_inclusion_date' => 'nullable|date',
        ]);

        Process::create($request->all());

        return redirect()->route('processes.index')->with('success', 'Process created successfully!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Process $process)
    {
        return view('pages.process.show', compact('process'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Process $process)
    {
        $clients = Client::all();
        $selectors = Selector::all();
        return view('pages.process.edit', compact('process', 'clients', 'selectors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'active_parties' => 'required|array',
            'active_parties.*' => 'required|exists:clients,id',
            'active_lawyers' => 'required|array',
            'active_lawyers.*' => 'required|exists:lawyers,id',
            'passive_parties' => 'required|array',
            'passive_parties.*' => 'required|exists:clients,id',
            'passive_lawyers' => 'required|array',
            'passive_lawyers.*' => 'required|exists:lawyers,id',
            'court' => 'required|string|max:255',
            'number' => 'required|string|max:255|unique:processes,number,' . $id,
            'subject' => 'required|string|max:255',
            'value' => 'required|numeric',
            'status' => 'required|in:Ativo,Inativo,Concluído,Arquivado',
            'file_title' => 'nullable|string|max:255',
            'file_attachment' => 'nullable|string|max:255',
            'file_inclusion_date' => 'nullable|date',
        ]);

        $process = Process::findOrFail($id);
        $process->update($request->all());

        return redirect()->route('processes.index')->with('success', 'Process updated successfully!');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Process $process)
    {
        $process->subjects()->detach();
        $process->delete();

        return redirect()->route('pages.process.index')->with('success', 'Process deleted successfully!');
    
    }
}
