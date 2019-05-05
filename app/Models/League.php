<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class League extends Model
{

  protected $table = 'leagues';

  public const FIELD_NAME = 'name';
  public const FIELD_FPL_ID = 'fpl_id';

  public function teams(): HasMany
  {
    return $this->hasMany(Team::class);
  }

}