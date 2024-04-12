@extends('layouts.main')

@section('content')
    
    <h1> Welcome to HOOPERENA</h1>

   
<div class="games">
    <div class="clickable-box" id="game" onclick="redirectToGame()">
    Make games
    </div>
</div>





<div class="gallery-slider">
    <!-- <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <input type="radio" name="radio-btn" id="radio5"> -->



        <!-- <div class="slide first">
            <img src="{{ asset('assets/images/best-nba-players-ever.jpg') }}" alt="Image 1">
        </div>
        <div class="slide">
            <img src="{{ asset('assets/images/16484884264526.jpg') }}" alt="Image 2">   
        </div> 
        <div class="slide">
            <img src="{{ asset('assets/images/kyrie-irving_1n2gcjskkit4j10hnxnul7uuib.jpeg') }}" alt="Image 3">
        </div> 
        <div class="slide">
            <img src="{{ asset('assets/images/michael-jordan---the-last-shot-min.jpg') }}" alt="Image 4">    
        </div> 
        <div class="slide">
            <img src="{{ asset('assets/images/r210880_4680x3212cc.jpg') }}" alt="Image 5">
        </div> -->


        <!-- --automatic sliding--
        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
            <div class="auto-btn5"></div>
        </div>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
            <label for="radio5" class="manual-btn"></label>

        </div> -->


      
  <!-- </div> -->
</div>
    <div class="image-container">
        <img src="{{ asset('assets/images/16484884264526.jpg') }}" alt="Image2">   

    </div>

    <div class="center-container">
    <div class="image-container2">
        <img src="{{ asset('assets/images/best-nba-players-ever.jpg') }}" alt="Image 1">
        <img src="{{ asset('assets/images/kyrie-irving_1n2gcjskkit4j10hnxnul7uuib.jpeg') }}" alt="Image 3">
        <img src="{{ asset('assets/images/michael-jordan---the-last-shot-min.jpg') }}" alt="Image 4">    
    </div>
</div>
    <script>
            function redirectToGame() {
                window.location.href = "/game"; 
            }
            function redirectToGameResults() {
            window.location.href = "/gameResults"; 
            }
    </script>

@section('scripts')
<script src="http://localhost/Hooperena/CS3IP/public/assets/js/script.js"></script>
@endsection


    <div class="forum-box">
    <h2>Forum</h2>
        <ul>
            @foreach($topics as $topics)
                <li>
                    <a href="{{ route('topics.home', $topics->id) }}">
                        {{ $topics->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>


@endsection