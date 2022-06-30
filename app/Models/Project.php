<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function pricing_type()
    {
        return $this->belongsTo(PricingType::class, 'pricing_type_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
