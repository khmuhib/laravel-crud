@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Student List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">List</li>
            </ol>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>laravel 9 Image Crud
                                    <a href="{{ route('admin.students.create') }}" class="btn btn-primary float-end">Add
                                        Student</a>
                                </h4>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Profile Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                            <tr>
                                                <th scope="row">{{ $student->id }}</th>
                                                <td>{{ $student->name }}</td>
                                                <td>{{ $student->email }}</td>
                                                <td>{{ $student->course }}</td>
                                                <td>
                                                    <img src="{{ asset('uploads/students/' . $student->profile_image) }}"
                                                        alt="" style="height: 50px; width: 50px;">
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col">
                                                            <a href="{{ url('admin/students/edit/' . $student->id) }}"
                                                                class="btn btn-primary">Edit</a>
                                                            <a href="{{ url('admin/student/delete/' . $student->id) }}"
                                                                class="btn btn-danger">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
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
