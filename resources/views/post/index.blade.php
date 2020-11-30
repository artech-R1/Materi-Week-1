@extends('baseBlog')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Data Blog
                    <a href="{{url('post/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table table-datatable">
                        <thead>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Tag</th>

                        </thead>
                        <tbody>
                            <tr> @foreach($list_post as $post)
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{url('post', $post->id)}}" class="btn btn-dark "><i class="fa fa-info"></i></a>
                                        <a href="{{url('post', $post->id)}}/edit" class="btn btn-warning "><i class="fa fa-edit"></i></a>
                                        @include('template.action.delete', ['url' => url('post', $post->id)])
                                    </div>
                                </td>

                                <td>{{$post->title}}</td>
                                <td>{{$post->tag}}</td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection