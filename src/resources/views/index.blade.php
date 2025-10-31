<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alpine.js 動作確認</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100 p-8">

    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-xl mt-10">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">
            Alpine.js 動作確認エリア
        </h1>

        <div x-data="{ count: 0 }" class="space-y-4 p-4 border border-gray-200 rounded-md">

            <p class="text-lg">
                現在のカウント:
                <span x-text="count" class="font-extrabold text-red-600 text-3xl"></span>
            </p>

            <button
                @click="count++"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-150 ease-in-out shadow-md"
            >
                カウントを増やす (+1)
            </button>

            <button
                @click="count = 0"
                class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded transition duration-150 ease-in-out shadow-md"
            >
                リセット
            </button>
        </div>
        <p class="mt-4 text-sm text-gray-500">
            ボタンを押すと、「現在のカウント」の数字がリアルタイムで変化すれば成功です。
        </p>
    </div>

</body>
</html>
