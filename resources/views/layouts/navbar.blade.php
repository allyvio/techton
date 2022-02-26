<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3498db;">
    <div class="container">
        <a class="navbar-brand" href="#">Portal berita</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{($title === 'Home' ? 'active':'')}}">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{($title === 'About' ? 'active':'')}}">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item {{($title === 'News' ? 'active':'')}}">
                    <a class="nav-link" href="/news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>