<?php

namespace App\Http\Controllers;

use App\Models\EntranceLogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Anda gagal masuk! Coba kembali dengan memasukkan email dan password yang benar!');
    }

    public function logout()
    {
        $user_id = Auth::id();
        $matchLogin = EntranceLogs::where('user_id', $user_id)->where('status', 1)->pluck('loged_in_at')->first();
        if ($matchLogin != null) {
            $user_id = Auth::id();
            $loged_out_at = date('Y-m-d H:i:s');

            $loged_in_at = EntranceLogs::where('user_id', $user_id)->where('status', 1)->pluck('loged_in_at')->first();
            // $time = (date("i", strtotime(now())) - date("i", strtotime($loged_in_at)));
            $time = strtotime(now()) - strtotime($loged_in_at);
            $time /= 60;
            $time = (int)$time;
            $data = EntranceLogs::where('user_id', $user_id)->where('status', '1')->first();
            $data->loged_out_at = $loged_out_at;
            $data->duration = $time;
            $data->status = 0;
            $data->save();

            // update waktu belajar ke tabel user
            $user = User::find(Auth::id());
            $user->duration = $user->duration + $time;
            // $user->score = $user->score + $time;
            $user->update();
        }

        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
