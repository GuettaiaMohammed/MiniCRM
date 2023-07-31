@extends('dashboard.layouts.master')
@section('content')
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Employees</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Employees</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('employees.create') }}" class="btn btn-success bg-success-gradient mt-1">
                <i class="fa-solid fa-plus mx-1"></i>New Employe
            </a>
        </div>

        <!-- ROW-1 -->
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Employees List</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap text-md-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Company</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($employees as $employe)
                                    <tr>

                                        </td>
                                        <td class="align-middle">{{ $employe->first_name }}</td>
                                        <td class="align-middle">{{ $employe->last_name }}</td>
                                        <td class="align-middle">
                                            @if ($employe->email)
                                                {{ $employe->email }}
                                            @else
                                                <i class="text-secondary">Vide</i>
                                            @endif
                                        </td>
                                        <td class="align-middle">
                                            @if ($employe->phone)
                                                {{ $employe->phone }}
                                            @else
                                                <i class="text-secondary">Vide</i>
                                            @endif
                                        </td>
                                        <td class="align-middle">{{ $employe->company->name }}</td>
                                        <td class="align-middle">
                                            <a href="{{ route('employees.show', $employe) }}" class="text-primary mx-1">
                                                <i style="cursor: pointer" class="bi-eye me-1"></i>
                                            </a>

                                            <a href="{{ route('employees.edit', $employe) }}" class="text-secondary mx-1">
                                                <i style="cursor: pointer" class="bi-pencil-fill me-1"></i>
                                            </a>

                                            <a class="text-danger mx-1" style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#delete-employe-{{ $employe->id }}">
                                                <i style="color: red" class="bi-trash me-1"></i>
                                            </a>
                                            @include('dashboard.employees.modals.delete')
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>The employees table is empty</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="row text-center mt-4">
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- CONTAINER END -->
@endsection
