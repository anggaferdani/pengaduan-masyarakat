<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduans';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'judul',
        'keterangan',
        'tanggal_pengaduan',
        'lampiran',
        'status_publikasi',
        'status_laporan_pengaduan',
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

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
