<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="{{url('/')}}" style="color: white">Eliezer Rangel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}" style="color: white">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/gallery')}}" style="color: lightslategray">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/blog')}}" style="color: lightslategray">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/contact')}}" style="color: lightslategray">Contact Us</a>
                </li>
            </ul>
        </div>
        <form class="form-inline align-content-end">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
</header>
