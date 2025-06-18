<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim Bilgileri</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 font-sans text-xl">

<header class="bg-blue-700 text-white py-6 shadow">
    <h1 class="text-4xl font-extrabold text-center tracking-wide">📚 Kırtasiye Dükkanı</h1>
</header>


<nav class="bg-white shadow-md py-5 flex justify-center space-x-10 text-2xl font-semibold">
    <a href="/anasayfa" class="text-blue-600 hover:text-blue-900 transition">Anasayfa</a>
    <a href="/giris" class="text-blue-600 hover:text-blue-900 transition">Giriş</a>
    <a href="/hakkimizda" class="text-blue-600 hover:text-blue-900 transition">Hakkımızda</a>
    <a href="/iletisimBilgileri" class="text-blue-900 border-b-4 border-blue-600 pb-1">İletişim</a>
</nav>

<main class="max-w-5xl mx-auto mt-14 p-10 bg-white rounded-xl shadow-lg">
    <h2 class="text-4xl font-bold mb-8 border-b-2 pb-4 border-blue-400">📞 İletişim Bilgilerimiz</h2>

    <div class="space-y-8 text-2xl">
        <div class="flex items-center space-x-5">
            <span class="text-blue-600 text-4xl">📱</span>
            <span>Telefon: <strong>+90 55555555555</strong></span>
        </div>
        <div class="flex items-center space-x-5">
            <span class="text-blue-600 text-4xl">📧</span>
            <span>E-posta: <strong>info@urfakirtasiye.com</strong></span>
        </div>
        <div class="flex items-center space-x-5">
            <span class="text-blue-600 text-4xl">📍</span>
            <span>Adres: <strong>888888 88888 88 88 </strong></span>
        </div>
    </div>

    <div class="mt-10">
        <iframe
            src="https://maps.google.com/maps?q=Devteyşti, Şanlıurfa&t=&z=15&ie=UTF8&iwloc=&output=embed"
            class="w-full h-[400px] border rounded-xl shadow"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>

</main>
</footer>

</body>
</html>
