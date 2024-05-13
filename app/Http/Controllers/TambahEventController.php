<?php

namespace App\Http\Controllers;

use App\Models\Booth;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TambahEventController extends Controller
{
    public function index()
    {
        return view('Backend.event.tambah_event');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $gambar_booth = $request->file('upload_gambar_booth');
        $id_user=auth()->user()->id;
        $event = Event::create($request->all());
        if ($request->hasFile('upload_ktp')) {
            $file = $request->file('upload_ktp');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move('ktp_event/', $fileName);
            $event->upload_ktp = $fileName;
        }

        if ($request->hasFile('upload_denah')) {
            $file = $request->file('upload_denah');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move('denah_event/', $fileName);
            $event->upload_denah = $fileName;
        }

        if ($request->hasFile('upload_pamflet')) {
            $file = $request->file('upload_pamflet');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move('pamflet_event/', $fileName);
            $event->upload_pamflet = $fileName;
        }

        $event->user_id = $id_user;
        $event->save();


        // Simpan data booth
        foreach ($request->tipe_booth as $key => $value) {
            $file = $gambar_booth[$key];
            $fileName = time() . $key . '_' . $file->getClientOriginalName();
            $file->move('foto_booth/', $fileName);
            Booth::insert([
                "tipe_booth" => $request->tipe_booth[$key],
                "harga_booth" => $request->harga_booth[$key],
                "jumlah_booth" => $request->jumlah_booth[$key],
                "deskripsi_booth" => $request->deskripsi_booth[$key],
                "upload_gambar_booth" => $fileName,
                "id_event" => $event->id_event
            ]);
            // $booth = new Booth();
            // $booth->tipe_booth = $boothData['tipe_booth'];
            // $booth->harga_booth = $boothData['harga_booth'];
            // $booth->jumlah_booth = $boothData['jumlah_booth'];
            // $booth->deskripsi_booth = $boothData['deskripsi_booth'] ?? null;

            // // Simpan file upload booth dengan waktu tersimpan dan nama aslinya
            // if ($boothData['upload_gambar_booth']->isValid()) {
            //     $uploadGambarBooth = $boothData['upload_gambar_booth'];
            //     $uploadGambarBoothName = time() . '_' . $uploadGambarBooth->getClientOriginalName();
            //     $uploadGambarBooth->move('foto_booth/', $uploadGambarBoothName);
            //     $booth->upload_gambar_booth = $uploadGambarBoothName;
            // }

            // $booth->event_id = $event->id_event;
            // $booth->save();
        }


        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('event');
    }
}