<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserFormRequest;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usersDetail = UserDetail::orderBy("created_at","DESC")->cursorPaginate(50);
        //dd($usersDetail);


        return view('admin.users.index',[
            "usersDetail"=>$usersDetail,
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $organizations= Organization::get();
        return view('admin.users.create',[
            "organizations"=>$organizations,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserFormRequest $request)
    {
        //dd($request);
      //  $user = User::create($request->validated());
      $data =$request->validated();
        $user = User::create([
            "name"=>$data["name"],
            'email'=>$data["email"],
            'password'=>bcrypt($data["password"])
        ]);
        $userDetail=UserDetail::create([
            'user_id'=>$user["id"],
            'organization_id'=> $data[ "organization_id"],
            'lastname'=>$data[ "lastname"],
            'fathername'=>$data["fathername"],
            'firstname'=>$data["firstname"],
            "jobtitle"=>$data["jobtitle"],
            "workphone"=>$data["workphone"],
            "personalphone"=>$data["personalphone"]
        ]);

        return redirect(route("admin.users.index"));
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
        $userDetail=UserDetail::findOrFail($id);
       // $user= $userDetail->user;
        $organizations= Organization::get();
       // $userDetail = UserDetail::orderBy("created_at","DESC")->paginate(10);
        return view('admin.users.create',[
            "userDetail"=>$userDetail, "organizations"=>$organizations,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserFormRequest $request, string $id)
    {
        $userDetail=UserDetail::findOrFail($id);
        $user=$userDetail->user;
        $data =$request->validated();
        $user ->update([
            "name"=>$data["name"],
            'email'=>$data["email"],
            'password'=>bcrypt($data["password"])
        ]);
        $userDetail->update([
            'user_id'=>$user["id"],
            'organization_id'=> $data[ "organization_id"],
            'lastname'=>$data[ "lastname"],
            'fathername'=>$data["fathername"],
            'firstname'=>$data["firstname"],
            "jobtitle"=>$data["jobtitle"],
            "workphone"=>$data["workphone"],
            "personalphone"=>$data["personalphone"]
        ]);

        return redirect(route("admin.users.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $userDetail=UserDetail::findOrFail($id);
        $user_id= $userDetail->user->id;
        UserDetail::destroy($id);
        User::destroy($user_id);
        return redirect(route('admin.users.index'));
    }
}
