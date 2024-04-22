<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryOrder extends Model
{
    use HasFactory;
    protected $table = 'delivery_order';
    protected $guard = [];
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'item',
        'qty',
        'um',
        'ship_to',
        'postalcode_from',
        'postalcode_to',
        'address',
        'notes',
        'status_approval',
        'reason_approval',
        'tanggal_approval',
        'delivery_date',
        'price',
        'courier',
        'service_type',
        'deleted_at',
        'is_deleted',
        'created_by',
        'created_at',
        'updated_at',
    ];
    
}
