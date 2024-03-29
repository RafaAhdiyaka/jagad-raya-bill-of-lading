<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class shipment extends Model
{
    use HasFactory;
    protected $table = 'shipments';
    protected $guarded = [''];
    protected $dates = ['shipping_date'];

    public function transport(){
    return $this->belongsTo(transport::class);
    }
    public function good(){
    return $this->belongsTo(good::class);
    }
    public function consignee(){
        return $this->belongsTo(consignee::class);
    }
    public function shipper(){
        return $this->belongsTo(shipper::class);
    }
    public function job(){
        return $this->belongsTo(job::class);
    }
}
