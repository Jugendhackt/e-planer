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

                    <a href="{{ route('users.index') }}" class="btn btn-secondary">View Users</a>
                </div>
            </div>

        </div>

        <!-- Roles Statistics -->

        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">User Roles</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Statistics</h6>

                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><strong>Total roles:</strong></li>
                                <li><strong>Some other properties:</strong></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>{{ $options['roles']['total'] }}</li>
                                <li>Test</li>
                            </ul>
                        </div>
                    </div>

                    <a href="{{ route('roles.index') }}" class="btn btn-secondary">View Roles</a>
                </div>
            </div>

        </div>

    </div>

    <div class="row" style="margin-top: 2.5vh;">

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

                    <a href="#" class="btn btn-secondary disabled">View Homework</a>
                </div>
            </div>

        </div>

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

                    <a href="{{ route('courses.index') }}" class="btn btn-secondary">View Courses</a>
                </div>
            </div>

        </div>

    </div>

@endsection