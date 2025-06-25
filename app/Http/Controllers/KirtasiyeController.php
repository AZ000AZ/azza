<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kirtasiye;

class KirtasiyeController extends Controller
{
    public function create()
    {
        return view('getir');
    }
    public function destroy($id)
    {
        $urun = Kirtasiye::findOrFail($id);

        // varsa görseli sil
        if ($urun->image && \Storage::disk('public')->exists($urun->image)) {
            \Storage::disk('public')->delete($urun->image);
        }

        $urun->delete();

        return redirect()->route('urunler.index')->with('success', 'Ürün silindi.');
    }
    public function edit($id)
    {
        $urun = Kirtasiye::findOrFail($id);
        return view('duzenle', compact('urun'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $urun = Kirtasiye::findOrFail($id);

        if ($request->hasFile('image')) {
            // Eski resmi sil
            if ($urun->image && Storage::disk('public')->exists($urun->image)) {
                Storage::disk('public')->delete($urun->image);
            }

            $urun->image = $request->file('image')->store('images', 'public');
        }

        $urun->name = $request->name;
        $urun->description = $request->description;
        $urun->price = $request->price;
        $urun->save();

        return redirect()->route('urunler.index')->with('success', 'Ürün başarıyla güncellendi!');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Kirtasiye::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('kirtasiye.create')->with('success', 'Ürün başarıyla eklendi!');
    }
    public function index()
    {
        $urunler = Kirtasiye::all();  // modelden tüm ürünleri al
        return view('urunler', compact('urunler'));
    }

}
