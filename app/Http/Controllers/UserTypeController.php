<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userTypes = UserType::all();
        return view('pages.user_type.index', compact('userTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.user_type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255|unique:user_types',
        ]);

        UserType::create($request->all());

        return redirect()->route('user-types.index')->with('success', 'User Type created successfully!');
 
    }

    /**
     * Display the specified resource.
     */
    public function show(UserType $userType)
    {
        return view('pages.user_type.show', compact('userType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserType $userType)
    {
        return view('pages.user_type.edit', compact('userType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserType $userType)
    {
        $request->validate([
            'type' => 'required|string|max:255|unique:user_types,type,' . $userType->id,
        ]);

        $userType->update($request->all());

        return redirect()->route('user-types.index')->with('success', 'User Type updated successfully!');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserType $userType)
    {
        $userType->delete();

        return redirect()->route('user-types.index')->with('success', 'User Type deleted successfully!');
    
    }
}
