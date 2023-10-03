<?php
use APP\Http\Controllers\productcontroller;
$total=0;
if (Session()->has('userdata'))
{
$total = productcontroller::cartitem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Our-Ecom</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Orders</a>
                </li>
                <form class="d-flex" action="search">
                    <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                
            </ul>
            <a class="nav-link active text-success" aria-current="page"  href="#" style="margin-right: 10px;">Cart
                items({{ $total }})</a>
            </div>
            @if (Session()->has('userdata'))
            <div class="dropdown" id="dropdown-trigger">
                <div class="dropdown-header">
                    {{ Session::get('userdata')['name'] }}
                </div>
                <ul class="dropdown-menu">
                    <li><a href="/logout">Logout</a></li>
                    <li><a href="#">Update Password</a></li>
                </ul>
            </div>
            @else
            
                <div class="dropdown" id="dropdown-trigger">
                    <div class="dropdown-header">
                        <a href="/login" style="text-decoration: none; color:rgb(243, 240, 240)">LogIn</a>
                    </div>
                    {{-- <ul class="dropdown-menu">
                        <li><a href="#">Logout</a></li>
                        <li><a href="#">Update Password</a></li>
                    </ul> --}}
                </div>
            
            @endif
            
            
    </div>
</nav>
