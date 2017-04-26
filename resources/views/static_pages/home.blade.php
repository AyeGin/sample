@extends('layouts.default')
@section('content')
<div class="jumbotron">
  <h1>Hello Lavarel</h1>
  <p class="lead">
    你所看到的是 <a href="https://lavarel-china.org/laravel-tutorial/5.1">Laravel 入门教程</a> 的示例主页。
  </p>
  <p>
    一切，将从这里开始。
  </p>
  <p>
    <a class="btn btn-lg btn-sucess" href="{{route('signup')}}" role="button">现在注册</a>
  </p>
</div>
@stop