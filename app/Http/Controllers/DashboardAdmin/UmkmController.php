<?php

namespace App\Http\Controllers\DashboardAdmin;

use App\Models\Umkm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $umkms = Umkm::latest()->paginate(5);
     
        return view('dashboard_admin.umkm.index',compact('umkms'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard_admin.umkm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'sector' => 'required',
            'telp' => 'required',
        ]);
   
        $input = $request->all();

        // Menghapus karakter "-" atau " " dari nomor telepon
        $input['telp'] = str_replace(['-', ' '], '', $input['telp']);

        // Menambahkan awalan "+62" pada nomor telepon
        $input['telp'] = '+62' . substr($input['telp'], 0);
        
        Umkm::create($input);
      
        return redirect()->route('umkms.index')
                        ->with('success','Data UMKM berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Umkm $umkm)
    {
        //
        return view('dashboard_admin.umkm.show',compact('umkm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Umkm $umkm)
    {
        //
        return view('dashboard_admin.umkm.edit',compact('umkm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Umkm $umkm)
    {
        //
        $request->validate([
            'name' => 'required',
            'sector' => 'required',
            'telp' => 'required',
        ]);
   
        $input = $request->all();

        // Menghapus karakter "-" atau " " dari nomor telepon
        $input['telp'] = str_replace(['-', ' '], '', $input['telp']);

        // Menambahkan awalan "+62" pada nomor telepon
        $input['telp'] = '+62' . substr($input['telp'], 0);
           
        $umkm->update($input);
     
        return redirect()->route('umkms.index')
                        ->with('success','Data UMKM berhasi diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Umkm $umkm)
    {
        //
        $umkm->delete();
      
        return redirect()->route('umkms.index')
                        ->with('success','Data UMKM berhasi dihapus');
    }

    public function showUmkm()
    {
        $totalData = Umkm::count();
        
        return $totalData;
    }
}
