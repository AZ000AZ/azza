<?php

namespace App\Http\Controllers;

use App\Models\Kirtasiye;
use Illuminate\Http\Request;

class UrunlerController extends Controller
{
    public function index() {
        $data = Kirtasiye::all();
        return response()->json($data);
    }

    public function show($id) {
        $data = Kirtasiye::findOrFail($id);
        return response()->json($data);
    }

    public function store(Request $request) {
        $data = Kirtasiye::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
        ]);
        return response()->json($data, 201);
    }

    public function update(Request $request, $id) {
        $data = Kirtasiye::findOrFail($id);
        $data->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
        ]);
        return response()->json($data);
    }

    public function destroy($id) {
        $data = Kirtasiye::findOrFail($id);
        $data->delete();
        return response()->json(['message' => 'Silme işlemi başarılı']);
    }
}
