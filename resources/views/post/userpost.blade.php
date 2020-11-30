@extends('baseBlog')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">

                @foreach($list_post as $post)
                <a href="{{url('post', $post->id)}}">
                    <h2 class="post-title">
                        {{$post->title}} </h2>
                    <h3 class=" post-subtitle">
                        {{$post->tag}}
                    </h3>
                </a>




                <p class="post-meta">Posted by
                    <a href="#"> {{$post->user->name}}</a>
                    {{$post->created_at}}</p>
                @endforeach
                </a>

            </div>
            <hr>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>
@endsection