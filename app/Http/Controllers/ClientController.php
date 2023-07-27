<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('pages.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:Pessoa Física,Pessoa Jurídica',
            'role' => 'required|in:Ativo,Passivo,Interessado',
            'full_name' => 'required|string|max:255',
            'birth_date' => 'nullable|date',
            'rg' => 'nullable|string|max:255',
            'cpf_cnpj' => 'nullable|string|max:255',
            'gender' => 'nullable|in:Masculino,Feminino,Indefinido',
            'profession' => 'nullable|string|max:255',
            'education' => 'nullable|string|max:255',
            'birth_place' => 'nullable|string|max:255',
            'marital_status' => 'nullable|string|max:255',
            'personal_email' => 'nullable|email|max:255',
            'commercial_email' => 'nullable|email|max:255',
            'mother_name' => 'nullable|string|max:255',
            'father_name' => 'nullable|string|max:255',
            'whatsapp_1' => 'nullable|string|max:255',
            'whatsapp_2' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'address_number' => 'nullable|string|max:255',
            'address_complement' => 'nullable|string|max:255',
            'neighborhood' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'inclusion_date' => 'nullable|date',
            'status' => 'required|in:Ativo,Inativo,Bloqueado',
            'file_title' => 'nullable|string|max:255',
            'file_attachment' => 'nullable|string|max:255',
            'file_inclusion_date' => 'nullable|date',
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index')->with('success', 'Client created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return view('pages.client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view('pages.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'type' => 'required|in:Pessoa Física,Pessoa Jurídica',
            'role' => 'required|in:Ativo,Passivo,Interessado',
            'full_name' => 'required|string|max:255',
            'birth_date' => 'nullable|date',
            'rg' => 'nullable|string|max:255',
            'cpf_cnpj' => 'nullable|string|max:255',
            'gender' => 'nullable|in:Masculino,Feminino,Indefinido',
            'profession' => 'nullable|string|max:255',
            'education' => 'nullable|string|max:255',
            'birth_place' => 'nullable|string|max:255',
            'marital_status' => 'nullable|string|max:255',
            'personal_email' => 'nullable|email|max:255',
            'commercial_email' => 'nullable|email|max:255',
            'mother_name' => 'nullable|string|max:255',
            'father_name' => 'nullable|string|max:255',
            'whatsapp_1' => 'nullable|string|max:255',
            'whatsapp_2' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'address_number' => 'nullable|string|max:255',
            'address_complement' => 'nullable|string|max:255',
            'neighborhood' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'inclusion_date' => 'nullable|date',
            'status' => 'required|in:Ativo,Inativo,Bloqueado',
            'file_title' => 'nullable|string|max:255',
            'file_attachment' => 'nullable|string|max:255',
            'file_inclusion_date' => 'nullable|date',
        ]);

        $client = Client::findOrFail($id);
        $client->update($request->all());

        return redirect()->route('clients.index')->with('success', 'Client updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully!');
  
    }
}
