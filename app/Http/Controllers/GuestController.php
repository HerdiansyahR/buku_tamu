<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Guest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GuestController extends Controller
{
    public function index()
    {
        return view('guest');
    }

    public function store(Request $request)
    {
        $guest = new Guest();
        $guest->nik = $request->nik;
        $guest->name = $request->name;
        $guest->email = $request->email;
        $guest->phone_number = $request->phone_number;
        $guest->reason = $request->reason;
        $guest->save();

        return view('guestWelcome');
    }
}