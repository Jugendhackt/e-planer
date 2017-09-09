@extends('main')

@section('content')

    <div class="row marginTop">
        <div class="col-12">
            <div class="float-left">
                <h2>Create new course</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('courses.index') }}"> Back</a>
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


@endsection