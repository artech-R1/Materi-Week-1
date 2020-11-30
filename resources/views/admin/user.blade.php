@extends('baseAdmin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">

            <div class="card">
                <div class="card-header">
                    Data User
                </div>
                <div class="card-body">
                    <table class="table table-datatable">
                        <thead>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Email</th>

                        </thead>
                        <tbody>
                            <tr> @foreach($list_user as $user)
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{url('admin/user', $user->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                        <a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning "><i class="fa fa-edit"></i></a>
                                        @include('template.action.delete', ['url' => url('admin/user', $user->id)])
                                    </div>
                                </td>

                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
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