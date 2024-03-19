@extends('layouts.main')

@section('content')
    
    <h1> Welcome to HOOPERENA</h1>

    <!-- <div class="clik" onclick="redirectToMatch()>
        
</div> -->


   
<div class="forum">
    <div class="clickable-box" id="forum-box" onclick="redirectToForum()">
    Click me to go to Forum
    </div>
</div>

<div class="matches">
    <div class="clickable-box" id="matches-box" onclick="redirectToGameResults()">
    Click me to view Matches
    </div>
</div>


    <script>

            function redirectToForum() {
                window.location.href = "/forum"; // Replace with the actual URL
            }

            function redirectToGameResults() {
            window.location.href = "/gameResults"; // Replace with the actual URL
            }
    </script>




    <footer>
        &copy; 2024 Hooperena. All rights reserved.
    </footer>
    
</html>
@endsection