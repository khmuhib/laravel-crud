@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add Header Content</h1>
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item active">Edit</li> --}}
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
                                <h4>Edit Header
                                    <a href="{{ url('/admin/header/index') }}" class="btn btn-primary float-end">Show
                                        Header</a>
                                </h4>
                                <form action="{{ url('admin/header/store') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="Enter Title" name="title">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Sub Title</label>
                                        <input type="text" class="form-control" placeholder="Sub Title" name="subtitle">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Background Image</label>
                                        <input type="file" class="form-control" placeholder="Course" name="bg_image">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Upload Your Resume</label>
                                        <input type="file" class="form-control" name="resume">
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
