<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentTalent;
use App\Models\PaymentClient;
use App\Models\ServiceTalent;
use App\Models\OrderService;
use App\Models\OrderTemp;
use App\Models\OrderDetail;
use App\Models\Talent;
use App\Models\Client;

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

    public function paymentTalentCreate() //membuat form untuk pembayaran talent
    {
        try {

            $serviceTalent = ServiceTalent::all();

            return view('admin.payment_talent_create', compact('serviceTalent'));
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function paymentTalentStore(Request $request) // membuat proses pembayaran talent
    {
        try {

            $serviceOrder = OrderService::findOrFail($request->service);
            $detailOrder = OrderDetail::findOrFail($serviceOrder->invoice);

            $talentFee = $serviceOrder->total_payment * (80 / 100);
            $adminFee = $serviceOrder->total_payment * (20 / 100);
            // $endService = $serviceOrder->duration;

            PaymentTalent::create([
                // 'talent_name' => $request->talent,
                // 'service' => $service->service_name,
                // 'start_service' => $request->start_service,
                // 'end_service' => $endService,
                // 'proof_of_transfer' => 'proof_of_transfer',
                // 'client_name' => $request->client,
                // 'price_service' => $service->price_service,
                // 'talent_fee' => $talentFee,
                // 'admin_fee' => $adminFee,
                // 'status' => 'status',

                'kode_id' => 'PY01',
                'kode_nomor' => 'masih belum betul',
                'order_id' => $serviceOrder->idService, //sort dengan nama id order
                'talent_nama' => $detailOrder->talent->nama, // nama talent
                'client_nama' => $detailOrder->client->nama, // nama client
                'total_bayar' => $serviceOrder->total_payment,
                'talent_fee' => $talentFee,
                'admin_fee' => $adminFee,
                'bukti_bayar' => 'masih belum betul',
                'status_bayar' => 'sukses',
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
            $selectClient = Client::all();

            return view(
                'admin.order_service_index',
                compact(
                    'orderService',
                    'orderTemp',
                    'serviceTalent',
                    'selectTalent',
                    'selectClient',
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

    public function orderServiceCreate(Request $request) // route('admin.os.create') proses form service order
    {
        try {
            //
            $latest = OrderService::orderBy('id', 'DESC')->first();
            if (!$latest) {
                $invoice = '0001';
            } else {
                $invoice = sprintf('%04d', $latest->invoice + 1);
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

            OrderTemp::query()->truncate(); //menghapus semua data yang ada

            $lastOrder = OrderService::latest()->first();
            $talentFee = $lastOrder->total_payment * (80 / 100);
            $adminFee = $lastOrder->total_payment * (20 / 100);

            PaymentTalent::create([
                'kode_id' => 'PT11',
                'kode_nomor' => '2202213',
                'order_id' => $lastOrder->id,
                'talent_nama' => 'Gwen',
                'client_nama' => 'Edward',
                'total_bayar' => $lastOrder->total_payment,
                'talent_fee' => $talentFee,
                'admin_fee' => $adminFee,
                'bukti_bayar' => 'text.jpg',
                'status_bayar'  => 'pending'
            ]);

            // PaymentClient::create([
            //     'client_id',
            //     'username_client',
            //     'nama_client',
            //     'noresi_bayar',
            //     'namaterang_bayar',
            //     'tanggal_bayar',
            //     'bukti_bayar',
            //     'metode_bayar',
            //     'metodedetail_bayar',
            //     'status_bayar',
            // ]);

            return redirect()->route('admin.os.index');
            // 
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function orderSeviceDetail($invoice) // menampilkan data di service tabel
    {
        try {
            //
            $paymentTalent = PaymentTalent::all();
            $paymentClient = PaymentClient::all();
            $orderDetail = OrderDetail::where('invoice', $invoice)->get();

            return view('admin.order_service_detail', compact(
                'paymentTalent',
                'paymentClient',
                'orderDetail',
            ));
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }
}
