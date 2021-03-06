<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7fffe3;">
    <div class="container">
        <a class="navbar-brand" href="/"><strong>Blogs</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/"><strong>Home</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about"><strong>About</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts"><strong>Posts</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('categories')  ? 'active' : '' }}" href="/categories"><strong>Categories</strong></a>
            </li>
          </ul>

          <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome back, {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Sign out</button>
                      </form>
                    </li>
                  </ul>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('login')  ? 'active' : '' }}"href="/login" class="nav-link"><strong><i class="bi bi-box-arrow-in-right"></i> Sign in</strong></a>
                </li>
                @endauth
          </ul>

         
        </div>
      </div>
  </nav>
