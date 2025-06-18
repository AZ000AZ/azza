<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Anasayfa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">


<header class="bg-blue-700 text-white py-6 shadow-md">
    <h1 class="text-4xl font-bold text-center tracking-wide">📚 Kırtasiye Dükkanı</h1>
</header>


<nav class="bg-white shadow-md py-4 flex justify-center gap-10 text-xl font-medium">
    <a href="/anasayfa" class="text-blue-700 border-b-4 border-blue-700 pb-1">Anasayfa</a>
    <a href="/hakkimizda" class="text-blue-600 hover:text-blue-800">Hakkımızda</a>
    <a href="/urunler" class="text-blue-600 hover:text-blue-800">Ürünler</a>
    <a href="/iletisimBilgileri" class="text-blue-600 hover:text-blue-800">İletişim</a>
</nav>


<section class="bg-white py-12 shadow-inner">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-10 px-6">
        <div class="flex-1 space-y-6">
            <h2 class="text-5xl font-extrabold text-blue-800">Her Şey Yazmakla Başlar ✏️</h2>
            <p class="text-2xl text-gray-700">
                Okul, ofis ve sanatsal ihtiyaçlarınız için en kaliteli ürünler burada!
            </p>
            <div class="flex gap-6 mt-6">
                <a href="/hakkimizda" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">Hakkımızda</a>
                <a href="/urunler" class="bg-gray-200 text-blue-700 px-6 py-3 rounded-lg hover:bg-gray-300 transition">Ürünleri İncele</a>
            </div>
        </div>
        <div class="flex-1">
            <img src="{{ asset('img/magaza1.jpg') }}" class="rounded-lg shadow-lg w-full h-80 object-cover" alt="Mağaza">
        </div>
    </div>
</section>


<section class="mt-16 max-w-6xl mx-auto px-6">
    <h3 class="text-3xl font-bold mb-6">📂 Kategoriler</h3>


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-8">


    <div class="bg-white rounded-lg shadow p-4 text-center">
            <img src="{{ asset('img/urunler.jpg') }}" class="h-40 mx-auto object-cover rounded" alt="Yazım Gereçleri">
            <h4 class="text-2xl mt-4 font-semibold">Yazım Gereçleri</h4>
        </div>

        <div class="bg-white rounded-lg shadow p-4 text-center">
            <img src="{{ asset('img/raflar.jpg') }}" class="h-40 mx-auto object-cover rounded" alt="Defter & Kağıt">
            <h4 class="text-2xl mt-4 font-semibold">Defter & Kağıt</h4>
        </div>

        <div class="bg-white rounded-lg shadow p-4 text-center">
            <img src="{{ asset('img/sanat.jpg') }}" class="h-40 mx-auto object-cover rounded" alt="Sanatsal Ürünler">
            <h4 class="text-2xl mt-4 font-semibold">Sanatsal Ürünler</h4>
        </div>

        <div class="bg-white rounded-lg shadow p-4 text-center">
            <img src="{{ asset('img/raflar.jpg') }}" class="h-40 mx-auto object-cover rounded" alt="Defter & Kağıt">
            <h4 class="text-2xl mt-4 font-semibold">Defter & Kağıt</h4>
        </div>
        <div class="bg-white rounded-lg shadow p-4 text-center">
            <img src="{{ asset('img/raflar.jpg') }}" class="h-40 mx-auto object-cover rounded" alt="Defter & Kağıt">
            <h4 class="text-2xl mt-4 font-semibold">Defter & Kağıt</h4>
        </div>

    </div>
</section>
<section class="mt-20 bg-gray-100 py-12">
    <div class="max-w-6xl mx-auto px-6">
        <h3 class="text-3xl font-bold mb-6">🛒 Öne Çıkan Ürünler</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <img src="{{ asset('img/kalem.jpg') }}" class="rounded shadow-md" alt="Kalem">
            <img src="{{ asset('img/defter.jpg') }}" class="rounded shadow-md" alt="Defter">
            <img src="{{ asset('img/makas.jpg') }}" class="rounded shadow-md" alt="Makas">
            <img src="{{ asset('img/set.jpg') }}" class="rounded shadow-md" alt="Kırtasiye Seti">
        </div>
    </div>
</section>


    </blockquote>
</section>
</footer>

</body>
</html>
