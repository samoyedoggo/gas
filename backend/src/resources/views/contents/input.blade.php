<h1>input</h1>

<form action="/save" method="post">
    @csrf
    <title>プロジェクトヘルコム</title>
        <div>
            <label for="name">タイトル</label><br>
            <input type="text" id="name" name="title" placeholder="タイトル入力"><br>
            {{-- <textarea type="text" id="fname" name="title" placeholder="タイトル入力"></textarea> --}}
        </div>
        <div>
            <textarea name="content" cols="30" rows="10" placeholder="内容の入力"></textarea>
        </div>
    <input type="submit" value="送信">
</form>
