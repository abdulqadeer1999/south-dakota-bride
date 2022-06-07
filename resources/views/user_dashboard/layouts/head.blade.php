
<?php
$logo_add = App\Models\LogoManager::where('title','favicon')->first();

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amea Today</title>
<link rel="icon" href="{{ (!empty($logo_add->image))?
    asset('storage/uploads/logo/'.$logo_add->image):asset('storage/uploads/No-image.jpg') }}" style="width:10px; height:10px;" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('frontend/assets/tabs.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/main.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/cdn/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{ asset('frontend/assets/cdn/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/cdn/animated.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/jsRapStar.css') }}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<style>

    .tabs-main-heading h1 {
        color: #000000;
        font-family: PlayfairDisplay-Bold;
        line-height: 50px;
    }

</style>
