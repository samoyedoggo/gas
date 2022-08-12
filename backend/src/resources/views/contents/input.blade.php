<h1>input</h1>

<form action="/save" method="post">
    @csrf
    <title>プロジェクトヘルコム</title>
        {{-- <div>
            <textarea name="title" cols="30" rows="2"></textarea>
        </div> --}}
        <div>
            <textarea name="content" cols="30" rows="10"></textarea>
        </div>
        {{-- <div>
            <textarea name="image_url" cols="30" rows="2"></textarea>
        </div>
        <div>
            <textarea name="delete_flg" cols="30" rows="2"></textarea>
        </div> --}}
    <input type="submit" value="送信">
</form>
