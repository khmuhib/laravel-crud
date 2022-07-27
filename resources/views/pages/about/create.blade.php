@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">About</li>
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
                                    <a href="{{ url('/admin/about/index') }}" class="btn btn-primary float-end">Show
                                        About</a>
                                </h4>
                                <form action="" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label>Date Range</label>
                                        <input type="text" class="form-control" placeholder="Enter Title"
                                            name="date_range">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="Enter Title" name="title">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Description</label>
                                        <input type="text" class="form-control" placeholder="Enter Description"
                                            name="description">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Image</label>
                                        <input type="file" class="form-control" placeholder="Enter Icon name"
                                            name="about_image">
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
