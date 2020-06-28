<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomersController extends Controller {
    public function allOffersMembers(){
        return view('admin/customers/all-offers-members');
    }

    public function allReservations() {
        return view('admin/customers/all-reservations');
    }

    public function edit() {
        return view('admin/food-categories/edit');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
