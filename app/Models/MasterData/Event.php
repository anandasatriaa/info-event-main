<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MasterData\Category;

use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // Declare:table
    public $table = 'event';

    // this field must type date yyyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'instance',
        'time',
        'location',
        'category',
        'contact',
        'registration',
        'invite_group_link',
        'date_is_held',
        'description',
        'poster',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many
    public function users()
    {
        // 3 parameters (path models ,field foreign key dan field primary key dari tabel hasmany/hasone)
        return $this->belongsTo('App\Models\User','user_id','id');
    } 

    // one to many
    public function category()
    {
        // 3 parameters (path models ,field foreign key dan field primary key dari tabel hasmany/hasone)
        return $this->belongsTo('App\Models\MasterData\Category','category_id','id');
    }  
}
