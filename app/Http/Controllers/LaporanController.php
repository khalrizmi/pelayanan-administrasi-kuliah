<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Pembayaran;
use App\Models\PembayaranItem;
use App\Models\Semester;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $semesters = Semester::all();
        $items = PembayaranItem::all();

        return view('laporan.index', compact('semesters', 'items'));
    }

    public function result(Request $request)
    {
        $semesters = Semester::all();
        $items = PembayaranItem::all();

        $semester = Semester::findOrFail($request->semester_id);
        $item = PembayaranItem::findOrFail($request->pembayaran_item_id);

        $mahasiswas = Mahasiswa::select(
            'mahasiswas.nim',
            'mahasiswas.nama',
            'pembayaran_items.nama as item_name',
            'pembayaran_items.harga',
            'pembayarans.pembayaran_item_id',
        )
            ->leftJoin('pembayarans', function ($join) use ($request) {
            $join->on('mahasiswas.id', '=', 'pembayarans.mahasiswa_id');
            $join->where('pembayarans.pembayaran_item_id', $request->pembayaran_item_id);
        })
            ->leftJoin('pembayaran_items', 'pembayarans.pembayaran_item_id', '=', 'pembayaran_items.id')
            ->where('mahasiswas.semester_id', $request->semester_id)
            ->get();

//        return $mahasiswas;

        return view('laporan.result', compact('mahasiswas', 'semesters', 'items', 'semester', 'item'));
    }
}
