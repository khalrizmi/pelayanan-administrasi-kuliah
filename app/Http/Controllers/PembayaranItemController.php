<?php

namespace App\Http\Controllers;

use App\Models\PembayaranItem;
use Illuminate\Http\Request;

class PembayaranItemController extends Controller
{
    public function index()
    {
        $items = PembayaranItem::all();

        return view('pembayaran_item.index', compact('items'));
    }

    public function create()
    {
        return view('pembayaran_item.create');
    }

    public function store(Request $request)
    {
        PembayaranItem::query()->create([
            'nama' => $request->nama,
            'harga' => $request->harga
        ]);

        return redirect()->route('pembayaran_item.index');
    }

    public function edit($id)
    {
        $item = PembayaranItem::findOrFail($id);
        return view('pembayaran_item.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = PembayaranItem::findOrFail($id);
        $item->update([
            'nama' => $request->nama,
            'harga' => $request->harga
        ]);

        return redirect()->route('pembayaran_item.index');
    }
}
