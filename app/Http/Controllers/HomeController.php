<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $guest = Guest::all();
        return view('home', compact('guest'));
    }

    public function edit(Request $request, $id)
    {
        $guest = DB::table('guests')->where('id', $id)->get();
        //dd($guest);
        return view('editGuest', compact('guest'));
    }

    public function update(Request $request, $id)
    {

        $guest = Guest::where('id', $id)->first();
        $guest->status = $request->status;
        $guest->update();

        Session::flash('update', 'Successfully Update Guest');
        return redirect()->route('home');
    }

    public function createGuest()
    {
        return view('createGuest');
    }

    public function storeGuest(Request $request)
    {
        $guest = new Guest();
        $guest->nik = $request->nik;
        $guest->name = $request->name;
        $guest->email = $request->email;
        $guest->phone_number = $request->phone_number;
        $guest->reason = $request->reason;
        $guest->save();

        $guest = Guest::all();
        return view('home', compact('guest'));
    }
}