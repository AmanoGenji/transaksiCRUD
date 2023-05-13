<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class M_transaksi extends Model
{
    use softDeletes;

    protected $table = 'transaksi';
    protected $fillable = [
        'nama_pembeli','nama_barang','harga_barang','email_pembeli','jumlah_barang','total_harga_barang'];

    protected $hidden;
    

}
