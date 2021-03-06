<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketplace L6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 2em">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">Marketplace L6</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @auth
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('admin/stores*')) active @endif" href="{{route('admin.stores.index')}}">Lojas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('admin/products*')) active @endif" href="{{route('admin.products.index')}}">Produtos</a>
                    </li>
                </ul>
                <li class="nav-item">
                    <span class="nav-link">Olá, {{auth()->user()->name}}!</span>
                </li>
                <div class="my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="event.preventDefault();
                                                                  document.querySelector('form.logout').submit();">Sair</a>
                            <form action="{{route('logout')}}" class="logout" method="POST" style="display:none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            @endauth
        </div>
    </nav>
    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
</body>
</html>
