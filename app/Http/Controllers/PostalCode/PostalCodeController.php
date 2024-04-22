<?php

namespace App\Http\Controllers\PostalCode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DeliveryOrder;
use App\Models\Provinces;
use App\Models\Kodepos;
use App\User;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Illuminate\Support\Facades\DB;


class PostalCodeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function regencies_by_province($val)
    {
        $data = Kodepos::select('kabupaten')
        ->where('provinsi','=',$val)->distinct()->get();
        return response()->json($data);
    }

    public function district_by_regencies($val)
    {
        $data = Kodepos::select('kecamatan')
        ->where('kabupaten','=',$val)->distinct()->get();
        return response()->json($data);
    }

    public function villages_by_district($val)
    {
        $data = Kodepos::select('kelurahan','kodepos')
        ->where('kecamatan','=',$val)->distinct()->get();
        return response()->json($data);
    }

}
