@foreach ($items as $item)
    <hr>
    {{-- <p>{{$item['title']}}</p> --}}
    <p>{{$item['title']}}</p>
    <p>{{$item['content']}}</p>
    {{-- 下記を追記する --}}
    {{-- <a href="{{route('detial', ['content_id' => $item['id']])}}">詳細</a> --}}
    <a href="{{route('detail', ['content_id' => $item['id']])}}">詳細</a>
    <a href="{{route('edit', ['content_id' => $item['id']])}}">編集</a>
    <a href="{{route('input', ['content_id' => $item['id']])}}">送信フォーム</a>
@endforeach
