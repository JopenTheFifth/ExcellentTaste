<style>
    #heroImg{
        background-image: url("{{asset('/images/front-page/header_img.jpg')}}");
        height: 620px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    #hero-text{
        font-size: 3rem;
        text-align: center;
        position: absolute;
        top: 25%;
        left: 20%;
        transform: translate(-50%, -50%);
        color: white;
    }
    #bodySection{
       padding: 8rem;

    }
    .content-body-wrapper{
        display: flex;
        flex-flow: row nowrap;
    }
    .bodyImg{
        height: 469px;
        width: 359px;
    }

    .content-body-info{
        padding: 3rem 3rem 3rem 5rem;
        width: 50%;
    }

    .content-body-title{
        font-size: 1.8rem;
        text-transform: uppercase;
        font-weight: bold;
    }
    .content-body-subtitle{
        color: #F8961E;
        font-size: 1.3rem;
        padding-bottom: 1rem;
    }
    .content-body-text{
        color: #8D99AE;
        font-size: 0.8rem;
        padding-top: 2.2rem;
    }


</style>


@extends('layouts.front-end.app')

@section('content')

    <section id="heroImg">
        <div id="hero-text">
            <h1>Excellent Taste</h1>
            <h4>Lorem Ipsum Tata</h4>
        </div>
    </section>

    <section id="bodySection" class="container">
        <div class="content-body-wrapper">
            <img class="bodyImg" src="{{asset('/images/front-page/food_img_body_content.jpg')}}">
            <div class="content-body-info">
                <h3 class="content-body-subtitle">Always expect</h3>
                <h2 class="content-body-title">GREAT TASTE, GOOD TIMES</h2>
                <p class="content-body-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At </p>
            </div>
        </div>



        <div class="content-body-wrapper">

        </div>
    </section>


@endsection
