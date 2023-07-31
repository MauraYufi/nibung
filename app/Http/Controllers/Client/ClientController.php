<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Umkm;

class ClientController extends Controller
{
    //
    public function showProfil()
    {
        //
        $profil = Profil::find(1);
        return view('client.profildesa', compact('profil'));
    }

    
    public function showUmkm()
    {
        //
        $umkms = Umkm::latest()->paginate(5);
     
        return view('client.umkm',compact('umkms'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
