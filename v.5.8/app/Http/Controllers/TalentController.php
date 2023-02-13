<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use App\Models\Payment;
use App\Mail\SendEmail;
use App\Models\Talent;
use App\Models\talentBio;
use App\Models\rentService;
use App\Models\dayOffTalent;
use App\Models\ratingClient;
use App\Models\ratingTalent;
use App\Models\scheduleTalent;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class TalentController extends Controller
{
    public function __construct()
    {
        // 
    }

    // update
    public function registariTalent(Request $request, $id)
    {
        // validate
        $this->validate($request,[
            'nickname' => 'required',
            'number_wa' => 'required|min:10|numeric',
            'fullname' => 'required',
            'sosmed_ig' => 'required',
        ]);

        // proses
        $profile = Talent::findOrFail($id);
        $profile->update([
            'nickname' => $request->nickname,
            'number_wa' => $request->number_wa,
        ]);

        $biodata = talentBio::where('talent_id', $id)->first();
        $biodata->update([
            'fullname' => $request->fullname,
            'sosmed_ig' => $request->sosmed_ig,
        ]);
        
        // session
        Session::flash('sukses','SUKSES MENGGANTI PROFILE');

        return view('home');
    }

    // kirim email
    public function testEmail()
    {
        // untuk mengirim data yang ada
        $data = [
            'name' => 'Talent Nihon uwu',
            'body' => 'Testing Kirim Email dari nihon uwu'
        ];
    
        Mail::to('edwardthemangare@gmail.com')->send(new SendEmail($data));
    
        dd("Email Berhasil dikirim.");
    }

    // jadwal
    public function scheduleIndex($keterangan)
    {
        try
        {
            if($keterangan == 'day-off')
            {
                $data = new dayoffTalent;
                $data_dayoff = $data::all();
                $startDate = date('Y-m-d', mktime(0,0,0, date('m'), 1, date('Y')));
                $endDate = date('Y-m-d', mktime(0,0,0, date('m'), 30, date('Y')));
                
                $idTalent = Auth::user()->talent->id;
                $libur = $data->getTalent($idTalent);
                // return dd($data->getTalent($idTalent));
                
                return view('talent.dayoff_index', 
                compact(
                    'data_dayoff',
                    'startDate',
                    'endDate',
                    'libur',
                ))
                ->with('dayoff', $data);
            }

            elseif($keterangan == 'coba')
            {
                $data = new scheduleTalent;
                $date = $data->cariTahun('2020-01-01 01:02:03');
                $data_jadwal = $data::all();
                // return dd($data);
                return view('talent.schedule_index',compact('data_jadwal'))
                ->with('jadwal',$data);
            }
        }

        catch(\Exception $e)
        {
            // untuk menangkap error
            return $e->getMessage();
        }
    }

    public function scheduleCreate($keterangan)
    {
        try
        {
            if($keterangan == 'day-off')
            {
                $data = new dayoffTalent;
                $idTalent = Auth::user()->talent->id;
                $libur = $data->getTalent($idTalent);
                // menampilkan data libur talent
                $listday_off = dayoffTalent::all()->where('talent_id',$idTalent);
                $day = [
                    "Monday" => "Senin",
                    "Tuesday" => "Selasa",
                    "Wednesday" => "Rabu",
                    "Thursday" => "Kamis",
                    "Friday" => "Jumat",
                    "Saturday" => "Sabtu",
                    "Sunday" => "Minggu",
                ];

                return view('talent.dayoff_create',compact('day','libur','listday_off'));
            }
        }

        catch(\Exception $e)
        {
            // untuk manangkap error
            return $e->getMessage();
        }
    }

    public function scheduleStore(Request $request, $keterangan)
    {
        try
        {
            if($keterangan == 'day-off')
            {
                // validasi
                $this->validate($request,[
                    'day_off' => 'required',
                ]);

                $idTalent = Auth::user()->talent->id;
                $data = dayOffTalent::all()->where('talent_id', $idTalent)->last();
                $count = dayOffTalent::count();

                if($count != 0)
                {
                    // menghapus hari libur
                    $data->delete();    
                }

                // create
                dayOffTalent::create([
                    'talent_id' => $idTalent,
                    'day_off' => $request->day_off,
                ]);

                // session
                Session::flash('sukses','SUKSES MENGGANTI HARI LIBUR');

                // return
                return redirect()->back();
            }
        }

        catch(\Exception $e)
        {
            // untuk manangkap error
            return $e->getMessage();

            // dokumentasi
            // return "proses simpan";
            // return scheduleCreate($keterangan);
            // return (new scheduleCreate)->method();
            // memanggil methode dalam conttoller langsung
            // return app('App\Http\Controllers\TalentController')->scheduleCreate($keterangan);
        }
    }

    public function scheduleDestroy($keterangan,$id)
    {
        // return "hapus halaman";
        $data = dayoffTalent::find($id);
    	$data->delete();
        // session
        Session::flash('sukses','SUKSES MENGHAPUS HARI LIBUR');
        
    	return redirect()->back();
    }

    // order
    public function rentIndex($keterangan)
    {
        try
        {
            if($keterangan == 'order')
            {
                // variable
                $idTalent = Auth::user()->talent->id;
                $list_rent = rentService::all()->where('talent_id', $idTalent);
                // untuk menampilkan rating job rental pacar di halaman talent
                return view('talent.rent_index', compact('list_rent'));
            }
        }

        catch(\Exception $e)
        {
            // untuk manangkap error
            return $e->getMessage();
        }
    }
    
    // rating
    public function ratingIndex($keterangan)
    {
        try
        {
            if($keterangan == 'review')
            {
                // untuk menampilkan rating job rental pacar di halaman talent
                $idTalent = Auth::user()->talent->id;
                $list_ratingClient = ratingClient::all();
                $list_ratingTalent = ratingTalent::all()->where('talent_id', $idTalent)->take(5);
                return view('talent.rating_index',compact('list_ratingClient','list_ratingTalent','idTalent'));
            }
        }

        catch(\Exception $e)
        {
            // untuk manangkap error
            return $e->getMessage();
        }
    }

    // payment
    public function paymentIndex()
    {
        try
        {
            // untuk menampilkan payment job rental pacar di halaman talent
            $list_payment = Payment::all();
            $idTalent = Auth::user()->talent->id;
            return view('talent.payment_index', compact('list_payment','idTalent'));
        }

        catch(\Exception $e)
        {
            // untuk manangkap error
            return $e->getMessage();
        }
        
    }

    public function register(Request $request)
    {
        //belum ada validator
        $data = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => 'talent',
            
        ]);

        Session::flash('sukses','SUKSES MEMBUAT AKUN TALENT');

        // mengembalikan session
        return redirect()->route('login');
    }
}
