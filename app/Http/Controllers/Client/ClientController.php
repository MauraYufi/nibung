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

    public function getUmkm()
    {
        //
        $umkms = Umkm::latest()->get();
     
        return view('client.umkm',compact('umkms'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $query = Umkm::query();

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('sector', 'like', '%' . $search . '%');
            });
        }

        $umkms = $query->latest()->get();

        return view('client.umkm', compact('umkms'));
    }

    public function reset()
    {
        return redirect()->route('umkm.get');
    }
}