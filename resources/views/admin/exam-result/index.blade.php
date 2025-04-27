@extends('master.master')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6 class="card-title">Exam User</h6>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Company Name </th>
                                        <th>Location</th>
                                        <th>Designation/Title</th>
                                        <th>Employee</th>
                                        <th>Result Point</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($examResults as $result)
                                        <tr>
                                            <td>{{ $result->id }}</td>
                                            <td>{{ $result->first_name }} {{ $result->lastName }}</td>
                                            <td>{{ $result->email }}</td>
                                            <td>{{ $result->company_name }}</td>
                                            <td>{{ $result->location }}</td>
                                            <td>{{ $result->designation }}</td>
                                            <td>{{ $result->employe_based }}</td>
                                            <td>{{ $result->result_points }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
