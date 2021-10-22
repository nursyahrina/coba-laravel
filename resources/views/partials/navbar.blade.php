<nav class="navbar shadow-sm navbar-expand-lg fixed-top navbar-light bg-warning">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="<?= env('APP_URL').'img/rubiestudio-nobg-black.png'; ?>" alt="Rubie'Studio" width="52" height="52" class="d-inline-block">
            <span class="web-title">Rubie'Studio</span>
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($active) === "home" ? 'active fw-bold' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active) === "about" ? 'active fw-bold' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active) === "posts" ? 'active fw-bold' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active) === "categories" ? 'active fw-bold' : '' }}" href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($active) === "login" ? 'active fw-bold' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>