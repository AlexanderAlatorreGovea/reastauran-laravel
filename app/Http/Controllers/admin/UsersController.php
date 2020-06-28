<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        //to show all the users
        //$users = User::All();
        $users = User::paginate(10);
        return view('admin/users/all', [
            'users' => $users
        ]); 
    }
 
    public function create() {
        // the array 'roles' passes down the roles that will be consumed on the view page
        $roles = Role::All();
        return view('admin/users/create', [
            'roles' => $roles
        ]);
    }

    public function update($id){
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required']
        ]);
        
        $user = User::find($id);
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        $user->roles()->sync([request('role_id')]);

        return redirect('/admin/users');
    }

    //pass in the param to get the id of the user because we are using /admin/users/{id}/edit
    public function edit($id) {
        //this goes into the DB and finds the user by the id
        $user = User::find($id);
        $roles = Role::All();
        return view('admin/users/edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }
 
    public function store() {
        //return request()->all();
        $user = new User();
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        $user->roles()->attach(request('role_id'));
       
        return redirect('/admin/users');
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();

        //return redirect('/admin/users');
    }
}
