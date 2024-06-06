<?php

namespace App\Http\Controllers;

use App\Models\Booth;
use App\Models\Event;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TambahEventController extends Controller
{
    public function index()
    {
        // Membuat permintaan ke API listBank
        $response = Http::get('https://api-rekening.lfourr.com/listBank');

        // Memeriksa apakah permintaan berhasil
        if ($response->successful()) {
            // Mendapatkan data daftar bank dari respons JSON
            $responseData = $response->json();

            // Memeriksa apakah respons berisi data bank
            if (isset($responseData['data'])) {
                $banks = $responseData['data']; // Mengambil data bank dari kunci 'data'

                // Mengirimkan data ke view
                return view('Backend.event.tambah_event', compact('banks'));
            } else {
                return back()->withErrors('Data bank tidak tersedia dalam respons');
            }
        } else {
            // Jika permintaan gagal, tindakan yang sesuai (misalnya menampilkan pesan kesalahan)
            return back()->withErrors('Gagal mengambil daftar bank');
        }
    }
    public function store(Request $request)
    {
       // Simpan data event
       $event = Event::create($request->all());

       // Buat folder baru untuk event berdasarkan id_event
       $eventFolder = public_path('uploads/' . $event->id_event);
       if (!file_exists($eventFolder)) {
           mkdir($eventFolder, 0777, true);
       }

       // Simpan file upload untuk event
       if ($request->hasFile('upload_ktp')) {
           $file = $request->file('upload_ktp');
           $fileName = time() . '_' . $file->getClientOriginalName();
           $file->move($eventFolder, $fileName);
           $event->upload_ktp = 'uploads/'.$event->id_event .'/' .$fileName;
       }

       if ($request->hasFile('upload_denah')) {
           $file = $request->file('upload_denah');
           $fileName = time() . '_' . $file->getClientOriginalName();
           $file->move($eventFolder, $fileName);
           $event->upload_denah = 'uploads/'.$event->id_event .'/' .$fileName;
       }

       if ($request->hasFile('upload_pamflet')) {
           $file = $request->file('upload_pamflet');
           $fileName = time() . '_' . $file->getClientOriginalName();
           $file->move($eventFolder, $fileName);
           $event->upload_pamflet = 'uploads/'.$event->id_event .'/' .$fileName;
       }

       $event->save();

       // Simpan data booth
       foreach ($request->tipe_booth as $key => $value) {
           $file = $request->file('upload_gambar_booth')[$key];
           $fileName = time() . $key . '_' . $file->getClientOriginalName();
           $file->move($eventFolder, $fileName);

           Booth::create([
               "tipe_booth" => $request->tipe_booth[$key],
               "harga_booth" => $request->harga_booth[$key],
               "jumlah_booth" => $request->jumlah_booth[$key],
               "deskripsi_booth" => $request->deskripsi_booth[$key],
               "upload_gambar_booth" => 'uploads/'.$event->id_event .'/' .$fileName,
               "id_event" => $event->id_event
           ]);
       }

       // Redirect ke halaman dashboard setelah berhasil menyimpan
       return redirect()->route('event');
   }
}