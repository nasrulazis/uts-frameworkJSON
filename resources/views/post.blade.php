@extends('template.main')
@section('content')
        <header class="masthead" style="background-color: #fff5ea">
            <div class="overlay"></div>
            <div class="container">
            <div class="row">
                
                <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{{$posts->title}}</h1>
                    <h2 class="subheading"></h2>
                    <span class="meta">Posted by
                    <a href="#">{{$posts->author}}</a>
                    {{$posts->datetime}}</span>
                </div>
                </div>
            </div>
            </div>
        </header>
        <article>
            <div class="container">
            <div class="clearfix">
            <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#exampleModal">
            Hapus
            </button><a class="btn float-right" href="/halamanupdate?id={{$posts->id}}">  &#x270E; Ubah </a>
            </div>
            <!-- Button trigger modal -->
            <!-- <a class="btn btn-danger float-right" href="/delete?id={{$posts->id}}">Hapus</a> -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data akan dihapus, Yakin?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Yakin? Data yang sudah dihapus tidak dapat dikembalikan, seperti kenanganmu dengan dia :'
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="/delete?id={{$posts->id}}"><button type="button" class="btn btn-danger" >Hapus</button></a>
                </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                {!!$posts->content!!}
                </div>
            </div>
            </div>
        </article>
@endsection