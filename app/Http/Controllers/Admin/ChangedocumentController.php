<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChangedocumentFormRequest;
use App\Models\Changedocument;
use App\Models\Designdocument;
use App\Models\Notice;
use Illuminate\Http\Request;

class ChangedocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $changedocuments = Changedocument::orderBy("created_at","DESC")->cursorPaginate(10);
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
        $notices = Notice::get();
        //dd($notices);
        $designdocuments =Designdocument::get();
        return view('admin.changedocuments.create',[
            "notices"=> $notices, "designdocuments"=>$designdocuments,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChangedocumentFormRequest $request)
    {
        //dd($request);
        $data =$request->validated();

        if($request->has("documentfile"))
        {
            $documentfile = str_replace("public/document","", $request->file('documentfile')->store("public/document"));
            $data["documentfile"] =  $documentfile;
        }

        $changedocument= Changedocument::create($data);



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
        $notices = Notice::get();
        //dd($notices);
        $designdocuments =Designdocument::get();
        $changedocument =Changedocument::findOrFail($id);
        return view('admin.changedocuments.create',[
            "notices"=> $notices, "designdocuments"=>$designdocuments,"changedocument"=>$changedocument,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ChangedocumentFormRequest $request, string $id)
    {
        $data =$request->validated();
        $changedocument= Changedocument::findOrFail($id);
        if($request->has("documentfile"))
        {
            $documentfile = str_replace("public/document","", $request->file('documentfile')->store("public/document"));
            $data["documentfile"] =  $documentfile;
        }
        $changedocument->update($data);

        return redirect(route('admin.changedocument.index'));



       /* $changedocument->update([
            "designdocument_id"=>$data["designdocument_id"],
            'notice_id'=>$data["notice_id"],
            'number'=>$data["number"],
            'documentfile'=>$data["documentfile"],
        ]);*/

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
