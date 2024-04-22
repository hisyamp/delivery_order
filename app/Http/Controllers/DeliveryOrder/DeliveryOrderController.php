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
        // dd($provinces);
        $delivery_order = DeliveryOrder::all();
        return view('delivery_order.form_delivery_order',compact('role','delivery_order','provinces'));
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
        $data = DeliveryOrder::find($id);
        return response()->json($data);
    }
}
