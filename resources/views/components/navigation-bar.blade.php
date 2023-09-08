<!-- Navbar -->
<nav
class="navbar navbar-light sticky-lg-top bg-white border-bottom border-dark justify-content-between p-2 px-3 mx-2 py-3">
<a class="navbar-brand display-1" href="/">
    <img src="{{ asset('images/logo.png') }}" width="70" height="70" class="d-inline-block align-center"
        alt="">
    FELLIPS Enterprise
</a>
<!-- Search form -->
<form action="/" class="form-inline">
    <input class="search-input mr-sm-2" type="text" placeholder="Search for something here..."
        aria-label="Search">
    <button type="submit" class="search-button"><img src="{{ asset('icons/search.svg') }}" width="30"
            height="20" alt=""></button>

</form>
<!-- nav items -->
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="#"><img src="{{ asset('icons/envelope.svg') }}" width="30"
                height="30" alt=""></a>
    </li>
    <!--Dropdown bag-->
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('icons/heart.svg') }}" width="30" height="30" alt="">
            </button>
            <ul class="dropdown-menu">
                <div class="container">
                    <p class="user-select-none">No jobs were favorited yet.</p>
                </div>
            </ul>
        </div>
    </li>
    <!--Dropdown user-->
    <li class="nav-item">
        <div class="dropdown">
            <button class="nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('icons/person.svg') }}" width="30" height="30" alt="">
            </button>
            <ul class="dropdown-menu text-center">
                <li><a class="dropdown-item" href="#">My account</a></li>
                <li><a class="dropdown-item" href="#">My orders</a></li>
                <li><a class="dropdown-item" href="#">Log out</a></li>
            </ul>
        </div>
    </li>
</ul>

</nav>