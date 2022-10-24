@extends('dashboard.index')
@section('pages')
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Employes</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('createDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Employes</li>
            </ol>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success !</strong> {{ session()->get('success') }}.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header bg-custom py-4 d-flex">
                        <h6 class="font-weight-bold text-success mr-auto">Employes</h6>
                        @include('layouts.partials.dashboard.pages.employes._add')
                    </div>
                    <div class="table-responsive p-3">
                        <table id="example" class="table align-items-center table-flush table-hover" style="width:100%">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Mail</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>Level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataEmployes as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->level }}</td>
                                        <td>
                                            @include('layouts.partials.dashboard.pages.employes._edit')
                                            <a href="{{ route('deleteEmployes', $item->uuid) }}"
                                                class="btn btn-sm btn-warning mb-1">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
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
@endsection
