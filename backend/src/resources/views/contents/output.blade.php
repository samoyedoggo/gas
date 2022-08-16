@foreach ($items as $item)
    <hr>
    {{-- <p>{{$item['title']}}</p> --}}
        <p>{{$item['title']}}</p>
        <p>{{$item['content']}}</p>
        <img src="{{$item["image_url"]}}" class="card-img-top" alt="..."><br>
        <a href="{{route('detail', ['content_id' => $item['id']])}}">詳細</a>
        <a href="{{route('edit', ['content_id' => $item['id']])}}">編集</a>
    <form action="/article_delete/{{$item->id}}" method="POST">
        {{ csrf_field() }}
        <input type="submit" value="削除">
    </form>
        <a href="{{route('input', ['content_id' => $item['id']])}}">送信フォーム</a>
@endforeach
