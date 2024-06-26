<?php

namespace App\Http\Controllers;

use App\Mail\OrderAccepted;
use App\Mail\OrderTolak;
use App\Mail\OrderVerifikasi;
use App\Models\Tenant;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class TenantController extends Controller
{
    public function detail($orderId)
    {
        // Temukan order berdasarkan ID order
        $orders_detail = Tenant::with(['user', 'booth.event'])->findOrFail($orderId);
        return view('backend.tenan.detail', compact('orders_detail'));
    }
    public function detailTerima($orderId)
    {
        // Temukan order berdasarkan ID order
        $orders_detail = Tenant::with(['user', 'booth.event'])->findOrFail($orderId);
        return view('backend.tenan.detailterima', compact('orders_detail'));
    }
    public function detailTolak($orderId)
    {
        // Temukan order berdasarkan ID order
        $orders_detail = Tenant::with(['user', 'booth.event'])->findOrFail($orderId);
        return view('backend.tenan.detailtolak', compact('orders_detail'));
    }
    public function detailMenungguPembayaran($orderId)
    {
        // Temukan order berdasarkan ID order
        $orders_detail = Tenant::with(['user', 'booth.event'])->findOrFail($orderId);
        return view('backend.tenan.detailtunggu', compact('orders_detail'));
    }
    public function detailVerifikasi($orderId)
    {
        // Temukan order berdasarkan ID order
        $orders_detail = Tenant::with(['user', 'booth.event'])->findOrFail($orderId);
        return view('backend.tenan.detaildone', compact('orders_detail'));
    }

    public function index()
    {
        $id_user = auth()->user()->id;
        $detail_event = Event::where('user_id', $id_user)->get();
        return view('backend.tenan.all', compact('detail_event'));
    }


    public function semua($eventId)
    {
        // Temukan event berdasarkan ID
        $event = Event::findOrFail($eventId);

        $order = Tenant::whereHas('booth', function ($query) use ($event) {
            $query->where('id_event', $event->id_event);
        })->with('user')->get();

        // Ambil semua pesanan booth yang terkait dengan event ini dan muat pengguna terkait
        $orders = Tenant::whereHas('booth', function ($query) use ($event) {
            $query->where('id_event', $event->id_event);
        })->where('status_order', 'validasi')
            ->with('user')
            ->get();
        // Hitung jumlah orders berdasarkan status
        $allOrdersCount = $order->where('status_order', 'validasi')->count();
        $acceptedOrdersCount = $order->where('status_order', 'diterima')->count();
        $rejectedOrdersCount = $order->where('status_order', 'ditolak')->count();
        $pendingPaymentOrdersCount = $order->where('status_order', 'menunggu pembayaran')->count();
        $verifiedOrdersCount = $order->where('status_order', 'terverifikasi')->count();

        return view(
            'Backend.tenan.semua',
            compact(
                'event',
                'order',
                'allOrdersCount',
                'acceptedOrdersCount',
                'rejectedOrdersCount',
                'pendingPaymentOrdersCount',
                'verifiedOrdersCount',
                'orders'
            )
        );
    }
    public function verifikasi(Request $request, $id_order)
    {
        // Set timezone default untuk PHP
        date_default_timezone_set('Asia/Jakarta'); // Atur timezone sesuai dengan lokasi Anda
        // Temukan pesanan berdasarkan ID
        $order = Tenant::findOrFail($id_order);

        // Lakukan validasi atau operasi lain yang diperlukan
        $order->status_order = 'terverifikasi'; // Update status pemesanan menjadi 'terverifikasi'
        // Tambahkan tanggal verifikasi dengan waktu saat ini
        $order->tgl_verifikasi = Carbon::now();
        $order->save();

        // Mengirim email ke pelanggan
        Mail::to($order->user->email)->send(new OrderVerifikasi($order));

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Pemesanan telah disetujui.');
    }

    public function terima(Request $request, $id_order)
    {
        // Set timezone default untuk PHP
        date_default_timezone_set('Asia/Jakarta'); // Atur timezone sesuai dengan lokasi Anda
        // Temukan pesanan berdasarkan ID
        $order = Tenant::findOrFail($id_order);

        // Lakukan validasi atau operasi lain yang diperlukan
        $order->status_order = 'diterima'; // Update status pemesanan menjadi 'diterima'
        // Tambahkan tanggal verifikasi dengan waktu saat ini
        $order->tgl_diterima = Carbon::now();
        $order->save();

        // Mengirim email ke pelanggan
        Mail::to($order->user->email)->send(new OrderAccepted($order));

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Pemesanan telah disetujui.');
    }

    public function tolak(Request $request, $id_order)
    {
        // Set timezone default untuk PHP
        date_default_timezone_set('Asia/Jakarta'); // Atur timezone sesuai dengan lokasi Anda
        // Temukan pesanan berdasarkan ID
        $order = Tenant::findOrFail($id_order);

        // Lakukan validasi atau operasi lain yang diperlukan
        $order->status_order = 'ditolak'; // Update status pemesanan menjadi 'ditolak'
        // Tambahkan tanggal verifikasi dengan waktu saat ini
        $order->tgl_ditolak = Carbon::now();
        $order->save();

         // Mengirim email ke pelanggan
         Mail::to($order->user->email)->send(new OrderTolak($order));

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Pemesanan telah ditolak.');
    }
    public function diterima($eventId)
    {
        // Temukan event berdasarkan ID
        $event = Event::findOrFail($eventId);

        $order = Tenant::whereHas('booth', function ($query) use ($event) {
            $query->where('id_event', $event->id_event);
        })->with('user')->get();

        // Ambil semua pesanan booth yang terkait dengan event ini dan muat pengguna terkait
        $orders = Tenant::whereHas('booth', function ($query) use ($event) {
            $query->where('id_event', $event->id_event);
        })->where('status_order', 'diterima')
            ->with('user')
            ->get();
        // Hitung jumlah orders berdasarkan status
        $allOrdersCount = $order->where('status_order', 'validasi')->count();
        $acceptedOrdersCount = $order->where('status_order', 'diterima')->count();
        $rejectedOrdersCount = $order->where('status_order', 'ditolak')->count();
        $pendingPaymentOrdersCount = $order->where('status_order', 'menunggu pembayaran')->count();
        $verifiedOrdersCount = $order->where('status_order', 'terverifikasi')->count();

        return view(
            'Backend.tenan.diterima',
            compact(
                'event',
                'order',
                'allOrdersCount',
                'acceptedOrdersCount',
                'rejectedOrdersCount',
                'pendingPaymentOrdersCount',
                'verifiedOrdersCount',
                'orders'
            )
        );
    }

    public function ditolak($eventId)
    {
        // Temukan event berdasarkan ID
        $event = Event::findOrFail($eventId);

        $order = Tenant::whereHas('booth', function ($query) use ($event) {
            $query->where('id_event', $event->id_event);
        })->with('user')->get();

        // Ambil semua pesanan booth yang terkait dengan event ini dan muat pengguna terkait
        $orders = Tenant::whereHas('booth', function ($query) use ($event) {
            $query->where('id_event', $event->id_event);
        })->where('status_order', 'ditolak')
            ->with('user')
            ->get();
        // Hitung jumlah orders berdasarkan status
        $allOrdersCount = $order->where('status_order', 'validasi')->count();
        $acceptedOrdersCount = $order->where('status_order', 'diterima')->count();
        $rejectedOrdersCount = $order->where('status_order', 'ditolak')->count();
        $pendingPaymentOrdersCount = $order->where('status_order', 'menunggu pembayaran')->count();
        $verifiedOrdersCount = $order->where('status_order', 'terverifikasi')->count();

        return view(
            'Backend.tenan.ditolak',
            compact(
                'event',
                'order',
                'allOrdersCount',
                'acceptedOrdersCount',
                'rejectedOrdersCount',
                'pendingPaymentOrdersCount',
                'verifiedOrdersCount',
                'orders'
            )
        );
    }

    public function menunggu_pembayaran($eventId)
    {
        // Temukan event berdasarkan ID
        $event = Event::findOrFail($eventId);

        $order = Tenant::whereHas('booth', function ($query) use ($event) {
            $query->where('id_event', $event->id_event);
        })->with('user')->get();

        // Ambil semua orders dengan status 'diterima' untuk user yang sedang login dan load relasi yang diperlukan
        $orders = Tenant::where('status_order', 'menunggu pembayaran')
            ->with(['user', 'booth.event'])
            ->get();

        // Ambil semua pesanan booth yang terkait dengan event ini dan muat pengguna terkait
        $orders = Tenant::whereHas('booth', function ($query) use ($event) {
            $query->where('id_event', $event->id_event);
        })->where('status_order', 'menunggu pembayaran')
            ->with('user')
            ->get();

        // Hitung jumlah orders berdasarkan status
        $allOrdersCount = $order->where('status_order', 'validasi')->count();
        $acceptedOrdersCount = $order->where('status_order', 'diterima')->count();
        $rejectedOrdersCount = $order->where('status_order', 'ditolak')->count();
        $pendingPaymentOrdersCount = $order->where('status_order', 'menunggu pembayaran')->count();
        $verifiedOrdersCount = $order->where('status_order', 'terverifikasi')->count();

        // Return view dengan data yang sudah diolah
        return view(
            'Backend.tenan.menunggu_pembayaran',
            compact(
                'event',
                'order',
                'allOrdersCount',
                'acceptedOrdersCount',
                'rejectedOrdersCount',
                'pendingPaymentOrdersCount',
                'verifiedOrdersCount',
                'orders'
            )
        );
    }
    public function terverifikasi($eventId)
    {
        // Temukan event berdasarkan ID
        $event = Event::findOrFail($eventId);

        $order = Tenant::whereHas('booth', function ($query) use ($event) {
            $query->where('id_event', $event->id_event);
        })->with('user')->get();

        // Ambil semua orders dengan status 'diterima' untuk user yang sedang login dan load relasi yang diperlukan
        $orders = Tenant::where('status_order', 'terverifikasi')
            ->with(['user', 'booth.event'])
            ->get();

        // Ambil semua pesanan booth yang terkait dengan event ini dan muat pengguna terkait
        $orders = Tenant::whereHas('booth', function ($query) use ($event) {
            $query->where('id_event', $event->id_event);
        })->where('status_order', 'terverifikasi')
            ->with('user')
            ->get();

        // Hitung jumlah orders berdasarkan status
        $allOrdersCount = $order->where('status_order', 'validasi')->count();
        $acceptedOrdersCount = $order->where('status_order', 'diterima')->count();
        $rejectedOrdersCount = $order->where('status_order', 'ditolak')->count();
        $pendingPaymentOrdersCount = $order->where('status_order', 'menunggu pembayaran')->count();
        $verifiedOrdersCount = $order->where('status_order', 'terverifikasi')->count();

        // Return view dengan data yang sudah diolah
        return view(
            'Backend.tenan.terverifikasi',
            compact(
                'event',
                'order',
                'allOrdersCount',
                'acceptedOrdersCount',
                'rejectedOrdersCount',
                'pendingPaymentOrdersCount',
                'verifiedOrdersCount',
                'orders'
            )
        );
    }
}