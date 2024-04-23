<?php

namespace App\Http\Controllers\DeliveryOrder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DeliveryOrder;
use App\Models\Provinces;
use App\Models\Kodepos;
use App\User;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Illuminate\Support\Facades\DB;


class DeliveryOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function list_delivery_order()
    {
        $role = auth::user()->role;
        // dd($role);
        return view('delivery_order.list_delivery_order',compact('role'));
    }

    public function form_delivery_order()
    {
        $role = auth::user()->role;
        $provinces = DB::table('tbl_kodepos')->select('provinsi')->distinct()->get();
        $apiKey = env('API_KEY');
        
        $delivery_order = DeliveryOrder::all();
        // dd($delivery_order);
        return view('delivery_order.form_delivery_order',compact('role','delivery_order','provinces','apiKey'));
    }

    public function api_log_delivery_order()
    {
        // $data = DeliveryOrder::where('created_at','=',$time)->get();
        $data = DeliveryOrder::all();
        return DataTables::of($data)->make(true);
    }
    
    public function delivery_order(Request $request)
    {
        try {
            // return response()->json($request->all());
            $data = DeliveryOrder::create($request->all());
            if(!$data) {
                return response()->json([
                    "status"=>false,
                    "message"=>"Failed to insert data"
                ]);
            }
            return response()->json([
                "status"=>true,
                "message"=>"Success to insert data",
                "data"=>$data
            ]);
        } catch (\Throwable $th) {
            return response()->json(["message"=>$th->getMessage()],400);
        }
    }

    public function delivery_order_by_id($id)
    {
        // $data = DeliveryOrder::where('created_at','=',$time)->get();
        $data = DeliveryOrder::select('delivery_order.*','tk.kelurahan as kelurahan_from','tk.kecamatan as kecamatan_from','tk.provinsi as provinsi_from','tk.kabupaten as kabupaten_from','tk2.kelurahan as kelurahan_to','tk2.kecamatan as kecamatan_to','tk2.provinsi as provinsi_to','tk2.kabupaten as kabupaten_to')
        ->join('tbl_kodepos as tk', 'tk.kodepos', '=', 'delivery_order.postalcode_from')
        ->join('tbl_kodepos as tk2', 'tk2.kodepos', '=', 'delivery_order.postalcode_to')
        ->where("delivery_order.id","=",$id)->first();
        return response()->json($data);
    }
}
