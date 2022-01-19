<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct ()
    {
        $this->date = date('Y-m-d');
    }
    public function index()
    {
        $SuaraSekarang      = User::where('pilihan', '!=', '0')->whereDate('created_at', "$this->date")->count();
        $JumlahMahasiswa    = User::count();
        $Total              = User::where('pilihan', '!=', '0')->count();

        return view('voting.dashboard', [
            'SuaraSekarang'     => $SuaraSekarang,
            'JumlahMahasiswa'   => $JumlahMahasiswa,
            'Total'             => $Total,
        ]);
    }

    public function voting()
    {
        return view('voting.voting');
    }

    public function vote(User $user, Request $request)
    {
        $user->update([
            'pilihan' => $request->pilihan,
        ]);

        return redirect('dashboard')->with('success', 'Vote Berhasil');
    }
}
