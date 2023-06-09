<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Utility;
use App\Models\Mkeka\Mkeka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MkekaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mkekas = DB::table('mkekas')->orderBy('created_at', 'desc')->paginate();
        return view("mkeka.index", compact('mkekas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("mkeka.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [

                'picture' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'total_olds' => ['required'],
                'expires_at' => ['required'],
                'type' => ['required'],

            ]

        );
        $picture = $request->file('picture')->store('picture', 'public');
        Mkeka::create(
            [

                'picture' =>  $picture,
                'total_olds' => $request->input('total_olds'),
                'expires_at' => $request->input('expires_at'),
                'price' => $request->input('price'),
                'type' => $request->input('type'),


            ]
        );
        // }

        toastr()->success('Data has been stored successfully!', 'Congrats');
        return redirect()->route('mkekas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mkeka $mkeka)
    {
        //
        return view("mkeka.show", compact("mkeka"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mkeka $mkeka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mkeka $mkeka)
    {
        // dd($request->input());
        $mkeka->fill($request->input());
        if (request()->hasFile("featureImage")) {
            $mkeka->featureImage = Utility::uploadFile("featureImage");
        }
        $mkeka->update();
        // $featureImage = $request->file('featureImage')->store('featureImage', 'public');
        // $mkeka->update(["featureImage" => $featureImage]);
        toastr()->success('Data has been stored successfully!', 'Congrats');
        return redirect()->route('mkekas.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mkeka $mkeka)
    {
        $mkeka->delete();
        toastr()->error("Data delete succeful");
        return redirect()->route('mkekas.index');
    }
}
