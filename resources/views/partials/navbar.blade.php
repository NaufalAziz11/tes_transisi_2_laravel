<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">AKN Kajen Dropbix</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            @if(Auth::user())
            <li class="nav-item active">
                <a class="nav-link" href="{{route('upload-companies')}}">Upload companies<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('list-companies')}}">List companies <span class="sr-only">(current)</span></a>
            </li>
            @endif

            @if(Auth::user())
            <li class="nav-item active">
                <a class="nav-link" href="{{route('upload-employee')}}">Upload employee<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('list-employee')}}">List employee <span class="sr-only">(current)</span></a>
            </li>
            @endif

            @if(Auth::user())

            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">Logout<span class="sr-only">(current)</span></a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Sign UP <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login <span class="sr-only">(current)</span></a>
            </li>
            @endif


    </div>
</nav>
<!-- ahir navbar -->