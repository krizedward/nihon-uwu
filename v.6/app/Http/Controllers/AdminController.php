<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentTalent;
use App\Models\ServiceTalent;
use App\Models\OrderService;
use App\Models\OrderTemp;
use App\Models\OrderDetail;
use App\Models\Talent;

class AdminController extends Controller
{
    
    public function paymentTalentIndex() // membuat perfunction untuk route website
    {
        try {

            $paymentTalent = paymentTalent::all();
            return view('admin.payment_talent_index', compact('paymentTalent'));
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function paymentClientIndex()
    {
        try {

            return "hello";
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function paymentTalentCreate()
    {
        try {

            $serviceTalent = ServiceTalent::all();

            return view('admin.payment_talent_create', compact('serviceTalent'));
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function paymentTalentStore(Request $request)
    {
        try {

            $service = ServiceTalent::findOrFail($request->service);

            $talentFee = $service->price_service * (80 / 100);
            $adminFee = $service->price_service * (20 / 100);
            $endService = $service->duration;

            PaymentTalent::create([
                'talent_name' => $request->talent,
                'service' => $service->service_name,
                'start_service' => $request->start_service,
                'end_service' => $endService,
                'proof_of_transfer' => 'proof_of_transfer',
                'client_name' => $request->client,
                'price_service' => $service->price_service,
                'talent_fee' => $talentFee,
                'admin_fee' => $adminFee,
                'status' => 'status',
            ]);

            return redirect()->route('admin.tp.index');
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function serviceTalentIndex() // menampilkan service untuk talent yang diservice
    {
        try {

            $serviceTalent = ServiceTalent::all();
            return view('admin.service_talent_index', compact('serviceTalent'));
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function orderServiceIndex()
    {
        try {
            //
            $serviceTalent = ServiceTalent::all();
            $orderService = OrderService::all();
            $orderTemp = OrderTemp::all();
            $selectTalent = Talent::all();
            return view(
                'admin.order_service_index',
                compact(
                    'orderService',
                    'orderTemp',
                    'serviceTalent',
                    'selectTalent',
                )
            );
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function orderTempCreate(Request $request) //proses form temp order
    {
        try {
            //
            $service = ServiceTalent::findOrFail($request->service);

            OrderTemp::create([
                'client_id' => $request->client,
                'talent_id' => $request->talent,
                'price_service' => $service->price_service,
                'qty_service' => $request->jumlah,
                'start_service' => $request->start_service,
                'end_service' => $request->start_service,
                'subtotal_service' => $service->price_service * $request->jumlah,
            ]);

            return redirect()->route('admin.os.index');
            // 
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function orderTempDelete($id)
    {
        try {
            //
            $idTemp = OrderTemp::find($id);
            // return dd($idTemp);

            $idTemp->delete();

            return redirect()->route('admin.os.index');
            //
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function orderServiceCreate(Request $request) // proses form service order
    {
        try {
            //
            $latest = OrderService::orderBy('id','DESC')->first();
            if(!$latest) {
                $invoice = '0001';
            } else {
                $invoice = sprintf('%04d',$latest->invoice + 1);
            }

            $temp_order = OrderTemp::all();

            $order = OrderService::create([
                'invoice' => $invoice,
                'start_service' => '2023-02-02',
                'end_service' => '2023-02-02',
                'total_payment' => $request->total,
                'status_order' => 'Pending',
            ]);
            
            foreach ($temp_order as $item) {
                OrderDetail::create([
                    'invoice' => $invoice,
                    'order_id' => $order->id,
                    'client_id' => $item->client_id,
                    'talent_id' => $item->talent_id,
                    'price_service' => $item->price_service,
                    'qty_service' => $item->qty_service,
                    'start_service' => $item->start_service,
                    'end_service' => $item->end_service,
                    'subtotal_service' => $item->subtotal_service,
                    'status_service' => 'Undone',
                ]);
            }

            OrderTemp::query()->truncate();
            return redirect()->route('admin.os.index');
            // 
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function orderSeviceDetail($id) // menampilkan data di service tabel
    {
        try{
            //
            return view('admin.order_service_detail');

        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }
}
