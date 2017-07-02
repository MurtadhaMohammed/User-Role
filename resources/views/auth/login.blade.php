@extends('welcome')
@section('content')
      <div class="login-page">
       <div class="form">

       @foreach($errors->all() as $error)
      <p>{{$error}}</p>
       @endforeach

      <form class="login-form" method="POST" action="/login">
       {{ csrf_field() }}
      <input name="name" type="text" placeholder="username"/>
      <input name="password" type="password" placeholder="password"/>
      <button type="submit">login</button>
      <p class="message">Not registered? <a href="/register">Create an account</a></p>
    </form>
  </div>
</div>

@stop