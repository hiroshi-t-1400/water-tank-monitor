<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alpine.js 動作確認</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body>

        monitorのindex
        {{--@dd($datas)--}}
        @foreach ($datas as $value)
        <div>
            timestamp : {{ $value->timestamp }}
            data1 : {{ $value->data1 }}
            data2 : {{ $value->data2 }}
            data3 : {{ $value->data3 }}
            data4 : {{ $value->data4 }}
            average : {{ $value->average }}
        </div>
        @endforeach

<div x-data="{ count: 0 }">
    <button @click="count++">
        カウントを増やす
    </button>

    <p>現在のカウント: <span x-text="count"></span></p>
</div>

    </body>
</html>
