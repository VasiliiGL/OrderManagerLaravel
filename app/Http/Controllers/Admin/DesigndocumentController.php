<?php

namespace App\Http\Controllers\Admin;

use App\Enums\type;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DesigndocumentFormRequest;
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
        $types=type::cases();
        //dd($types);
       
        return view('admin.designdocument.create',[
            'types'=>$types,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DesigndocumentFormRequest $request)
    {
        $designdocuments = Designdocument::create($request->validated());
        return redirect(route("admin.designdocuments.index"));
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
