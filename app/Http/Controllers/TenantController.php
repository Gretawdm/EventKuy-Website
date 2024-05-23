<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function semua()
    {
        // Ambil semua orders dengan status 'diterima' untuk user yang sedang login dan load relasi yang diperlukan
        $orders = Tenant::where('status_order', 'validasi')
            ->with(['user', 'booth.event'])
            ->get();

        // Transformasi data order menjadi bentuk yang diinginkan
        $results = $orders->map(function ($order) {
            return [
                'nama_perusahaan' => $order->user->nama_perusahaan,
                'nama_lengkap' => $order->user->nama_lengkap,
                'deskripsi_perusahaan' => $order->user->deskripsi_perusahaan,
                'alamat_perusahaan' => $order->user->alamat_perusahaan,
                'id_order' => $order->id_order,
                'tgl_order' => $order->tgl_order,
                'nomor_booth' => $order->nomor_booth,
                'tipe_booth' => $order->booth->tipe_booth,
                'nama_event' => $order->booth->event->nama_event,
            ];
        });
        return view('Backend.tenan.semua', ['results' => $results]);
    }
    public function verifikasi($id_order)
    {
        // Temukan user berdasarkan ID
        $detailorder = Tenant::findOrFail($id_order);
        $detailorder->status_order = 'terverifikasi';
        $detailorder->save();
        return redirect()->back()->with('succes', 'Tenant berhasil diverifikasi.');
    }

    public function terima($id_order)
    {
        // Temukan user berdasarkan ID
        $detailorder = Tenant::findOrFail($id_order);
        $detailorder->status_order = 'diterima';
        $detailorder->save();
        return redirect()->back()->with('succes', 'Tenant berhasil disetujui.');
    }
    public function tolak($id_order)
    {
        // Temukan user berdasarkan ID
        $detailorder = Tenant::findOrFail($id_order);
        $detailorder->status_order = 'ditolak';
        $detailorder->save();
        return redirect()->back()->with('succes', 'Tenant berhasil ditolak.');
    }
    public function diterima()
    {
        // Ambil semua orders dengan status 'diterima' untuk user yang sedang login dan load relasi yang diperlukan
        $orders = Tenant::where('status_order', 'diterima')
            ->with(['user', 'booth.event'])
            ->get();

        // Transformasi data order menjadi bentuk yang diinginkan
        $results = $orders->map(function ($order) {
            return [
                'nama_perusahaan' => $order->user->nama_perusahaan,
                'nama_lengkap' => $order->user->nama_lengkap,
                'deskripsi_perusahaan' => $order->user->deskripsi_perusahaan,
                'alamat_perusahaan' => $order->user->alamat_perusahaan,
                'id_order' => $order->id_order,
                'tgl_order' => $order->tgl_order,
                'nomor_booth' => $order->nomor_booth,
                'tipe_booth' => $order->booth->tipe_booth,
                'nama_event' => $order->booth->event->nama_event,
            ];
        });

        // Return view dengan data yang sudah diolah
        return view('Backend.tenan.diterima', ['results' => $results]);
    }

    public function ditolak()
    {
        // Ambil semua orders dengan status 'diterima' untuk user yang sedang login dan load relasi yang diperlukan
        $orders = Tenant::where('status_order', 'ditolak')
            ->with(['user', 'booth.event'])
            ->get();

        // Transformasi data order menjadi bentuk yang diinginkan
        $results = $orders->map(function ($order) {
            return [
                'nama_perusahaan' => $order->user->nama_perusahaan,
                'nama_lengkap' => $order->user->nama_lengkap,
                'deskripsi_perusahaan' => $order->user->deskripsi_perusahaan,
                'alamat_perusahaan' => $order->user->alamat_perusahaan,
                'id_order' => $order->id_order,
                'tgl_order' => $order->tgl_order,
                'nomor_booth' => $order->nomor_booth,
                'tipe_booth' => $order->booth->tipe_booth,
                'nama_event' => $order->booth->event->nama_event,
            ];
        });

        // Return view dengan data yang sudah diolah
        return view('Backend.tenan.ditolak', ['results' => $results]);
    }
    public function menunggu_pembayaran()
    {
        // Ambil semua orders dengan status 'diterima' untuk user yang sedang login dan load relasi yang diperlukan
        $orders = Tenant::where('status_order', 'menunggu pembayaran')
            ->with(['user', 'booth.event'])
            ->get();

        // Transformasi data order menjadi bentuk yang diinginkan
        $results = $orders->map(function ($order) {
            return [
                'nama_perusahaan' => $order->user->nama_perusahaan,
                'nama_lengkap' => $order->user->nama_lengkap,
                'deskripsi_perusahaan' => $order->user->deskripsi_perusahaan,
                'alamat_perusahaan' => $order->user->alamat_perusahaan,
                'id_order' => $order->id_order,
                'tgl_order' => $order->tgl_order,
                'nomor_booth' => $order->nomor_booth,
                'tipe_booth' => $order->booth->tipe_booth,
                'nama_event' => $order->booth->event->nama_event,
            ];
        });

        // Return view dengan data yang sudah diolah
        return view('Backend.tenan.menunggu_pembayaran', ['results' => $results]);
    }
    public function terverifikasi()
    {
        // Ambil semua orders dengan status 'diterima' untuk user yang sedang login dan load relasi yang diperlukan
        $orders = Tenant::where('status_order', 'terverifikasi')
            ->with(['user', 'booth.event'])
            ->get();

        // Transformasi data order menjadi bentuk yang diinginkan
        $results = $orders->map(function ($order) {
            return [
                'nama_perusahaan' => $order->user->nama_perusahaan,
                'nama_lengkap' => $order->user->nama_lengkap,
                'deskripsi_perusahaan' => $order->user->deskripsi_perusahaan,
                'alamat_perusahaan' => $order->user->alamat_perusahaan,
                'id_order' => $order->id_order,
                'tgl_order' => $order->tgl_order,
                'nomor_booth' => $order->nomor_booth,
                'tipe_booth' => $order->booth->tipe_booth,
                'nama_event' => $order->booth->event->nama_event,
            ];
        });

        // Return view dengan data yang sudah diolah
        return view('Backend.tenan.terverifikasi', ['results' => $results]);
    }
}