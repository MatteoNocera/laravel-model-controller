<header>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarID">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="{{ route('movies') }}">Movies</a>

                </div>
            </div>
        </div>
    </nav>

</header>
