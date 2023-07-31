@extends('dashboard.layouts.master')
@section('content')
    <div class="container mt-3">

        <div class="row card">
            <div class="card-header">
                <h3 class="card-title">{{ $company->name }}</h3>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-md-3 form-label"><b>Logo</b></label>
                    <div class="col-md-9">
                        <img src="/storage/{{ $company->logo }}" class="img-fluid" alt="{{ $company->name }}"
                            style="width: 100px; border-radius: 50%;">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-3 form-label"><b>Name</b></label>
                    <div class="col-md-9">
                        <span>{{ $company->name }}</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-3 form-label"><b>Email</b></label>
                    <div class="col-md-9">
                        <span>{{ $company->email }}</span>

                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-3 form-label"><b>Website</b></label>
                    <div class="col-md-9">
                        <a class="text-primary" href="{{ $company->website }}" target="_blank">{{ $company->website }} <i
                                class="fas fa-external-link-alt mx-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
