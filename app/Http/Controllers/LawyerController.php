<?php

namespace App\Http\Controllers;

use App\Models\Lawyers;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lawyers = Lawyers::all();
        return view('pages.lawyer.index', compact('lawyers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.lawyer.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'birth_date' => 'nullable|date',
            'rg' => 'nullable|string|max:255',
            'cpf_cnpj' => 'nullable|string|max:255',
            'gender' => 'nullable|in:Masculino,Feminino,Indefinido',
            'registration_number' => 'required|string|max:255',
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
        Lawyers::create($request->all());

        return redirect()->route('lawyers.index')->with('success', 'Lawyer created successfully!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Lawyers $lawyer)
    {
        return view('pages.lawyer.show', compact('lawyer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lawyers $lawyer)
    {
        return view('pages.lawyer.edit', compact('lawyer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lawyers $lawyer)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'birth_date' => 'nullable|date',
            'rg' => 'nullable|string|max:255',
            'cpf_cnpj' => 'nullable|string|max:255',
            'gender' => 'nullable|in:Masculino,Feminino,Indefinido',
            'registration_number' => 'required|string|max:255',
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

        $lawyer->update($request->all());

        return redirect()->route('lawyers.index')->with('success', 'Lawyer updated successfully!');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lawyers $lawyer)
    {
        $lawyer->delete();

        return redirect()->route('lawyers.index')->with('success', 'Lawyer deleted successfully!');
    
    }
}
