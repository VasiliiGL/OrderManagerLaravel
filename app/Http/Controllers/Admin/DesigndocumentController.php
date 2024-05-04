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
        $designdocuments = Designdocument::orderBy("designation", "ASC")->cursorPaginate(10);
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
        return redirect(route("admin.designdocument.index"));
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
        $types=type::cases();
        $designdocument=Designdocument::findOrFail($id);
  
        return view('admin.designdocument.create',[
            'types'=>$types,'designdocument'=>$designdocument,


        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DesigndocumentFormRequest $request, string $id)
    {
        $datas = $request->validated();
        //dd($datas);
        $designdocument=Designdocument::findOrFail($id);
        //dd($designdocument);
        $designdocument->update([
            'designation'=>$datas["designation"],
            'name'=>$datas["name"],
            "type"=>$datas["type"],
        ]);

        return redirect(route('admin.designdocument.index'));
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
