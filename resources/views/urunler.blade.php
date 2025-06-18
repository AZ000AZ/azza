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

    @php
        $urunler = [
            ["ad" => "Kırtasiye Seti", "kategori" => "kirtasiye", "resim" => "kirtasiye-seti.jpg", "fiyat" => "89,90₺", "aciklama" => "Tüm araçlar bir arada."],
            ["ad" => "A4 Çizgili Defter", "kategori" => "defter", "resim" => "defter.jpg", "fiyat" => "19,99₺", "aciklama" => "120 yaprak spiralli."],
            ["ad" => "Sanatsal Kalem Seti", "kategori" => "sanat", "resim" => "sanatsal-kalem.jpg", "fiyat" => "59,90₺", "aciklama" => "Çizim kalemleri 12'li."],
            ["ad" => "Renkli Kalem Seti", "kategori" => "kalem", "resim" => "renkli-kalem.jpg", "fiyat" => "29,90₺", "aciklama" => "8'li tükenmez kalem."],
            ["ad" => "Mavi Jel Kalem", "kategori" => "kalem", "resim" => "mavi-jel-kalem.jpg", "fiyat" => "11,99₺", "aciklama" => "Akıcı ve net yazım."],
            ["ad" => "Kareli Defter", "kategori" => "defter", "resim" => "kareli-defter.jpg", "fiyat" => "14,50₺", "aciklama" => "A5 matematik defteri."],
            ["ad" => "Pastel Boya Seti", "kategori" => "sanat", "resim" => "pastel-boya.jpg", "fiyat" => "39,90₺", "aciklama" => "24'lü canlı renk."],
            ["ad" => "Stick Yapıştırıcı", "kategori" => "kirtasiye", "resim" => "stick-yapistirici.jpg", "fiyat" => "6,50₺", "aciklama" => "Okul için güvenli."],
            ["ad" => "Çelik Pergel", "kategori" => "kirtasiye", "resim" => "celik-pergel.jpg", "fiyat" => "34,90₺", "aciklama" => "Metal gövdeli pergel."],
            ["ad" => "Kalın Markör Seti", "kategori" => "kalem", "resim" => "markor-set.jpg", "fiyat" => "22,90₺", "aciklama" => "4 renk markör kalem."],
            ["ad" => "Sketch Defter", "kategori" => "sanat", "resim" => "sketch-defter.jpg", "fiyat" => "24,90₺", "aciklama" => "Sanatsal çizim defteri."],
            ["ad" => "Mini Çizim Seti", "kategori" => "sanat", "resim" => "mini-cizim-set.jpg", "fiyat" => "49,90₺", "aciklama" => "Çocuklar için çizim seti."],
            ["ad" => "Ürün 13", "kategori" => "kirtasiye", "resim" => "set2.jpg", "fiyat" => "36,90₺", "aciklama" => "Bu ürün açıklaması 13 numaralı ürün için."],
            ["ad" => "Ürün 14", "kategori" => "defter", "resim" => "sketch-defter.jpg", "fiyat" => "38,90₺", "aciklama" => "Bu ürün açıklaması 14 numaralı ürün için."],
            ["ad" => "Ürün 15", "kategori" => "kalem", "resim" => "set1.jpg", "fiyat" => "40,90₺", "aciklama" => "Bu ürün açıklaması 15 numaralı ürün için."],
            ["ad" => "Ürün 16", "kategori" => "sanat", "resim" => "set.jpg", "fiyat" => "42,90₺", "aciklama" => "Bu ürün açıklaması 16 numaralı ürün için."],
            ["ad" => "Ürün 17", "kategori" => "kirtasiye", "resim" => "pape.jpg", "fiyat" => "44,90₺", "aciklama" => "Bu ürün açıklaması 17 numaralı ürün için."],
            ["ad" => "Ürün 18", "kategori" => "defter", "resim" => "sanat.jpg", "fiyat" => "46,90₺", "aciklama" => "Bu ürün açıklaması 18 numaralı ürün için."],
            ["ad" => "Ürün 19", "kategori" => "kalem", "resim" => "sanatsal-kalem.jpg", "fiyat" => "48,90₺", "aciklama" => "Bu ürün açıklaması 19 numaralı ürün için."],
            ["ad" => "Ürün 20", "kategori" => "sanat", "resim" => "set3.jpg", "fiyat" => "50,90₺", "aciklama" => "Bu ürün açıklaması 20 numaralı ürün için."],
            ["ad" => "Ürün 21", "kategori" => "kirtasiye", "resim" => "planlayici-kalem.jpg", "fiyat" => "52,90₺", "aciklama" => "Bu ürün açıklaması 21 numaralı ürün için."],
            ["ad" => "Ürün 22", "kategori" => "defter", "resim" => "syloob-buyuk.jpg", "fiyat" => "54,90₺", "aciklama" => "Bu ürün açıklaması 22 numaralı ürün için."],
            ["ad" => "Ürün 23", "kategori" => "kalem", "resim" => "cetvel.jpg", "fiyat" => "56,90₺", "aciklama" => "Bu ürün açıklaması 23 numaralı ürün için."],
            ["ad" => "Ürün 24", "kategori" => "sanat", "resim" => "silgi.jpg", "fiyat" => "58,90₺", "aciklama" => "Bu ürün açıklaması 24 numaralı ürün için."]
        ];
    @endphp
    @foreach ($urunler as $urun)
        <div data-kategori="{{ $urun['kategori'] }}" class="bg-white rounded-xl shadow-md p-4 text-center hover:shadow-xl transition">
            <img src="{{ asset('img/' . $urun['resim']) }}" alt="{{ $urun['ad'] }}" class="w-full h-36 object-cover rounded mb-3">
            <h3 class="font-bold text-base mb-1">{{ $urun['ad'] }}</h3>
            <p class="text-sm text-gray-500 mb-2">{{ $urun['aciklama'] }}</p>
            <span class="text-blue-700 font-bold text-base block mb-2">{{ $urun['fiyat'] }}</span>

            <form action="/sepete-ekle" method="POST">
                @csrf
                <input type="hidden" name="urun" value="{{ $urun['ad'] }}">
                <input type="hidden" name="fiyat" value="{{ $urun['fiyat'] }}">
                <input type="hidden" name="resim" value="{{ $urun['resim'] }}">
                <button type="submit" class="mt-2 bg-green-600 text-white px-4 py-2 text-sm rounded hover:bg-green-700">
                    Sepete Ekle 🛒
                </button>
            </form>
        </div>
    @endforeach
</main>
</body>
</html>
