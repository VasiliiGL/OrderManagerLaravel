<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designdocument;

class DesigndocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $designdocuments = Designdocument::orderBy("designation", "ASC")->paginate(10);
        return view('admin.designdocument.index',[
         "designdocuments"=>$designdocuments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.designdocument.create',[]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Designdocument::destroy($id);
        return redirect(route('admin.designdocument.index'));
    }
}
