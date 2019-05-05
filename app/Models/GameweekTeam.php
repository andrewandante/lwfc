<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class GameweekTeam extends Model
{
  protected $table = 'gameweek_teams';

  public const FIELD_CAPTAIN_ID = 'captain_id';
  public const FIELD_USED_BENCH_BOOST = 'bench_boost';
  public const FIELD_USED_WILDCARD = 'wildcard';
  public const FIELD_USED_FREE_HIT = 'free_hit';
  public const FIELD_USED_TRIPLE_CAPTAIN = 'triple_captain';

  public function gameweek(): BelongsTo
  {
    return $this->belongsTo(Gameweek::class);
  }

  public function players(): HasMany
  {
    return $this->hasMany(Player::class);
  }

  public function captain(): HasOne
  {
    return $this->hasOne(Player::class, self::FIELD_CAPTAIN_ID);
  }

  public function team(): BelongsTo
  {
    return $this->belongsTo(Team::class);
  }

  public function getUsedBenchBoost(): bool
  {
    return $this->getAttribute(self::FIELD_USED_BENCH_BOOST);
  }

  public function setUsedBenchBoost(bool $used = true): self
  {
    return $this->setAttribute(self::FIELD_USED_BENCH_BOOST, $used);
  }
}