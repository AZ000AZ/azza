<!DOCTYPE html>
<html lang="tr">
<head>
    <title>GETİR</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        function togglePassword() {
            const pwd = document.getElementById("price");
            pwd.type = pwd.type === "password" ? "text" : "password";
        }
    </script>
</head>
<body class="bg-blue-50 min-h-screen flex items-center justify-center font-sans">

<div class="bg-white w-full max-w-5xl p-16 rounded-3xl shadow-2xl flex flex-col items-center space-y-8">

    <h2 class="text-5xl font-extrabold text-pink-700 text-center">ÜRÜN EKLE</h2>
    <p class="text-center text-gray-700 text-2xl max-w-5xl">
        ürünü veritabanına ekle
    </p>

    {{-- ✅ Başarı veya hata mesajı --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-6 py-4 rounded-xl w-full text-center">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="bg-red-100 text-red-800 px-6 py-4 rounded-xl w-full">
            <ul class="list-disc pl-6">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('kirtasiye.store') }}" enctype="multipart/form-data" class="w-full max-w-2xl space-y-6">
        @csrf

        <input name="name" placeholder="name" required
               class="w-full px-6 py-4 text-xl border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">

        <input name="description" placeholder="description" required
               class="w-full px-6 py-4 text-xl border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">

        <div class="relative">
            <input type="number" step="0.01" id="price" name="price" placeholder="price" required
                   class="w-full px-6 py-4 text-xl border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
            <span onclick="togglePassword()" class="absolute right-5 top-4 text-gray-500 cursor-pointer text-2xl">₺</span>
        </div>

        {{-- 📷 Fotoğraf yükleme alanı --}}
        <input type="file" name="image"
               class="w-full px-6 py-4 text-xl border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">

        <button type="submit"
                class="w-full bg-pink-600 hover:bg-blue-700 text-white py-4 rounded-xl text-xl font-bold transition">
            ekle
        </button>
    </form>

</div>

</body>
</html>
