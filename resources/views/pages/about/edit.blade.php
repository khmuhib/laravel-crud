@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit About</h1>
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item active">About</li> --}}
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
                                <form action="{{ url('/admin/about/edit/'.$about->id) }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mb-2">
                                        <label>Date Range</label>
                                        <input type="text" class="form-control" placeholder="Enter Title"
                                            name="date_range" value="{{ $about->date_range }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="Enter Title" name="title"  value="{{ $about->title }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Description</label>
                                        <input type="text" class="form-control" placeholder="Enter Description"
                                            name="description"  value="{{ $about->description }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Image</label>
                                        <input type="file" class="form-control" placeholder="Enter Icon name"
                                            name="about_image">
                                            <img src="{{ asset('uploads/about/img/' . $about->about_image) }}" alt=""
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
