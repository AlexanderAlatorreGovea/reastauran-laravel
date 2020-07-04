<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    public function index(){
        $members = Member::paginate(10);
        
        return view('admin/members/all', [
            'members' => $members
        ]);
    }  
    public function delete($id){
        $member = Member::find($id);
        $member->delete();
        return redirect('/admin/members');
    } 
 
    public function edit($id){
        $members = Member::find($id);
       //dd($members);
         return view('admin/members/edit', [
             'members' => $members
         ]);
    }

    public function update($id){
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string'],
            'phone_number' => ['required']
        ]);
        
        $item = Member::find($id);
        $item->fname = request('fname');
        $item->lname = request('lname');
        $item->email = request('email');
        $item->phone_number = request('phone_number');
        $item->save();

        return redirect('/admin/members');
    }
}
