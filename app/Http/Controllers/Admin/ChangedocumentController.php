<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChangedocumentFormRequest;
use App\Models\Changedocument;
use Illuminate\Http\Request;

class ChangedocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $changedocuments = Changedocument::orderBy("created_at","DESC")->paginate(10);
        return view("admin.changedocuments.index",[
            "changedocuments"=>$changedocuments,
        ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.changedocuments.create',[]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChangedocumentFormRequest $request)
    {
        $customer= Changedocument::create($request->validated());

        return redirect(route("admin.changedocument.index"));
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
        Changedocument::destroy($id);
       return redirect(route('admin.changedocument.index'));
    }
}
