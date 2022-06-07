<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookEvaluator extends Model
{
    use HasFactory;
    protected $guarded =[];
    // protected $fillable = [
    //     'evaluator_id',
    //     'user_id',
    //     'book__coache_id',
    //     'Rateing'
    // ];
    public function get_bookedEvaluator()
    {
        return $this->belongsTo(User::class,'evaluator_id');
    }

    public function get_bookedStudentByEvaluator()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function get_bookedEvaluatorRating()
    {
        return $this->hasMany(EvaluatorRateing::class,'card_id');
        // return $this->hasMany(EvaluatorRateing::class,'book__coache_id');

    }

    public function get_rating_by_evualator()
    {
        return $this->hasMany(Rateing::class,'user_id','user_id');
    }
    public function get_rating_by_evualator_for_Studentlist()
    {
        return $this->hasMany(ratinByEvaluator::class,'card_id');
        // return $this->hasMany(Rateing::class,'user_id','user_id');
    }
    public function admin_show_Students_for_Evaluator()
    {
        return $this->belongsTo(User::class,'user_id');
    }


}
