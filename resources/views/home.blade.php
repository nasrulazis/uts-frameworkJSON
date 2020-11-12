@extends('template.main')
@section('content')
 <!-- Page Header -->
 <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>UTS PBF</h1>
            <span class="subheading">Blog Nasrul</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <!-- post -->
        
        @foreach(array_reverse($posts) as $post_artikel)
        <div class="post-preview">
          <a href="post?id={{$post_artikel->id}}">
            <h2 class="post-title">
             {{$post_artikel->title}}
            </h2>
          </a>
          {!!$post_artikel->content!!}
          <p class="post-meta">Posted by
            <a href="post?id={{$post_artikel->id}}">{{$post_artikel->author}}</a>
            {{$post_artikel->datetime}}</p>
        </div>
        <hr>
        <!-- endpost -->
        
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="post?id={{$post_artikel->id}}">Selengkapnya.. </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  @endsection