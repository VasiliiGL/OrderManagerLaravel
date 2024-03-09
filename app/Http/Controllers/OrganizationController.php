<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
   {
    $organizations = Organization::orderBy("created_at","DESC")->paginate(3);
    return view('organizations.index',[
        "organizations"=>$organizations,
    ]);
   }

  /* public function show($id)
   {
    $organization = Organization::findOrFail($id);

     $organization = Organization::where(["id"=>$id])->first();
     
     return view('organizations.show',[
        "organization" =>$organization, 
    ]);
   }*/
   public function orgMechanics()
   {
    $id = 1;
    $organization = Organization::where(["id"=>$id])->first();
    return view('organizations.orgConnection',[
        "organization" =>$organization, 
    ]);
   }
   public function organization($id)
   {
    $organization = Organization::where(["id"=>$id])->first();
    return view('organizations.show',[
        "organization" =>$organization, 
    ]);
   }
   public function orgConnection()
   {
    $id = 2;
    $organization = Organization::where(["id"=>$id])->first();
    return view('organizations.orgConnection',[
        "organization" =>$organization, 
    ]);
   }
 
}
