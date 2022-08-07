@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">List</li>
            </ol>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 my-2">
                        <div class="card">
                            <div class="card-header">
                                <h4>Students Table Data
                                    <a href="" class="btn btn-primary float-end">Add</a>
                                </h4>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">course</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                            <tr>
                                                <th scope="row">{{ $student->id }}</th>
                                                <td>{{ $student->name }}</td>
                                                <td>{{ $student->email }}</td>
                                                <td>{{ $student->course }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 my-2">
                        <div class="card">
                            <div class="card-header">
                                <h4>Phones Table Data
                                    <a href="" class="btn btn-primary float-end">Add</a>
                                </h4>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Phone Name</th>
                                            <th scope="col">Phone Model</th>
                                            <th scope="col">Mobile Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($phones as $phone)
                                            <tr>
                                                <th scope="row">{{ $phone->id }}</th>
                                                <td>{{ $phone->phone_name }}</td>
                                                <td>{{ $phone->phone_model }}</td>
                                                <td>{{ $phone->phone_number }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 my-2">
                        <div class="card">
                            <div class="card-header">
                                <h4>Combine Table (One to One)
                                    <a href="" class="btn btn-primary float-end">Add</a>
                                </h4>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">User Name</th>
                                            <th scope="col">User Email</th>
                                            <th scope="col">User Course</th>
                                            <th scope="col">User Mobile</th>
                                            <th scope="col">User Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($combined as $key => $combine)
                                            <tr>
                                                <td scope="row">{{ $loop->index + 1 }}</th>
                                                <td>{{ $combine->name }}</td>
                                                <td>{{ $combine->email }}</td>
                                                <td>{{ $combine->course }}</td>
                                                <td>{{ $combine->phone_name }}</td>
                                                <td>{{ $combine->phone_number }}</td>
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
    </main>
@endsection
