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
    .trending-image{
        height: 200px;
        width: 300px;
        
    }
    /* for display images in one row */
    .trend{
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
    .detail-img{
        height: 200px;

    }
</style>

<script></script>


</html>
