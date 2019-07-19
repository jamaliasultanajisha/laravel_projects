@extends('layouts.app')
<!DOCTYPE html>

<html>

<head>

    <title>image upload example</title>

    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">

</head>

<body>
<div class="owl-carousel owl-theme">
    <?php
        $var_path = Auth::user()->email;
    ?>

 {{--   @foreach($images as $image)--}}
{{--        <div class="item"><img src= {{ asset('images/1561319090.jpg') }}/></div>--}}
        <img src="{{asset('/images/jsultanajisha@gmail.com/1561319090.jpg')}}" >
   {{-- @endforeach--}}
</div>

</body>

</html>