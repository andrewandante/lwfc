<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Score extends Model
{
  protected $table = 'scores';

  public const FIELD_POINTS = 'points';

  public function player(): BelongsTo
  {
    return $this->belongsTo(Player::class);
  }

  public function gameweek(): BelongsTo
  {
    return $this->belongsTo(Gameweek::class);
  }
}