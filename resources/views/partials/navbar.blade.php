<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-warning">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="<?= env('APP_URL').'img/rubiestudio-nobg-black.png'; ?>" alt="Rubie'Studio" width="52" height="52" class="d-inline-block">
            <span class="web-title">Rubie'Studio</span>
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title) === "Home" ? 'active fw-bold' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title) === "About" ? 'active fw-bold' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title) === "Blog" ? 'active fw-bold' : '' }}" href="/posts">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>