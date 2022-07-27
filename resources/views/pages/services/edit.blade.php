@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Service</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Service</li>
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
                                <h4>Add Service
                                    <a href="{{ url('admin/services/index') }}" class="btn btn-primary float-end">Show
                                        Service</a>
                                </h4>
                                <form action="{{ url('admin/services/edit/'.$services->id) }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mb-2">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{ $services->title }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Description</label>
                                        <input type="text" class="form-control" placeholder="Enter Description"
                                            name="description"  value="{{ $services->description }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Icon</label>
                                        <input type="text" class="form-control" placeholder="Enter Icon name"
                                            name="icon"  value="{{ $services->icon }}">
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
