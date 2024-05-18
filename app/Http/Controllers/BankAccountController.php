<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class BankAccountController extends Controller
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
                return view('bank', compact('banks'));
            } else {
                return back()->withErrors('Data bank tidak tersedia dalam respons');
            }
        } else {
            // Jika permintaan gagal, tindakan yang sesuai (misalnya menampilkan pesan kesalahan)
            return back()->withErrors('Gagal mengambil daftar bank');
        }
    }

    public function getBankDetails(Request $request)
    {
        $accountNumber = $request->input('accountNumber');
        $bankCode = $request->input('bank');

        $url = "https://api-rekening.lfourr.com/getBankAccount";
        $response = Http::get($url, [
            'bankCode' => $bankCode,
            'accountNumber' => $accountNumber,
        ]);

        // Log the entire response for debugging
        Log::info('API Response:', ['response' => $response->body()]);

        if ($response->successful()) {
            $data = $response->json();
            if (isset($data['data']) && isset($data['data']['bankname']) && isset($data['data']['accountname'])) {
                return response()->json([
                    'bankName' => $data['data']['bankname'],
                    'accountHolder' => $data['data']['accountname'],
                ]);
            } else {
                return response()->json(['error' => 'Data tidak lengkap dari API'], 500);
            }
        } else {
            return response()->json(['error' => 'Gagal mengambil detail rekening'], 500);
        }
    }
}