<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employees\StoreRequest;
use App\Http\Requests\Employees\UpdateRequest;
use App\Models\Company;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employe::with('company')->paginate(10);
        return view('dashboard.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        return view('dashboard.employees.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Employe::create($request->validated());
        notify()->success('Employe created with Success!');
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employe $employee)
    {
        return view('dashboard.employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $employee)
    {
        $companies = Company::all();
        return view('dashboard.employees.edit', compact('employee', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Employe $employee)
    {
        $employee->update($request->validated());
        notify()->success('Employe updated with Success!');
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $employee)
    {
        $employee->delete();
        notify()->success('Employe has been deleted with Success!');
        return redirect()->route('employees.index');
    }
}
