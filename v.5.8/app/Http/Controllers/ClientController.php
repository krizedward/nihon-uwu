<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use App\Models\Client;
use App\Models\Talent;
use App\Models\rentService;
use App\Models\serviceTalent;
use App\Models\serviceRental;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\ClientServiceRentalMail;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    public function rentIndex()
    {
        // load data di database
        return view('client.rent_index');
    }

    public function rentCreate()
    {
        // load data di database
        $list_talent = Talent::all();
        $list_serviceTalent = serviceTalent::all();
        $list_rentService = serviceRental::where('client_id', Auth::user()->client->id)->get();
        $list_payService = serviceRental::where('client_id', Auth::user()->client->id)
        ->where('status_payment','=','success')->get();
        
        // mengembalikan nilai
        return view('client.rent_create', 
        compact(
            'list_rentService',
            'list_talent',
            'list_serviceTalent',
            'list_payService'
        ));
    }

    public function rentStore(Request $request)
    {
        try {

            // kurang validation

            // serviceRental::create([
            //     'client_id' => Auth::user()->client->id,
            //     'servicetalent_id' => $request['servicetalent_id'],
            //     'talent_id' => $request['talent_id'],
            //     'date_dating' => $request['date'],
            //     'time_dating' => $request['time'],
            //     'status_payment' => 'pending',
            //     'status_dating' => 'process',
            // ]);

            // rentService::create([
            //     'client_id' => Auth::user()->client->id,
            //     'servicetalent_id' => $request['servicetalent_id'],
            //     'talent_id' => $request['talent_id'],
            //     'numberdays' => '1',
            //     'start_date' => $request['date'],
            //     'end_date' => $request['date'],
            // ]);

            $data = [
                'client' => Auth::user()->client->nickname,
                'service' => 'service',
                'date' => 'service',
                'time' => "senin",
            ];

            return dd($data);

            // membuat tabel bio client, service email, API dengan nihon uwu 

            Mail::to('uwunihon@gmail.com')->send(new ClientServiceRentalMail());

            // kurang session
            // Session::flash('sukses','SUKSES MEMBUAT ORDER SERVICE TALENT');

            return redirect()->route('client.rent.create');
            

        } catch (\Exception $e) {

            return $e->getMessage();
        }

    }

    public function customerService()
    {
        return view('client.customer_service');
    }

    public function promo()
    {
        $data_service = serviceTalent::all();
        return view('client.promo', compact('data_service'));
    }

    // order talent
    public function talentIndex()
    {
        $data_talent = Talent::all();
        return view('client.talent_index', compact('data_talent'));
    }

    public function talentService($talent)
    {
        $talentId = $talent;
        $list_serviceTalent = serviceTalent::all();
        return view('client.talent_service', compact('talentId','list_serviceTalent'));
    }

    public function talentSchedule(Request $request,$talent)
    {
        $getTalent = $talent;
        $getService = $request->servicetalent_id;
        return view('client.talent_schedule',compact('getTalent','getService'));
    }

    public function talentOrder(Request $request,$talent)
    {
        $getTalent = Talent::where('id', $talent)->get();
        $getService = serviceTalent::where('id', $request->serviceId)->get();
        $getSchedule = $request->schedule;
        $getTime = $request->time;
        return view('client.talent_order',compact('getTalent','getService','getSchedule','getTime'));
    }

    // pendaftaran
    public function register(Request $request)
    {
        //belum ada validator
        $data = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => 'client',
            
        ]);

        Session::flash('sukses','SUKSES MEMBUAT AKUN CLIENT');

        // mengembalikan session
        return redirect()->route('login');
    }
}
