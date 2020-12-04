<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
  use SearchableTrait;

  /**
   * Searchable rules.
   *
   * @var array
   */
  protected $searchable = [
      /**
       * Columns and their priority in search results.
       * Columns with higher values are more important.
       * Columns with equal values have equal importance.
       *
       * @var array
       */
      'columns' => [
          'products.name' => 10,
          'products.type' => 10,
          'products.details' => 5,
          
      ],
      
  ];


    use HasFactory;
    protected $table='products';
    //protected $casts=[
      //      'genre'=>'array'
        //];
    protected $fillable=['name','price','type','details','pic'];
}
