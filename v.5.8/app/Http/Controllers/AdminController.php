<?php

namespace App\Http\Controllers;

use Session;
use Carbon\Carbon;
use App\User;
use App\Models\Talent;
use App\Models\Client;
use App\Models\Payment;
use App\Models\serviceTalent;
use App\Models\rentService;
use App\Models\ratingTalent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    // methode rating
    public function ratingCreate()
    {
        return view('admin.rating_create');
    }

    public function ratingStore(Request $request)
    {
        // berhasil tapi masih belum untuk rent idnya
        // satu rating = satu rent
        ratingTalent::Create([
            'rent_id' => 1,
            'rating_point' => $request['rating_point'],
            'description_rating' => $request['description_rating'],
        ]);

        Session::flash('sukses','SUKSES MENAMBAHKAN RATING TALENT');

        return redirect()->route('home');
    }

    // methode service
    public function serviceCreate()
    {
        return view('admin.service_create');
    }
    
    public function serviceStore(Request $request)
    {
        serviceTalent::create([
            'name_service' => $request['name_service'],
            'price_service' => $request['price_service'],
            'description' => $request['description'],
        ]);

        Session::flash('sukses','SUKSES MEMBUAT SERVICE TALENT');

        return redirect()->route('home');
    }

    // methode payment
    public function paymentCreate()
    {
        return view('admin.payment_create');
    }
    
    public function paymentStore(Request $request)
    {
        Payment::create([
            'rent_id' => "1",
            'payment_date' => "2022-01-02",
            'total_amount' => "50000",
            'methode_payment' => "gopay",
            'upload_receipt' => "upload.jpg",
        ]);

        Session::flash('sukses','SUKSES MENYIMPAN PAY SERVICE TALENT');

        return redirect()->route('home');
    }

    // methode rent
    public function rentCreate()
    {
        return view('admin.rent_create');
    }

    public function rentStore()
    {
        rentService::create([
            'client_id' => '1',
            'servicetalent_id' => '1',
            'talent_id' => '1',
            'numberdays' => '5',
            'start_date' => '2022-07-10',
            'end_date' => '2022-07-15',
        ]);

        Session::flash('sukses','SUKSES MENAMBAHKAN RENT SERVICE TALENT');

        return redirect()->route('home');   
    }

    // methode talent

    public function talentShow($id)
    {
        $getId = Crypt::decrypt($id);
        $data_talent = Talent::findOrFail($getId);
        return view('admin.talent_show', compact('data_talent'));
    }

    public function talentCreate()
    {
        return view('admin.talent_create');
    }

    public function talentStore(Request $request)
    {
        try {
            // menggunakan try catch jika tidak pakai validate

            $user = User::create([
                'name' => $request['fullname'],
                'email' => $request['fullname']."@gmail.com",
                'password' => Hash::make("12345678"),
                'role' => 'talent',
                
            ]);
    
            $user_id = $user->id;
    
            Talent::create([
                'user_id' => $user_id,
                'fullname' => $request['fullname'],
                'talentname' => $request['talentname'],
                // 'address' => $request['address'],
                // 'body_height' => 0,
                // 'number_wa' => $request['number_wa'],
                // 'birthdate' => '2022-07-16',
                // 'bank_account' => $request['bank_account'],
                // 'upload_ktp' => 'ktp.jpg',
            ]);

            // Validate the value...
            // $item->save();
            // return redirect('/item/create')->with('status', 'Pendaftaran Barang Baru Berhasil!');
            Session::flash('sukses','SUKSES MEMBUAT AKUN TALENT');
            
            return redirect()->route('home');

        } catch (\Exception $e) {
            
            // return redirect('/item/create')->with('error', 'Kode Barang Anda Sudah Pernah Dipakai!');
            
            Session::flash('gagal','GAGAL MEMBUAT AKUN TALENT');

            // return dd($e->getMessage());
            return redirect()->route('home');

        } 
        
        // catch (\Throwable $ex) {
            
        //     return dd('Throwable block', $ex);
        // }
    }

    // methode client

    public function clientShow($id)
    {
        $getId = Crypt::decrypt($id);
        $data_client = Client::findOrFail($getId);
        return view('admin.client_show', compact('data_client'));
    }

    public function timeWithUnix()
    {
        // $time = Carbon::today();
        $time = "2022-01-01";
        $timeStamp = strtotime($time);
        
        $waktu = "2018-01-11 13:31:59";
        $a = date(strtotime($waktu));
        $b = strtotime("2022-02-11 15:00");
        
        $hasil = floor($b * 1000);

        $d = Carbon::createFromFormat('U.v', number_format($hasil/1000, 3, '.', ''));
        return print $d->format("M-d-Y H:i:s");
        // return print $hasil;
        // $date = Carbon::createFromTimestamp($waktu);
        // return "$date";
        // untuk mengambil waktu hari ini
        $milliseconds = floor(microtime(true) * 1000);

        // $milliseconds = 1375010774123;
        // return dd($timeStamp);

        //untuk unix apoch
        $converted = Carbon::createFromTimestamp($milliseconds,'Asia/Jakarta')->toDateTimeString();
        // return print $converted;
        
        $d = Carbon::createFromFormat('U.v', number_format($hasil/1000, 3, '.', ''));
        return print $d->format("M-d-Y H:i:s.u");
        
        // return dd(Carbon::now()->timestamp);
        
    }
}
