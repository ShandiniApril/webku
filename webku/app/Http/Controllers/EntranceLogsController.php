<?php

namespace App\Http\Controllers;

use App\Models\EntranceLogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntranceLogsController extends Controller
{
    public function home()
    {
        $user_id = Auth::id();
        $matchLogin = EntranceLogs::where('user_id', $user_id)->where('status', 1)->pluck('loged_in_at')->first();

        // dd($matchLogin);
        return view('home', [
            'loged' => $matchLogin,
        ]);
    }

    public function start()
    {
        $entranceLog['user_id'] = Auth::id();
        $entranceLog['status'] = 1;
        $entranceLog['loged_in_at'] = date('Y-m-d H:i:s');

        EntranceLogs::create($entranceLog);

        return back()->with('success', 'Waktu belajar mulai dihitung! Selamat Belajar!');
    }

    public function stop()
    {
        $user_id = Auth::id();
        $loged_out_at = date('Y-m-d H:i:s');

        $loged_in_at = EntranceLogs::where('user_id', $user_id)->where('status', 1)->pluck('loged_in_at')->first();
        // $time = (date("i", strtotime(now())) - date("i", strtotime($loged_in_at)));
        $time = strtotime(now()) - strtotime($loged_in_at);
        $time /= 60;
        $time = (int)$time;
        // dd($time);
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

        return redirect('/home')->with('success', 'Terima kasih telah belajar hari ini! Silakan logout!');
    }
}
