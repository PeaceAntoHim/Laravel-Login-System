<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7fffe3;">
    <div class="container">
        <a class="navbar-brand" href="/"><strong>Blogs</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/"><strong>Home</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about"><strong>About</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts"><strong>Posts</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories"><strong>Categories</strong></a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link {{ ($active === "login") ? 'active' : '' }}"href="/login" class="nav-link"><strong><i class="bi bi-box-arrow-in-right"></i> Sign in</strong></a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
