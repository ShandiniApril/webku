<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function student()
    {
        return view('teacher.student', [
            "students" => User::where('level', 'siswa')->get()
        ]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // if ($request->hasfile('image')) {
        //     $destination = 'storage/' . $user->image;
        //     if (File::exists($destination)) {
        //         File::delete($destination);
        //     }
        //     // $file = $request->file('image');
        //     // $extention = $file->getClientOriginalExtension();
        //     // $filename = time() . '.' . $extention;
        //     // $file->move('storage/user-images/', $filename);
        //     // $user->image = $filename;
        //     $request->file('image')->move('storage/user-images/', $request->file('image')->getClientOriginalName());
        //     $user->image = $request->file('image')->getClientOriginalName();
        //     $user->save();

        // }
        if ($request->file('image')) {
            $destination = 'storage/' . $user->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $user->image = $request->file('image')->store('user-images');
        }

        $user->update();

        return back()->with('success', 'Data User Berhasil Update!');
    }

    public function remove($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('success', 'Siswa berhasil dihapus!');
    }
}
