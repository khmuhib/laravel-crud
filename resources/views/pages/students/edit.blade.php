@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Student</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success! </strong>{{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h4>laravel 9 Image Crud
                                    <a href="{{ route('admin.students.index') }}" class="btn btn-primary float-end">Show
                                        Student</a>
                                </h4>
                                <form action="{{ url('/admin/students/update/' . $student->id) }}"
                                    enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mb-2">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                            value="{{ $student->name }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Email</label>
                                        <input type="text" class="form-control" placeholder="Email" name="email"
                                            value="{{ $student->email }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Course</label>
                                        <input type="text" class="form-control" placeholder="Course" name="course"
                                            value="{{ $student->course }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Student Profile Image</label>
                                        <input type="file" class="form-control" name="profile_image">
                                        <img src="{{ asset('uploads/students/' . $student->profile_image) }}" alt=""
                                            style="height: 100px; width: 100px;" class="mt-3">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
@endsection
