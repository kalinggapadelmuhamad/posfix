@extends('dashboard.index')
@section('pages')
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('createDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success !</strong> The data was updated successfully..
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <!--Row-->
        <div class="row mb-5">

            <!-- Area Chart -->
            <div class="col-xl-4">
                <div class="card mb-4">
                    <div class="card-body">
                        @if (auth()->user()->gender == 'P')
                            <img class="mx-auto d-block img-profile rounded-circle" src="{{ asset('img/girl.png') }}"
                                style="max-width: 180px">
                        @else
                            <img class="mx-auto d-block img-profile rounded-circle" src="{{ asset('img/boy.png') }}"
                                style="max-width: 180px">
                        @endif
                    </div>
                </div>
            </div>
            <!-- Pie Chart -->
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header bg-custom py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-success">Profile Setting</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('updateProfile') }}">
                            @csrf
                            <div class="form-row">
                                <input type="hidden" name="uuid" value="{{ auth()->user()->uuid }}">
                                <div class="form-group col-md-6">
                                    <label for="inputFullname" class="font-weight-bold">Full Name</label>
                                    <input type="text" name="name" class="form-control" id="inputFullname"
                                        value="{{ auth()->user()->name }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail" class="font-weight-bold">Email</label>
                                    <input type="email" class="form-control" id="inputEmail"
                                        value="{{ auth()->user()->email }}" readonly>
                                </div>
                            </div>
                            <div class=" form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPhone" class="font-weight-bold">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="inputPhone"
                                        value="{{ auth()->user()->phone }}">
                                    @error('phone')
                                        <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" form-group col-md-6">
                                    <label for="password" class="font-weight-bold">New Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                    @error('password')
                                        <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="addressr" class="font-weight-bold">Address</label>
                                    <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" id="address" required>{{ auth()->user()->address }}</textarea>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputGender" class="font-weight-bold">Gender</label>
                                    <select name="gender" class="form-control" id="inputGender" required>
                                        @if (auth()->user()->gender == 'P')
                                            <option value="P" selected>Perempuan</option>
                                            <option value="L">Laki - Laki</option>
                                        @else
                                            <option value="P">Perempuan</option>
                                            <option value="L" selected>Laki - Laki</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputLevel" class="font-weight-bold">Level</label>
                                    <input type="text" class="form-control" id="inputLevel"
                                        value="{{ auth()->user()->level }}" readonly>
                                </div>
                            </div>
                            <button type="submit" class="btn  btn-md bg-success text-white">
                                Save
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <!-- Message From Customer-->
        </div>



    </div>
@endsection
