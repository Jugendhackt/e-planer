@extends('main')

@section('content')

    <div class="row" style="margin-top: 2.5vh;">

        <!-- User Statistics -->

        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Users</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Statistics</h6>

                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><strong>Total users:</strong></li>
                                <li><strong>Some other properties:</strong></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>{{ $options['user']['total'] }}</li>
                                <li>Test</li>
                            </ul>
                        </div>
                    </div>

                    <a href="{{ route('adminusers') }}" class="btn btn-secondary">View Users</a>
                </div>
            </div>

        </div>

        <!-- Homework Statistics -->

        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Homework</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Statistics</h6>

                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><strong>Total homework:</strong></li>
                                <li><strong>Some other properties:</strong></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>{{ $options['homework']['total'] }}</li>
                                <li>Test</li>
                            </ul>
                        </div>
                    </div>

                    <a href="{{ route('adminhomework') }}" class="btn btn-secondary">View Homework</a>
                </div>
            </div>

        </div>

    </div>

    <div class="row" style="margin-top: 2.5vh;">

        <!-- Courses Statistics -->

        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Courses</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Statistics</h6>

                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><strong>Total courses:</strong></li>
                                <li><strong>Some other properties:</strong></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>{{ $options['courses']['total'] }}</li>
                                <li>Test</li>
                            </ul>
                        </div>
                    </div>

                    <a href="{{ route('admincourses') }}" class="btn btn-secondary">View Courses</a>
                </div>
            </div>

        </div>

    </div>

@endsection