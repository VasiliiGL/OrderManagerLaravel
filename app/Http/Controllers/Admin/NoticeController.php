<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NoticeFormRequest;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notices=Notice::orderBy("created_at","DESC")->paginate(10);
        return view("admin.notices.index",[
            "notices"=>$notices,
        ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.notices.create',[]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoticeFormRequest $request)
    {
        $notice = Notice::create($request->validated());

        return redirect(route("admin.notice.index"));
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
        Notice::destroy($id);
        return redirect(route('admin.notice.index'));
    }
}
