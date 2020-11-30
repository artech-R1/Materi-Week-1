@extends('baseAdmin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Detail Data User
                </div>
                <div class="card-body">
                    <h3>{{$user->name}}</h3>
                    <hr>
                    <p>
                        Email : {{($user->email)}}

                    </p>
                    <hr>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection