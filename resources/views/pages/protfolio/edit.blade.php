@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Protfolio Add</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Protfolio</li>
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
                                    <a href="{{ url('/admin/protfolio/index') }}" class="btn btn-primary float-end">Show
                                        Protfolio</a>
                                </h4>
                                <form action="{{ url('/admin/protfolio/update/'.$protfolio->id) }}" enctype="multipart/form-data"
                                    method="Post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mb-2">
                                        <label>Client</label>
                                        <input type="text" class="form-control" placeholder="Enter Client"
                                            name="client" value="{{ $protfolio->client }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Category</label>
                                        <input type="text" class="form-control" placeholder="Enter Category"
                                            name="category" value="{{ $protfolio->category }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="Enter Title" name="title"  value="{{ $protfolio->title }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Sub Title</label>
                                        <input type="text" class="form-control" placeholder="Enter Sub Title"
                                            name="subtitle" value="{{ $protfolio->subtitle }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Description</label>
                                        <input type="text" class="form-control" placeholder="Enter Description"
                                            name="description" value="{{ $protfolio->description }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Image</label>
                                        <input type="file" class="form-control" placeholder="Enter Icon name"
                                            name="profolio_image">
                                            <img src="{{ asset('uploads/protfolio/img/'.$protfolio->profolio_image) }}" alt="" width="100px" height="100px" class="my-2">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
@endsection
