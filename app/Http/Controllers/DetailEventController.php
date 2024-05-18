<?php

namespace App\Http\Controllers;

use App\Models\Booth;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DetailEventController extends Controller
{
    public function edit_event($id_event)
    {
        $event = Event::findOrFail($id_event);
        // dd($event);
        return view('Backend.event.edit_event', compact('event'));
    }

    public function update_event(Request $request, $id_event)
    {
        $event = Event::findOrFail($id_event);
        $event->tanggal_event = $request->input('tanggal_event');
        $event->tanggal_pendaftaran = $request->input('tanggal_pendaftaran');
        $event->tanggal_penutupan = $request->input('tanggal_penutupan');

        if ($request->hasFile('upload_pamflet')) {
            $folder = public_path('uploads/' . $event->id_event);
            if (File::exists($folder)) {
                File::delete($folder);
            }
            $file = $request->file('upload_pamflet');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($folder, $fileName);
            $event->upload_pamflet = $fileName;
        }
        $event->update();
        return redirect()->route('event_event');
    }
    public function edit_booth($id_booth)
    {
        $booth = Booth::findOrFail($id_booth);
        return view('Backend.event.edit_booth', compact('booth'));
    }

    public function update_booth(Request $request, $id_booth)
    {
        $booth = Booth::findOrFail($id_booth);
        $booth->tipe_booth = $request->input('tipe_booth');
        $booth->harga_booth = $request->input('harga_booth');
        $booth->jumlah_booth = $request->input('jumlah_booth');
        $booth->deskripsi_booth = $request->input('deskripsi_booth');

        if ($request->hasFile('upload_gambar_booth')) {
            $folder = public_path('uploads/' . $booth->id_event);
            if (File::exists($folder)) {
                File::delete($folder);
            }
            $file = $request->file('upload_gambar_booth');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($folder, $fileName);
            $booth->upload_gambar_booth = $fileName;
        }
        $booth->update();
        return redirect()->route('event');
    }

    public function destroy_booth($id_booth)
    {
        $booth = Booth::findOrFail($id_booth);
        $booth->delete();

        return redirect()->route('event.show', $booth->id_event)->with('success', 'Booth berhasil dihapus');
    }
    public function tambah_booth($id_event)
    {
        // Temukan event berdasarkan id_event
        $detail_event = Event::findOrFail($id_event);
        
        // Kirimkan data event ke halaman tambah booth
        return view('Backend.event.tambah_booth', compact('detail_event'));
    }
    
    // Metode untuk menyimpan booth baru
    public function booth_store(Request $request, $id_event)
    {

        // Buat booth baru
        $booth = new Booth();
        $booth->id_event = $request['id_event'];
        $booth->tipe_booth = $request['tipe_booth'];
        $booth->harga_booth = $request['harga_booth'];
        $booth->jumlah_booth = $request['jumlah_booth'];
        $booth->deskripsi_booth = $request['deskripsi_booth'];
        // Tambahkan field lainnya sesuai kebutuhan
        if ($request->hasFile('upload_gambar_booth')) {
            $image = $request->file('upload_gambar_booth');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/' . $id_event), $imageName);
            $booth->upload_gambar_booth = $imageName;
        }

        $booth->save();

        // Redirect kembali ke halaman detail event dengan pesan sukses
        return redirect()->route('event.show', ['id_event' => $id_event])->with('success', 'Booth berhasil ditambahkan');
    }
}