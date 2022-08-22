<x-app-layout>
    <a href="https://twitter.com/HELCOM_kousiki">最新情報</a>
    <!-- スマホ時は横スクロールできるように -->
    <nav class="sickness navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <ul class="nav nav-tabs bg-dark">
    <li class="nav-item">
        <a href="#depress" class="nav-link active text-light" data-bs-toggle="tab">うつ病</a>
    </li>
    <li class="nav-item">
        <a href="#manic" class="nav-link text-light" data-bs-toggle="tab">躁うつ病</a>
    </li>
    <li class="nav-item">
        <a href="#schizo" class="nav-link text-light" data-bs-toggle="tab">統合失調症</a>
    </li>
    <li class="nav-item">
        <a href="#adhd" class="nav-link text-light" data-bs-toggle="tab">ADHD</a>
    </li>
    <li class="nav-item">
        <a href="#schizo" class="nav-link text-light" data-bs-toggle="tab">ASD</a>
    </li>
    <li class="nav-item">
        <a href="#schizo" class="nav-link text-light" data-bs-toggle="tab">精神障碍</a>
    </li>
    <li class="nav-item">
        <a href="#schizo" class="nav-link text-light" data-bs-toggle="tab">発達障害</a>
    </li>
    <li class="nav-item">
        <a href="#schizo" class="nav-link text-light" data-bs-toggle="tab">その他</a>
    </li>
    </ul>
    <form class="d-flex pull-right">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </nav>

    <div class="tab-content">
        <div id="depress" class="tab-pane active">
    <div class="kiji">
        @foreach ($items as $item)
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <img class="card-img-top" src="{{$item["image_url"]}}" alt="..."><br>
                    <h5 class="card-title">{{$item['title']}}</h5>
                    <p class="card-text">{{$item['content']}}</p>
                    <p class="card-text"><small class="text-muted">{{$item['updated_at']}}</small></p>
                    {{-- <a href="{{route('detail', ['content_id' => $item['id']])}}">詳細</a> --}}
                    {{-- <a href="{{route('edit', ['content_id' => $item['id']])}}">編集</a>
                    <form action="/article_delete/{{$item->id}}" method="POST">
                        {{ csrf_field() }}
                        <input type="submit" value="削除">
                        <a href="{{route('input', ['content_id' => $item['id']])}}">送信フォーム</a> --}}
                    {{-- </form> --}}
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img class="card-img-top" src="{{$item["image_url"]}}" alt="..."><br>
                    <h5 class="card-title">{{$item['title']}}</h5>
                    <p class="card-text">{{$item['content']}}</p>
                    <p class="card-text"><small class="text-muted">{{$item['updated_at']}}</small></p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img class="card-img-top" src="{{$item["image_url"]}}" alt="..."><br>
                    <h5 class="card-title">{{$item['title']}}</h5>
                    <p class="card-text">{{$item['content']}}</p>
                    <p class="card-text"><small class="text-muted">{{$item['updated_at']}}</small></p>
                </div>
            </div>
        </div>
        @endforeach
        {{-- <div class="card">
            <img src="https://www.ncnp.go.jp/common/cms/images/NCNP_og_image.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">信頼できる医療機関シリーズ！第一弾</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="https://www.ncnp.go.jp/common/cms/images/NCNP_og_image.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">信頼できる医療機関シリーズ！第一弾</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        </div>

        <div class="card-group">
        <div class="card">
            <img src="https://www.ncnp.go.jp/common/cms/images/NCNP_og_image.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">信頼できる医療機関シリーズ！第一弾</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="https://www.ncnp.go.jp/common/cms/images/NCNP_og_image.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">信頼できる医療機関シリーズ！第一弾</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="https://www.ncnp.go.jp/common/cms/images/NCNP_og_image.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">信頼できる医療機関シリーズ！第一弾</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        </div>

    </div>
    </div>
    <div id="manic" class="tab-pane">
        <div class="kiji">
        <div class="card-group">
            <div class="card">
            <img src="https://pmc.opho.jp//user/media/pmc_opho/common/ogp.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">もちもち犬病院1</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
            <div class="card">
            <img src="https://pmc.opho.jp//user/media/pmc_opho/common/ogp.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">もちもち犬病院2</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
            <div class="card">
            <img src="https://pmc.opho.jp//user/media/pmc_opho/common/ogp.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">もちもち犬病院3</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div id="schizo" class="tab-pane">
        <div class="kiji">
        <div class="card-group">
            <div class="card">
            <img src="https://www.ncnp.go.jp/common/cms/images/NCNP_og_image.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">信頼できる医療機関シリーズ！第一弾</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
            <div class="card">
            <img src="https://www.ncnp.go.jp/common/cms/images/NCNP_og_image.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">信頼できる医療機関シリーズ！第一弾</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
            <div class="card">
            <img src="https://www.ncnp.go.jp/common/cms/images/NCNP_og_image.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">信頼できる医療機関シリーズ！第一弾</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    <div id="adhd" class="tab-pane">
        <div class="kiji">
        <div class="card-group">
            <div class="card">
            <img src="https://www.ncnp.go.jp/common/cms/images/NCNP_og_image.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">信頼できる医療機関シリーズ！第一弾</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
            <div class="card">
            <img src="https://www.ncnp.go.jp/common/cms/images/NCNP_og_image.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">信頼できる医療機関シリーズ！第一弾</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
            <div class="card">
            <img src="https://www.ncnp.go.jp/common/cms/images/NCNP_og_image.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">信頼できる医療機関シリーズ！第一弾</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div> --}}
        </div>
        </div>
    </div>
    </div>
</x-app-layout>



{{-- @foreach ($items as $item)
    <hr>
    <p>{{$item['title']}}</p>
        <p>{{$item['title']}}</p>
        <p>{{$item['content']}}</p>
        <img src="{{$item["image_url"]}}" class="card-img-top" alt="..."><br>
        <a href="{{route('detail', ['content_id' => $item['id']])}}">詳細</a>
        <a href="{{route('edit', ['content_id' => $item['id']])}}">編集</a>
    <form action="/article_delete/{{$item->id}}" method="POST">
        {{ csrf_field() }}
        <input type="submit" value="削除">
        <a href="{{route('input', ['content_id' => $item['id']])}}">送信フォーム</a>
    </form>
@endforeach --}}
