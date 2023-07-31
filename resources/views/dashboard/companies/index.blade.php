@extends('dashboard.layouts.master')
@section('content')
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Companies</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Companies</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('companies.create') }}" class="btn btn-success bg-success-gradient mt-1">
                <i class="fa-solid fa-plus mx-1"></i>New Company
            </a>
        </div>

        <!-- ROW-1 -->
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Companies List</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap text-md-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 10%"></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Website</th>
                                    <th>N° Employees</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($companies as $company)
                                    <tr>
                                        <td><img src="/storage/{{ $company->logo }}" class="img-fluid" alt="{{ $company->name }}"
                                                style="height: 60px; border-radius: 50%;">
                                        </td>
                                        <td class="align-middle">{{ $company->name }}</td>
                                        <td class="align-middle">
                                            @if ($company->email)
                                                {{ $company->email }}
                                            @else
                                                <i class="text-secondary">Vide</i>
                                            @endif
                                        </td>
                                        <td class="align-middle">
                                            @if ($company->website)
                                                <a class="text-primary" href="{{ $company->website }}" target="_blank">{{ $company->website }} <i
                                                        class="fas fa-external-link-alt mx-1"></i></a>
                                            @else
                                                <i class="text-secondary">Vide</i>
                                            @endif
                                        </td>
                                        <td class="align-middle">{{ $company->employees_count }}</td>
                                        <td class="align-middle">
                                            <a href="{{ route('companies.email', $company) }}" class="text-info mx-1">
                                                <i style="cursor: pointer" class="bi-envelope me-1"></i>
                                            </a>

                                            <a href="{{ route('companies.show', $company) }}" class="text-primary mx-1">
                                                <i style="cursor: pointer" class="bi-eye me-1"></i>
                                            </a>

                                            <a href="{{ route('companies.edit', $company) }}" class="text-warning mx-1">
                                                <i style="cursor: pointer" class="bi-pencil-fill me-1"></i>
                                            </a>

                                            <a class="text-danger mx-1" style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#delete-company-{{ $company->id }}">
                                                <i style="color: red" class="bi-trash me-1"></i>
                                            </a>
                                            @include('dashboard.companies.modals.delete')
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>The companies table is empty</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="row text-center mt-4">
                        {{ $companies->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- CONTAINER END -->
@endsection
