@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">About List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">About</li>
            </ol>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>laravel 9 Image Crud
                                    <a href="{{ url('/admin/about/create') }}" class="btn btn-primary float-end">Add
                                        About</a>
                                </h4>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Data Range</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($abouts as $about)
                                        <tr>
                                            <th scope="row">{{ $about->id }}</th>
                                            <td>{{ $about->date_range }}</td>
                                            <td>{{ $about->title }}</td>   
                                            <td>{{ $about->description }}</td>   
                                            <td>
                                                <img src="{{ asset('uploads/about/img/'.$about->about_image) }}" alt="{{ $about->title }}" width="100" height="100">
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="{{ url('/admin/about/edit/'.$about->id) }}" class="btn btn-primary">Edit</a>
                                                        <a href="{{ url('/admin/about/delete/'.$about->id) }}" class="btn btn-danger">Delete</a>
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



{{-- @extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Service List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">List</li>
            </ol>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>laravel 9 Image Crud
                                    <a href="" class="btn btn-primary float-end">Add
                                        Student</a>
                                </h4>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>dsadas</td>
                                            <td>dasdas</td>
                                            <td>adsasdsa</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="" class="btn btn-primary">Edit</a>
                                                        <a href="" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection --}}
