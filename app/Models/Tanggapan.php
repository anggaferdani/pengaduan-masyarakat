<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tanggapan extends Model
{
    use HasFactory;

    protected $table = 'tanggapans';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'pengaduan_id',
        'alamat_email_petugas',
        'tanggapan',
        'status_aktif',
        'created_by',
        'updated_by',
    ];

    protected static function booted(){
        static::creating(function($model){
            $model->created_by = Auth::id();
            $model->updated_by = Auth::id();
        });

        static::saving(function($model){
            $model->updated_by = Auth::id();
        });
    }

    public function pengaduans(){
        return $this->belongsTo(Pengaduan::class, 'pengaduan_id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'alamat_email_petugas');
    }
}
