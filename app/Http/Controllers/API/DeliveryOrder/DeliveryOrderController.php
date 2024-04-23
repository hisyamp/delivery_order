<?php

namespace App\Http\Controllers\API\DeliveryOrder;

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
    
    public function delivery_order_all()
    {
        // $data = DeliveryOrder::where('created_at','=',$time)->get();
        try {
            $data = DeliveryOrder::all();
            return response()->json(["status"=>true,"message"=>"Success !","data"=>$data ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function delivery_order_by_status($status)
    {
        // $data = DeliveryOrder::where('created_at','=',$time)->get();
        try {
            $data = DeliveryOrder::where("status","=", $status)->get();
            return response()->json(["status"=>true,"message"=>"Success !","data"=>$data ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    
    public function approval(Request $request)
    {
        try {
            if($request->status != "approve"&&$request->status != "revise"&&$request->status != "reject") return response()->json(["status"=>false,"message"=>"Data not match..","data"=>$request->status],400);
            $validatedData = $request->validate([
                'reason_approval' => 'string|max:255|min:3',
                'status' => 'string|max:50|min:3',
            ]);
            $data = DeliveryOrder::find($request->id);
            if($data) {
                if($request->status != "Approve") $data->reason_approval = $validatedData['reason_approval']; 
                $data->status = $validatedData['status'];               
                $data->save();
                return response()->json([
                    "status"=>true,
                    "message"=>"Success to update data",
                    "data"=>$data
                ],200);
            }
            return response()->json([
                "status"=>false,
                "message"=>"Failed to update data",
            ],400);
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
