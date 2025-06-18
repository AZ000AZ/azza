<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Sepetim</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

<header class="bg-blue-700 text-white py-6 shadow-md text-center text-3xl font-bold">
    🛒 Sepetim
</header>

<div class="max-w-5xl mx-auto mt-10 px-6">
    @if(count($sepet) > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($sepet as $item)
                <div class="bg-white p-4 rounded-lg shadow-md text-center">
                    <img src="{{ asset('img/' . $item['resim']) }}" alt="{{ $item['ad'] }}" class="w-full h-36 object-cover rounded mb-2">
                    <h2 class="text-lg font-bold">{{ $item['ad'] }}</h2>
                    <p class="text-blue-700 font-semibold">{{ $item['fiyat'] }}</p>
                </div>
            @endforeach
        </div>
    @else
        <div class="bg-white p-6 rounded-lg shadow-md text-center text-xl">
            Sepetiniz şu anda boş 😢
        </div>
    @endif

    <div class="mt-10 text-center">
        <a href="/urunler" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Alışverişe Devam Et</a>
    </div>
</div>

</body>
</html>
