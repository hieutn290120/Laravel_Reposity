
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Carousel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}"> <i
                            class="bi bi-house-door"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/cv') }}"> <i
                       class="bi bi-file-person"></i>CV</a>
                </li>
                {{-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li> --}}
            </ul>
            <form class="d-flex">
                <a href="{{ url('/dangki') }}" aria-current="page" class="nav-link active"><i
                        class="bi bi-person"></i>Register</a>
                <a href="{{ url('/dangnhap') }}" aria-current="page" class="nav-link active"><i
                        class="bi bi-person"></i>Login</a>
            </form>
        </div>
    </div>
</nav>


