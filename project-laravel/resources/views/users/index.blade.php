@extends('main')

@section('content')

    <div class="row marginTop">
        <div class="col-12">
            <div class="float-left">
                <h2>Users Management</h2>
            </div>
            <div class="float-right">
                @permission('create-user')
                <a class="btn btn-dark-green" href="{{ route('users.create') }}"> Create New User</a>
                @endpermission
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $key => $user)
            <tr>
                <td><b>{{ ++$i }}</b></td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if(!empty($user->roles))
                        @foreach($user->roles as $v)
                            <label class="label label-success">{{ $v->display_name }}</label>
                        @endforeach
                    @endif
                </td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $data->render() !!}

@endsection