<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ürünü Düzenle</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 min-h-screen flex items-center justify-center font-sans">

<div class="bg-white w-full max-w-4xl p-10 rounded-3xl shadow-2xl">

    <h2 class="text-4xl font-bold text-pink-700 text-center mb-6">Ürünü Düzenle</h2>

    <form method="POST" action="{{ route('kirtasiye.update', $urun->id) }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <input name="name" value="{{ $urun->name }}" placeholder="name"
               class="w-full px-4 py-3 border border-gray-300 rounded-xl" required>

        <input name="description" value="{{ $urun->description }}" placeholder="description"
               class="w-full px-4 py-3 border border-gray-300 rounded-xl" required>

        <input type="number" name="price" step="0.01" value="{{ $urun->price }}" placeholder="price"
               class="w-full px-4 py-3 border border-gray-300 rounded-xl" required>

        <div>
            <label class="block text-sm text-gray-500">Varsa yeni fotoğraf yükle:</label>
            <input type="file" name="image" class="w-full mt-2">
            @if ($urun->image)
                <img src="{{ asset('storage/' . $urun->image) }}" alt="Ürün Görseli" class="w-32 mt-4 rounded-xl">
            @endif
        </div>

        <button type="submit"
                class="w-full bg-blue-700 text-white py-3 rounded-xl hover:bg-blue-800 font-semibold">
            Kaydet
        </button>
    </form>

</div>

</body>
</html>
