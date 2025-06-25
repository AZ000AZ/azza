<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ürünler</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        function filtreleKategori(kategori) {
            const kartlar = document.querySelectorAll('[data-kategori]');
            kartlar.forEach(kart => {
                if (kategori === 'hepsi' || kart.dataset.kategori === kategori) {
                    kart.classList.remove('hidden');
                } else {
                    kart.classList.add('hidden');
                }
            });
        }
    </script>
</head>
<body class="bg-gray-50 font-sans">

<!-- Başlık -->
<header class="bg-blue-700 text-white py-6 shadow-md">
    <h1 class="text-4xl font-bold text-center">📦 Ürünler</h1>
</header>

<!-- Başarı mesajı -->
@if(session('success'))
    <div class="bg-green-100 text-green-800 text-center py-4">
        {{ session('success') }}
    </div>
@endif

<!-- Filtreleme -->
<section class="max-w-7xl mx-auto mt-8 px-6">
    <div class="flex flex-wrap gap-4 justify-center">
        <button onclick="filtreleKategori('hepsi')" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">Hepsi</button>
        <button onclick="filtreleKategori('kirtasiye')" class="bg-gray-200 px-5 py-2 rounded hover:bg-gray-300">Kırtasiye</button>
        <button onclick="filtreleKategori('defter')" class="bg-gray-200 px-5 py-2 rounded hover:bg-gray-300">Defter</button>
        <button onclick="filtreleKategori('sanat')" class="bg-gray-200 px-5 py-2 rounded hover:bg-gray-300">Sanatsal</button>
        <button onclick="filtreleKategori('kalem')" class="bg-gray-200 px-5 py-2 rounded hover:bg-gray-300">Kalem</button>
    </div>
</section>

<!-- Ürün Listesi -->
<main class="w-full px-6 py-10 grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 bg-gray-50">

    @foreach ($urunler as $urun)
        <div data-kategori="{{ $urun->kategori }}" class="bg-white rounded-xl shadow-md p-4 text-center hover:shadow-xl transition">
            <img src="{{ asset('storage/' . $urun->image) }}" alt="{{ $urun->name }}" class="w-full h-36 object-cover rounded mb-3">
            <h3 class="font-bold text-base mb-1">{{ $urun->name }}</h3>
            <p class="text-sm text-gray-500 mb-2">{{ $urun->description }}</p>
            <span class="text-blue-700 font-bold text-base block mb-2">{{ $urun->price }} ₺</span>

            <!-- Sepete ekle -->
            <form action="/sepete-ekle" method="POST" class="mb-2">
                @csrf
                <input type="hidden" name="name" value="{{ $urun->name }}">
                <input type="hidden" name="description" value="{{ $urun->description }}">
                <input type="hidden" name="price" value="{{ $urun->price }}">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 text-sm rounded hover:bg-green-700">
                    Sepete Ekle 🛒
                </button>
            </form>

            <!-- Sil -->
            <form action="{{ route('kirtasiye.destroy', $urun->id) }}" method="POST" onsubmit="return confirm('Emin misin usta?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 text-white px-4 py-2 text-sm rounded hover:bg-red-700">
                    Sil 🗑️
                </button>
            </form>
            <a href="{{ route('kirtasiye.edit', $urun->id) }}"
               class="inline-block mt-2 bg-yellow-500 text-white px-4 py-2 text-sm rounded hover:bg-yellow-600">
                Düzenle ✏️
            </a>

        </div>
    @endforeach

</main>
</body>
</html>
