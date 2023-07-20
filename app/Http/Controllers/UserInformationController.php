<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInformation;

class UserInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userinformations = UserInformation::all();

        return view('backend.userinformations.index', compact('userinformations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.userinformations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'email' => 'required|email|unique:users,email',
            'language' => 'nullable|string',
            'real_estate_type' => 'nullable|string',
            'citizenship_eligible' => 'nullable|boolean',
            'first_hand_project' => 'nullable|boolean',
            'city' => 'nullable|string',
            'method' => 'nullable|boolean',
            'minimum_investment' => 'nullable|numeric',
            'maximum_investment' => 'nullable|numeric',
        ]);

        $user = UserInformation::create($validatedData);

        return redirect()->route('userinformations.index')->with('success', 'User added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(UserInformation $user)
    {
        return view('backend.userinformations.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = UserInformation::find($id);
        return view('backend.userinformations.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserInformation $user)
    {
        $validatedData = $request->validate([
            'phone' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'language' => 'nullable|string',
            'real_estate_type' => 'nullable|string',
            'citizenship_eligible' => 'nullable|boolean',
            'first_hand_project' => 'nullable|boolean',
            'city' => 'nullable|string',
            'method' => 'nullable|boolean',
            'minimum_investment' => 'nullable|numeric',
            'maximum_investment' => 'nullable|numeric',
        ]);

        $user->update($validatedData);

        return redirect()->route('userinformations.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = UserInformation::find($id);
        $user->delete();

        return redirect()->route('userinformations.index')->with('success', 'User Deleted successfully');
    }
}
