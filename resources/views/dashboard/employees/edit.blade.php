@extends('dashboard.layouts.master')
@section('content')
    <div class="container mt-3">
        <form action="{{ route('employees.update', $employee) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row card">
                <div class="card-header">
                    <h3 class="card-title">Edit Employe</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-md-3 form-label"><b>First Name</b>&nbsp;<span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" name="first_name"
                                class="form-control @error('first_name') is-invalid @enderror"
                                value="{{ $employee->first_name }}" placeholder="First Name">
                            <span style="color: red">
                                @error('first_name')
                                    {{ $message }}
                                @enderror
                            </span><br>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 form-label"><b>Last Name</b>&nbsp;<span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" name="last_name"
                                class="form-control @error('last_name') is-invalid @enderror"
                                value="{{ $employee->last_name }}" placeholder="Last Name">
                            <span style="color: red">
                                @error('last_name')
                                    {{ $message }}
                                @enderror
                            </span><br>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 form-label"><b>Email</b></label>
                        <div class="col-md-9">
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ $employee->email }}" placeholder="Email">
                            <span style="color: red">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span><br>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 form-label"><b>Phone</b></label>
                        <div class="col-md-9">
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                value="{{ $employee->phone }}" placeholder="Phone">
                            <span style="color: red">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span><br>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 form-label"><b>Company</b>&nbsp;<span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <select name="company_id" class="form-control @error('company_id') is-invalid @enderror">
                                <option value="">Select company ...</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}"
                                        {{ $employee->company_id == $company->id ? 'selected' : '' }}>
                                        {{ $company->name }}</option>
                                @endforeach
                            </select>
                            <span style="color: red">
                                @error('company_id')
                                    {{ $message }}
                                @enderror
                            </span><br>
                        </div>
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
