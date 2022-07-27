@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Show Header</h1>
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item active">List</li> --}}
            </ol>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Show header
                                    <a href="{{ url('/admin/header/create') }}" class="btn btn-primary float-end">Add
                                        Header</a>
                                </h4>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Subtitle</th>
                                            <th scope="col">Background Image</th>
                                            <th scope="col">PDF</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($header as $item)
                                            <tr>
                                                <th scope="row">{{ $item->id }}</th>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->subtitle }}</td>
                                                <td>
                                                    <img src="{{ asset('uploads/header/img/' . $item->bg_image) }}"
                                                        alt="" style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $item->resume }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col">
                                                            <a href="{{ url('/admin/header/index/' . $item->id) }}"
                                                                class="btn btn-primary">Edit</a>
                                                            <a href="{{ url('admin/header/delete/' . $item->id) }}"
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
