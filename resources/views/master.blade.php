<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Ecommerse</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('fotter') }}
</body>
<style>
    /* Add this CSS to your stylesheet  */
    .slider-text {
        background-color: rgb(145, 142, 142) !important;
        padding: 10px;
        border-radius: 5px;
        color: white;
    }

    /* for images size fixing */
    .trending-image {
        height: 200px;
        width: 300px;

    }

    /* for display images in one row */
    .trend {
        /* margin: 10px; */
        margin: 10px;
        margin-left: 60px;
        margin-right: 60px;
        padding: 10px;
        /* border-radius: 30px; */
    }

    /* .trending-items{
        margin-left: 30px;
    } */
    .detail-img {
        height: 300px;
        width: 400px;
        margin-top: 30px;
    }

    .search-images {
        width: 500px;
        height: 400px;

    }

    .search-box {
        width: 500px !important;
    }

    .centered-container {
        /* display: flex; */
        /* justify-content: center; */
        margin: auto;
    }

    /* Dropdown container */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown header (small box with username) */
    .dropdown-header {
        background-color: #dd2b2b;
        color: white;
        padding: 5px 10px;
        border: 1px solid #dd2b2b;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Style the menu items */
    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: white;
        border: 1px solid #dd2b2b;
        border-radius: 5px;
        padding: 0;
        list-style: none;
        z-index: 1;
    }

    /* Style the menu items */
    .dropdown-menu li {
        padding: 5px;
        text-align: center;
        
    }

    /* Change background color on hover */
    .dropdown-header:hover {
        background-color: #ff4444;
    }

    /* Display the dropdown when hovering over the trigger element */
    #dropdown-trigger:hover .dropdown-menu {
        display: block;
        
    }
    .dropdown-menu a {
    color: #333; /* Set your desired link color */
    text-decoration: none; /* Remove underline */
    font-weight: normal; /* Set the font weight to normal by default */
    transition: font-weight 0.3s;
}
.dropdown-menu li a:hover {
    font-weight: bold; /* Make the font bold on hover */
}
.product-style{
    text-decoration: none;

}

</style>

<script></script>


</html>
