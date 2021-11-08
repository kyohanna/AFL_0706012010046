<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentee extends Model
{
    use HasFactory;
    protected $table = "mentees";
    protected $primaryKey = "id";
    protected $fillable = ['nama', 'angkatan','mentor' ,'dosenpa'];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class,'mentor','nama' );
    }

}
