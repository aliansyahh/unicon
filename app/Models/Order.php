<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected  $fillable = [
        "nama_awal",
        "nama_belakang",
        "tmpt_lahir",
        "tgl_lahir",
        "email",
        "nomor_hp",
        "alamat",
        "status",
        "transaction_id",
        "order_id",
        "qty",
        "gross_amount",
        "payment_type",
        "payment_code",
        "pdf_url",
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
