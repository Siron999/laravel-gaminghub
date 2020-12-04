<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Game extends Model
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
          'games.name' => 10,
          'games.genre' => 10,
          'games.details' => 5,
          
      ],
      
  ];

    use HasFactory;
    protected $table='games';
    //protected $casts=[
      //      'genre'=>'array'
        //];
    protected $fillable=['name','price','genre','details','pic'];

    
}
