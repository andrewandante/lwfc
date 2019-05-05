<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transfer extends Model
{
  protected $table = 'transfers';

  public const FIELD_COST = 'cost';

  public const REL_PLAYER_IN = 'player_in_id';
  public const REL_PLAYER_OUT = 'player_out_id';
  public const REL_TEAM = Team::FIELD_REF;

  public function playerIn(): HasOne
  {
    return $this->hasOne(Player::class, self::REL_PLAYER_IN);
  }

  public function playerOut(): HasOne
  {
    return $this->hasOne(Player::class, self::REL_PLAYER_OUT);
  }

  public function team(): HasOne
  {
    return $this->hasOne(Team::class);
  }

  public function getCost(): int
  {
    return $this->getAttribute(self::FIELD_COST);
  }

  public function setCost(int $cost): self
  {
    return $this->setAttribute(self::FIELD_COST, abs($cost));
  }

}