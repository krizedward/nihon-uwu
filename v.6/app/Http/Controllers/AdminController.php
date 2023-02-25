<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\PaymentTalent;
use App\Models\ServiceTalent;
use App\Models\OrderService;
use App\Models\OrderTemp;
use App\Models\OrderDetail;

class AdminController extends Controller
{
    // membuat perfunction untuk route website
    public function paymentTalentIndex()
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

    public function serviceTalentIndex()
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
            $orderService = OrderService::all();
            $orderTemp = OrderTemp::all();
            return view('admin.order_service_index', compact('orderService', 'orderTemp'));
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function orderTempCreate(Request $request)
    {
        try {
            //
            OrderTemp::create([
                'service_id' => 'null',
                'talent_id' => 'null',
                'service_name' => 'null',
                'service_price' => 'null',
                'qty' => 'null',
                'subtotal' => 'null',
                // 'subtotal' => $request->price * $request->qty,
            ]);

            return redirect()->route('admin.os.index');
            // 
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function orderServiceCreate(Request $request)
    {
        try {
            //
            $order = OrderService::create([
                'client_id' => 'null',
                'invoice' => 'null',
                'total_price' => 'null',
                'pay' => 'null',
                'note' => 'null',
            ]);
            $temp_order = OrderTemp::all();
            foreach ($temp_order as $item)
            {
                OrderDetail::create([
                    'service_id' => 'null',
                    'order_id' => 'null',
                    'service_name' => 'null',
                    'service_price' => 'null',
                    'qty' => 'null',
                    'subtotal' => 'null', 
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
}
