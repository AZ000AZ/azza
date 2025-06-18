<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Hakkımızda</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-600 text-gray-800 font-sans text-xl">
<header class="bg-blue-700 text-white py-6 shadow">
    <h1 class="text-4xl font-extrabold text-center tracking-wide">📚 Kırtasiye Dükkanı</h1>
</header>
<nav class="bg-white shadow-md py-5 flex justify-center space-x-10 text-2xl font-semibold">
    <a href="/anasayfa" class="text-blue-600 hover:text-blue-900 transition">Anasayfa</a>
    <a href="/giris" class="text-blue-600 hover:text-blue-900 transition">Giriş</a>
    <a href="/hakkimizda" class="text-blue-900 border-b-4 border-blue-600 pb-1">Hakkımızda</a>
    <a href="/iletisimBilgileri" class="text-blue-600 hover:text-blue-900 transition">İletişim</a>
</nav>

<main class="max-w-5xl mx-auto mt-14 p-10 bg-white rounded-xl shadow-lg">
    <h2 class="text-4xl font-bold mb-8 border-b-2 pb-4 border-blue-400">🧾 Hakkımızda</h2>

    <section class="space-y-6 text-2xl leading-relaxed">
        <p>
            Kırtasiye Dükkanı olarak 2010 yılından bu yana Şanlıurfa’nın kalbinde hizmet vermekteyiz. Eğitim ve ofis ihtiyaçlarını karşılamak için kaliteli, uygun fiyatlı ve çeşitli ürün yelpazesi sunuyoruz.
        </p>
        <p>
    </section>
    <section class="mt-16">
        <h3 class="text-3xl font-semibold mb-6">⏰ Çalışma Saatlerimiz</h3>
        <div class="bg-gray-100 p-6 rounded-lg border border-blue-200 shadow-sm">
            <ul class="space-y-2 text-xl">
                <li><strong>Pazartesi - Cuma:</strong> 09:00 - 19:00</li>
                <li><strong>Cumartesi:</strong> 10:00 - 17:00</li>
                <li><strong>Pazar:</strong> Kapalı</li>
            </ul>
        </div>
    </section>
    <section class="mt-16">
        <h3 class="text-3xl font-semibold mb-6">📸 Mağazamızdan Kareler</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <img src="{{ asset('img/magaza1.jpg') }}" alt="Mağaza içi" class="rounded-lg shadow-md w-full h-64 object-cover">
            <img src="{{ asset('img/raflar.jpg') }}" alt="Raflar" class="rounded-lg shadow-md w-full h-64 object-cover">
            <img src="{{ asset('img/urunler.jpg') }}" alt="Ürünler" class="rounded-lg shadow-md w-full h-64 object-cover">
        </div>
    </section>
</main>


</footer>

</body>
</html>
