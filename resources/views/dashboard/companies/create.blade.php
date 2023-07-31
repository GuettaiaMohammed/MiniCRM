@extends('dashboard.layouts.master')
@section('content')
    <div class="container mt-3">
        <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row card">
                <div class="card-header">
                    <h3 class="card-title">New Company</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-md-3 form-label"><b>Logo</b>&nbsp;<span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror"
                                value="{{ old('logo') }}">
                            <span style="color: red">
                                @error('logo')
                                    {{ $message }}
                                @enderror
                            </span><br>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-3 form-label"><b>Name</b>&nbsp;<span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" placeholder="Company name">
                            <span style="color: red">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span><br>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 form-label"><b>Email</b></label>
                        <div class="col-md-9">
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" placeholder="Company email">
                            <span style="color: red">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span><br>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 form-label"><b>Website</b></label>
                        <div class="col-md-9">
                            <input type="text" name="website" class="form-control @error('website') is-invalid @enderror"
                                value="{{ old('website') }}" placeholder="Company website">
                            <span style="color: red">
                                @error('website')
                                    {{ $message }}
                                @enderror
                            </span><br>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
