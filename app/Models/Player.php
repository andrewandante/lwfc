<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
  protected $table = 'players';

  public const FIELD_FPL_ID = 'fpl_id';
  public const FIELD_NAME = 'name';
  public const FIELD_POSITION = 'position';
}