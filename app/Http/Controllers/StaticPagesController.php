<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\NexmoMessage;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Member;
use App\Reservation;
use App\FoodCategory;
use App\FoodItem;
use App\GeneralSetting;
use App\SpecialOffer;

class StaticPagesController extends Controller { 
    public function home(){
        $generalSettings = GeneralSetting::find(1);
        $categories = FoodCategory::all();

        return view('home', [
            'categories' => $categories
        ]);
    }

    public function about(){
        return view('about');
    }

    public function reservations(){
        return view('pages.reservations');
    } 

    public function routeNotificationForNexmo($notification) {
        return $this->phone_number;
    }

    public function saveReservation(){
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'], 
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guests_total' => ['required', 'string'],
            'time' => ['required', 'string']
        ]); 
 
        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guests_total = request('guests_total');
        $reservation->time = request('time');
        $reservation->save();

        (new NexmoMessage())->content('Your have made a reservation!');

        Mail::to('test@test.com')->send(new ContactFormMail($reservation));

        return redirect('/reservations/thank-you');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function offers(){
        return view('pages.offers');
    }
    public function registerMember(){
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string']
        ]);
        $member = new Member();
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();

        return redirect('/offers/thank-you');
    }

    public function thankYou(){
        return view('pages.thank-you');
    }

    public function menu(){
        $categories = FoodCategory::all();

        return view('menu.all-categories', [
            'categories' => $categories
        ]); 
    }
 
    public function singleMenu($slug){
        \Log::info("Single menu accessed with slug: " . $slug);
        $foodCategory = FoodCategory::where('title', '=', $slug)->first();
        $foodItems = FoodItem::where('category_id', '=', $foodCategory->id)->get();

        return view('menu.single-menu', [
            "foodItem" => ucfirst($slug),
            "foodItems" => $foodItems
        ]); 
    }
     
    public function allMenuItems() {
        $foodItems = FoodItem::all();
       
        return view('menu.all-menu-items', [
            "foodItems" => $foodItems
        ]); 
    }

    public function signUpThanks() {
        return view('pages.sign-up-thanks');
    }
 
    public function specialOffersEmail() {
        request()->validate([
            'email' => ['required', 'string'],
        ]);
        
        $member = new SpecialOffer();
        $member->email = request('email');


        return redirect('/pages/sign-up-thanks');
    }
} 
