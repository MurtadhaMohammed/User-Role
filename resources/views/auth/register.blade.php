@extends('welcome')
@section('content')
      <div class="login-page">
       <div class="form">
        <form class="register-form" method="POST" action="/register">
        {{ csrf_field() }}
      <input name="name" type="text" placeholder="name"/>
      <input name="password" type="password" placeholder="password"/>
      <input name="email" type="text" placeholder="email address"/>
      <button type="submit">create</button>
      <p class="message">Already registered? <a href="/login">Sign In</a></p>
      </form>
     
  </div>
</div>

@stop