<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ruu">
    <meta name="generator" content="Hugo 0.84.0">
    <title>HELCOM | 精神障碍者を独りにしない</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
    <link rel="stylesheet" href="{{ asset('/css/cover.css') }}" >
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" >
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
          <div>
            <h3 class="float-md-start my-3">HELCOM</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end my-3">
              <a class="nav-link active" href="index.html">人と繋がる</a>
              <a class="nav-link" href="know.html">障害を知る</a>
              <a class="nav-link" href="together.html">その他</a>
            </nav>
          </div>
        </header>

      <main class="px-3">
        {{ $slot }}
      </main>

      <footer class="mt-auto text-white-50"></footer>
    </div>
  </body>
</html>
