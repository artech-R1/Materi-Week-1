@extends('baseBlog')
@section('content')
<div class="container">
    <div class="row">
        @foreach($list_post as $post)

        <div class="col-md-4 text-center col-sm-6 col-xs-6">
            <div class="thumbnail product-box">
                <img src="{{url('dist')}}/img/user2-160x160.jpg" alt="" />
                <div class="caption">
                    <h3 class="title">{{$post->title}} </h3>
                    <h3 class="subtitle">{{$post->tag}} </h3>
                    <p><a href="#"> 
                     Posted by   {{$post->user->name}} on   {{$post->user->created_at}}  
                    </a></p>
                   
                  
                </div>
            </div>
        </div>
        @endforeach
             
            <!-- Pager -->
        
        </div>
    </div>
</div>

<hr>
@endsection