<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.user.index', [
            'page' => 'User',
            'url' => 'user',
            'data' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.form', [
            'page' => 'User',
            'url' => 'user',
            'subtitle' => 'Insert',
            'data' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/dashboard/user')->with('success', 'Sukses menginputkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.user.view', [
            'page' => 'User',
            'url' => 'user',
            'subtitle' => 'View',
            'data' => User::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.user.edit', [
            'page' => 'User',
            'url' => 'user',
            'subtitle' => 'Update',
            'data' => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules['name'] = 'required|max:255';

        $data = User::find($id);

        if ($request->email != $data->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        if ($request->password != '' && $request->password != null) {
            $rules['password'] = 'required|min:5|max:255';
        }

        $validatedData = $request->validate($rules);

        if (key_exists('password', $validatedData)) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }

        User::where('id', $id)->update($validatedData);

        return redirect('/dashboard/user')->with('success', 'Sukses mengedit data');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('/dashboard/user')->with('success', 'Sukses menghapus data');
    }
}
