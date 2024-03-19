@extends('layouts.main')


@section('content')
<div class="container">
      <form method="post">
        <div class="form-group">
            <input type="text" placeholder="Full Name:" name="full_name" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" placeholder="User-name:" name="user_name" class="form-control">
        </div>
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Signup" name="signup" class="btn btn-primary">
        </div>
      </form>
     <div><p><a href="login.php">Log in</a></p></div>
</div>
@endsection