<?php

namespace App\Http\Controllers;

use App\Http\Requests\Companies\SendMailRequest;
use App\Http\Requests\Companies\StoreRequest;
use App\Http\Requests\Companies\UpdateRequest;
use App\Mail\CompanyMail;
use App\Models\Company;
use App\Services\ImageService;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::withCount('employees')->paginate(10);
        return view('dashboard.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $companyData = $request->validated();
        $imageService = new ImageService();

        if ($request->hasFile('logo')) {
            $path = $imageService->upload($request->file('logo'));
            $companyData['logo'] = $path;
        }

        Company::create($companyData);
        notify()->success('Company created with Success!');
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('dashboard.companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('dashboard.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Company $company)
    {
        $companyData = $request->validated();
        $imageService = new ImageService();

        if ($request->hasFile('logo')) {
            $path = $imageService->upload($request->file('logo'));
            $companyData['logo'] = $path;
            $imageService->delete($company->logo);
        }

        $company->update($companyData);
        notify()->success('Company edited with Success!');
        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $imageService = new ImageService();
        $imageService->delete($company->logo);
        $company->delete();
        notify()->success('Company has been deleted with Success!');
        return redirect()->route('companies.index');
    }

    public function createEmail(Company $company)
    {
        return view('dashboard.companies.email', compact('company'));
    }

    public function sendEmail(SendMailRequest $request, Company $company)
    {
        $mailData = $request->validated();
        Mail::to($company->email)
            ->send(new CompanyMail($mailData));

        notify()->success('The mail has been sent Successfuly!');
        return redirect()->route('companies.index');
    }
}
