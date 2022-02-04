<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Pembayaran;
use App\Models\PembayaranItem;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        $items = PembayaranItem::all();

        return view('pembayaran.index', compact('mahasiswas', 'items'));
    }

    public function pay(Request $request)
    {
        $check = Pembayaran::where([
            'mahasiswa_id' => $request->user_id,
            'pembayaran_item_id' => $request->pembayaran_item_id
        ])->count();

        $pembayaran = PembayaranItem::findOrFail($request->pembayaran_item_id);

        if ($check > 0) {
            $mahasiswa = Mahasiswa::findOrFail($request->user_id);
            return back()->withErrors(['msg' => $mahasiswa->nim . '-' . $mahasiswa->nama . ' sudah pernah membayar ' . $pembayaran->nama . '!']);
        }

        Pembayaran::query()->insert([
            'mahasiswa_id' => $request->user_id,
            'pembayaran_item_id' => $request->pembayaran_item_id
        ]);

        return redirect()->route('mahasiswa.show', $request->user_id);
    }
}
