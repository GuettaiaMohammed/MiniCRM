@extends('dashboard.layouts.master')
@section('content')
    <div class="container mt-3">
        <div class="row card">
            <div class="card-header">
                <h3 class="card-title">{{ $employee->first_name . ' ' . $employee->last_name }}</h3>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-md-3 form-label"><b>First Name</b></label>
                    <div class="col-md-9">
                        <span>{{ $employee->first_name }}</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-3 form-label"><b>Last Name</b></label>
                    <div class="col-md-9">
                        <span>{{ $employee->last_name }}</span>

                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-3 form-label"><b>Email</b></label>
                    <div class="col-md-9">
                        <span>{{ $employee->email }}</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-3 form-label"><b>Phone</b></label>
                    <div class="col-md-9">
                        <span>{{ $employee->phone }}</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-3 form-label"><b>Company</b></label>
                    <div class="col-md-9">
                        <span><a href="{{ route('companies.show', $employee->company) }}"
                                target="_blannk">{{ $employee->company->name }}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
