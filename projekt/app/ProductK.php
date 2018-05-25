<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductK extends Model
{ 
  public function toArray()
{
    return [
        'id' => $this->id,
        'name' => $this->name,
        'price' => $this->price,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
    ];
}
}
