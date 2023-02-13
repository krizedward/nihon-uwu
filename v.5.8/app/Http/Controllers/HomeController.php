<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Client;
use App\Models\Payment;
use App\Models\ratingTalent;
use App\Models\rentService;
use App\Models\serviceTalent;
use App\Models\Talent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role == "admin")
        {
            $clients = Client::all();
            $payments = Payment::all();
            $rating_talents = ratingTalent::all();
            $rent_services = rentService::all();
            $service_talents = serviceTalent::all();
            $talents = Talent::all();
            return view('home', compact('clients','payments','rating_talents','rent_services','service_talents','talents'));
        }

        if(Auth::user()->role == "talent")
        {
            $clients = Client::all();
            $payments = Payment::all();
            $rating_talents = ratingTalent::all();
            $rent_services = rentService::all();
            $service_talents = serviceTalent::all();
            return view('home', compact('clients','payments','rating_talents','rent_services','service_talents'));
        }
        
        if(Auth::user()->role == "client")
        {
            $payments = Payment::all();
            $rating_talents = ratingTalent::all();
            $rent_services = rentService::all();
            $service_talents = serviceTalent::all();
            $talents = Talent::all();
            return view('home', compact('payments','rating_talents','rent_services','service_talents','talents'));
        }
    }
}
