<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Orders extends Model
{
    use HasFactory;

    //order model
    // public function toSearchableArray()
    // {
    //     $array = [
    //          'id' => $this->id,
    //         'order_number' => $this->order_number,
    //         'user_name' => $this->user_name,
    //         'user_email' => $this->user_email,
    //         'user_phone' => $this->user_phone,
    //     ];

    //     return $array;
    // }


    public function scopeSearch($query, $searchTerm)
    {

        $searchFields = ['order_number', 'user_name', 'user_email', 'user_phone'];
        $eagerLoadRelationships = ['user', 'product'];
        
        return   $query->where(function ($query) use ($searchFields, $searchTerm) {
            foreach ($searchFields as $field) {
                $query->orWhere($field, 'like', "%{$searchTerm}%");
            }
        })->with($eagerLoadRelationships);

    }

}
