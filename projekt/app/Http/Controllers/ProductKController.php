<?php

namespace App\Http\Controllers;

use App\ProductK;
use App\Http\Resources\ProductK as ProductKResource;

class ProductKController extends Controller
{
    public function show ($id)
    {
        return new ProductKResource(ProductK::find($id));
    }
}