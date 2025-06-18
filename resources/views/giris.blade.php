<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Giriş Yap</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        function togglePassword() {
            const pwd = document.getElementById("password");
            pwd.type = pwd.type === "password" ? "text" : "password";
        }
    </script>
</head>
<body class="bg-blue-50 min-h-screen flex items-center justify-center font-sans">

<div class="bg-white w-full max-w-5xl p-16 rounded-3xl shadow-2xl flex flex-col items-center space-y-8">

    <h2 class="text-5xl font-extrabold text-blue-700 text-center">Giriş Yap</h2>
    <p class="text-center text-gray-600 text-xl max-w-2xl">
        Devam etmek için hesabınızla giriş yapın ya da giriş yapmadan sayfaya göz atın.
    </p>

    <form method="POST" action="/giris" class="w-full max-w-2xl space-y-6">
        @csrf

        <input type="email" name="email" placeholder="E-Posta" required
               class="w-full px-6 py-4 text-xl border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">

        <div class="relative">
            <input type="password" name="password" id="password" placeholder="Şifre" required
                   class="w-full px-6 py-4 text-xl border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
            <span onclick="togglePassword()" class="absolute right-5 top-4 text-gray-500 cursor-pointer text-2xl">👁️</span>
        </div>

        <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-4 rounded-xl text-xl font-bold transition">
            Giriş Yap
        </button>
    </form>

    <div class="flex justify-between w-full max-w-2xl text-base text-blue-700">
        <a href="/sifremi-unuttum" class="hover:underline">Şifremi Unuttum</a>
        <a href="/kayit" class="hover:underline">Üye Ol</a>
    </div>

    <div class="text-center text-gray-400 text-lg">veya</div>

    <a href="/anasayfa"
       class="block w-full max-w-2xl text-center bg-gray-200 hover:bg-gray-300 text-gray-800 py-4 rounded-xl text-lg font-semibold">
        Giriş Yapmadan Devam Et 🚀
    </a>

</div>

</body>
</html>
