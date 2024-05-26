<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Booth;
use App\Models\Data;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unverifiedCount = Event::where('status', 'waiting')->count();
        $verifiedCount = Event::where('status', 'verified')->count();
        $totalCount = Event::count();
        $detail_event=Event::all();   
        return view ('Backend.admin_form.verifikasi_event',compact('detail_event', 'unverifiedCount', 'verifiedCount', 'totalCount' ));
        // return view('Backend.admin_form.admin');
    }

    public function show($id_event)
    {
        // $id_user = Auth::id();
        $detail_event = Event::findOrFail($id_event);
        $url = route('event.show', ['id_event' => $id_event]); // Mendapatkan URL route
        $qrCodes['simple'] = QrCode::size(150)->generate($url);
        $booths = Booth::where('id_event', $id_event)->get();
        return view('Backend.admin_form.detail', compact('detail_event', 'qrCodes', 'booths'));
    }

    public function verify($id_event){
    // Temukan user berdasarkan ID
    $detailevent = Event::findOrFail($id_event);
    $detailevent->status= 'verified';
    $detailevent->save();
    return redirect()->back()->with('succes','Event berhasil disetujui.');
    }

    public function unverify($id)
    {
    $detailevent = Event::findOrFail($id);
    $detailevent->status = 'unverified';
    $detailevent->save();
    return redirect()->back()->with('success', 'Event berhasil ditolak.');
    }
    


     //  public function data(){
    //     $data_tabel = Data::get();
    //     return view ('Backend.admin_form.data',[
    //      "data_tabel"=>$data_tabel
    //     ]);
    // }

    // public function akun(){
    //     $users = User::get();
    //     return view ('Backend.admin_form.verifikasi_akun',[
    //      "users"=>$users
    //     ]);
    // }

    // public function verifikasi_akun($id){
    // // Temukan user berdasarkan ID
    // $user = User::findOrFail($id);
    // if (!$user) {
    //     // jika user tidak ditemukan
    //     return redirect()->back()->with('error', 'User tidak ditemukan.');
    // }
    // $user->jabatan = 'pembuat';
    // $user->status_verifikasi = 'verified';
    // $user->save();
    // return redirect()->route('verifikasi_akun')->with('Akun berhasil disetujui.');
 
    // }

    
   
    public function destroy($id) {
    $event = Event::findOrFail($id);
    $event->delete();
    return redirect()->route('verifikasi_event.index')
        ->with('success', 'Event berhasil dihapus.');
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
   

    /**
     * Remove the specified resource from storage.
     */

     
  

}