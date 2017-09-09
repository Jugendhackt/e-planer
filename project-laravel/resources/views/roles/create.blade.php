@extends('main')

@section('content')
    <div class="row marginTop">
        <div class="col-12">
            <div class="float-left">
                <h2>Create New Role</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-info" href="{{ route('roles.index') }}">Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'roles.store', 'method'=>'POST')) !!}
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name', 'class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Display Name:</strong>
                {!! Form::text('display_name', null, array('placeholder' => 'Display Name', 'class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Description:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'Description', 'class' => 'form-control', 'style'=>'height:100px')) !!}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Permission:</strong>
                <br/>
                @foreach($permission as $value)
                    <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                        {{ $value->display_name }}</label>
                    <br/>
                @endforeach
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success btn-block" style="margin-bottom: 25vh;">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection