@extends('baseBlog')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Postingan
                </div>
                <div class="card-body">
                    Judul
                    <h2>{{$post->title}}</h2>

                    <hr>
                    Tag
                    <h5>{{$post->tag}}</h5>
                    <hr>

                    <p>{{$post->content}}</p>
                    <hr>
                    <p>{{$post->user->name}}</p>
                    <hr>


                </div>
            </div>
            <!-- comments Form -->
            <div class="card">
                <div class="card-header">
                    Tambah Blog
                </div>
                <div class="card-body">
                    <form action="{{url('post')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Tag</label>
                            <input type="text" class="form-control" name="tag">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection