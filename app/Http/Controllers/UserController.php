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
            'data' => User::latest()->filter(request(['search']))->paginate(5)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('admin');
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
        $this->authorize('admin');
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'foto' => 'file|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['isAdmin'] = $request->isAdmin == 'on' ? true : false;

        if (key_exists('foto', $validatedData)) {
            $image = $request->file('foto');
            $destinationPath = 'asset/img/user/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validatedData['foto'] = $profileImage;
        }

        User::create($validatedData);

        return redirect('/dashboard/user')->with('success_user', 'Sukses menginputkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->authorize('admin');
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
        $this->authorize('admin');
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
        $this->authorize('admin');
        $rules['name'] = 'required|max:255';

        $data = User::find($id);

        if ($request->email != $data->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        if ($request->password != '' && $request->password != null) {
            $rules['password'] = 'required|min:5|max:255';
        }

        if ($request->foto != '' && $request->foto != null) {
            $rules['foto'] = 'file|mimes:jpeg,png,jpg,gif,svg';
        }

        $validatedData = $request->validate($rules);

        if (key_exists('password', $validatedData)) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }

        if (key_exists('foto', $validatedData)) {
            $destinationPath = 'asset/img/user/';

            if ($request->oldfoto && $request->oldfoto != 'user.png') {
                unlink($destinationPath . $request->oldfoto);
            }

            $image = $request->file('foto');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validatedData['foto'] = $profileImage;
        }

        $validatedData['isAdmin'] = $request->isAdmin == 'on' ? true : false;

        User::where('id', $id)->update($validatedData);

        return redirect('/dashboard/user')->with('success_user', 'Sukses mengedit data');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('admin');

        if ($id != auth()->user()->id) {
            $image = User::find($id)->photo;
            if (User::find($id)->photo) {
                $destinationPath = 'asset/img/galeri/';

                if ($image) {
                    unlink($destinationPath . $image);
                }
            }

            User::destroy($id);
            return redirect('/dashboard/user')->with('success_user', 'Sukses menghapus data');
        }

        return redirect('/dashboard/user')->with('warning_user', 'Data tidak dapat dihapus');
    }
}
