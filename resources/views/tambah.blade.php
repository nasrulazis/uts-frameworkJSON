@extends('template.main')
@section('content')
 <!-- Page Header -->
 <header class="masthead" style="background-color: #fff5ea">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Tambah Artikel</h1>
            <span class="subheading">Blog Nasrul</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    
    <div class="row justify-content-md-center">
      
      <div class="col col-lg-8">

        <form method="post" action="/create">
        @csrf
          <div class="form-group">
            <label for="exampleInputEmail1" class="">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Title" name="title">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="">Author</label>
            <input type="text" class="form-control" id="Author" placeholder="Enter Author" name="author">
          </div>
          <div class="form-group">
            <label for="content" class="">Content</label>
            <textarea id="content" class="form-control" placeholder="Content" name="content"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-success rounded-sm mt-4 float-right" value="Submit">
            <input type="reset" class="btn rounded-sm mt-4 float-right" value="Cancel">
          </div>
      </form>
      <script>
        CKEDITOR.replace('content');
      </script>
    </div>
  </div>

</div>

  @endsection