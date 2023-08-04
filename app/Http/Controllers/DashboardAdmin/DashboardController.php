<?php

namespace App\Http\Controllers\DashboardAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Models\Profil;
use App\Http\Controllers\DashboardAdmin\ProfilController;
use App\Http\Controllers\DashboardAdmin\UmkmController;

class DashboardController extends Controller
{
    public function showPage()
    {
        $dataprofil = app(ProfilController::class)->index();
        $dataumkm = app(UmkmController::class)->showAllUmkm();

        return view('dashboard_admin.dashboard', compact('dataprofil', 'dataumkm'));
    }
}

/*class DashboardController extends Controller
{
    //
    public function showProfil()
    {
        //
        $profil = Profil::find(1);
        return view('dashboard_admin.dashboard', compact('profil'));
    }

    public function showUmkm()
    {
        $totalUmkm = Umkm::count();
        
        return view('dashboard_admin.dashboard', compact('totalUmkm'));
    }
}*/
