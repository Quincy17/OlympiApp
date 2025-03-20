<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogsModel extends Model
{
    use HasFactory;

    protected $table = 'logs'; // Menyesuaikan dengan nama tabel
    protected $fillable = ['user_id', 'activity', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
