<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"> {{ $siteLogo }} </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @foreach($headerMenu as $val)
                <li class="nav-item active">
                    <a class="nav-link" href='/{{$val["key"]}}'> {{$val["val"]}} </a>
                </li>
                @endforeach
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    @if (session()->has('message'))
    <div class="container my-2">
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    </div>
    @endif
</div>