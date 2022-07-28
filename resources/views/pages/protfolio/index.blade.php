@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Protfolio List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">List</li>
            </ol>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>laravel 9 Image Crud
                                    <a href="{{ url('admin/protfolio/create') }}" class="btn btn-primary float-end">Protfolio
                                        Add</a>
                                </h4>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Client</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Sub Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($protfolios as $protfolio)
                                            <tr>
                                                <th scope="row">{{ $protfolio->id }}</th>
                                                <td>{{ $protfolio->client }}</td>
                                                <td>{{ $protfolio->category }}</td>
                                                <td>{{ $protfolio->title }}</td>
                                                <td>{{ $protfolio->subtitle }}</td>
                                                <td>{{ $protfolio->description }}</td>
                                                <td>
                                                    <img src="{{ asset('uploads/protfolio/img/'.$protfolio->profolio_image) }}" alt="asdsa" width="50" height="50">
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col">
                                                            <a href="{{ url('admin/protfolio/edit/'.$protfolio->id) }}" class="btn btn-primary">Edit</a>
                                                            <a href="{{ url('admin/protfolio/delete/'.$protfolio->id) }}" class="btn btn-danger">Delete</a>
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
