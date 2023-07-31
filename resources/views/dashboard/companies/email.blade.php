@extends('dashboard.layouts.master')
@section('content')
    <div class="container mt-3">
        <form action="{{ route('companies.email', $company) }}" method="POST">
            @csrf
            <div class="row card">
                <div class="card-header">
                    <h3 class="card-title">Send mail to "{{ $company->name }}"</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-md-3 form-label"><b>Subject</b>&nbsp;<span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror"
                                value="{{ old('subject') }}" placeholder="subject">
                            <span style="color: red">
                                @error('subject')
                                    {{ $message }}
                                @enderror
                            </span><br>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 form-label"><b>Message</b>&nbsp;<span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <textarea type="text" rows="10" name="message" class="form-control @error('message') is-invalid @enderror"
                                placeholder="message ...">{{ old('message') }}</textarea>
                            <span style="color: red">
                                @error('message')
                                    {{ $message }}
                                @enderror
                            </span><br>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">
                        <b><i class="bi-envelope me-2"></i>Send Mail</b>
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
