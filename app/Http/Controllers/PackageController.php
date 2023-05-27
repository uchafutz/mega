<?php

namespace App\Http\Controllers;

use App\Models\Package\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view("package.index", compact("packages"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("package.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => ["required"],
                'amount' => ["required"],
                'duration' => ["required"],
            ]
        );
        $package = Package::create($request->input());
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('packages.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        return view("package.create", compact("package"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $package->update($request->input());
        toastr()->success('Data has been updated successfully!', 'Congrats');
        return redirect()->route('packages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        //
    }
}
