<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user.index');
    }

    public function create(): View
    {
        return view('user.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate();

        $validated = $request->safe()->only(['level_id', 'username', 'nama', 'password']);
        $validated = $request->safe()->except(['level_id', 'username', 'nama', 'password']);

        return redirect('/user');
    }
    // public function index()
    // {
    //     $user = UserModel::with('level')->get();
    //     return view('user', ['data' => $user]);
    // }

    // public function tambah()
    // {
    //     return view('user_tambah');
    // }

    // public function tambah_simpan(Request $request)
    // {
    //     UserModel::create([
    //         'username' => $request->username,
    //         'nama' => $request->nama,
    //         'password' => Hash::make('$request->password'),
    //         'level_Id' => $request->level_Id
    //     ]);
    //     return redirect('/user');
    // }

    // public function ubah($id)
    // {
    //     $user = UserModel::find($id);
    //     return view('user_ubah', ['data' => $user]);
    // }

    // public function ubah_simpan($id, Request $request)
    // {
    //     $user = UserModel::find($id);
    //     $user->username = $request->username;
    //     $user->nama = $request->nama;
    //     $user->password = Hash::make($request->password);
    //     $user->level_Id = $request->level_Id;

    //     $user->save();

    //     return redirect('/user');
    // }

    // public function hapus($id)
    // {
    //     $user = UserModel::find($id);
    //     $user->delete();
    //     return redirect(('/user'));
    // }
}
