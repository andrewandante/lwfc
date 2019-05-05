<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

  public const FIELD_NAME = 'name';
  public const FIELD_MANAGER_NAME = 'manager_name';
  public const FIELD_FPL_ID = 'fpl_id';
  public const FIELD_POINTS = 'points';

  public function getName(): string
  {
    return $this->getAttribute(self::FIELD_NAME);
  }

  public function setName(string $name): self
  {
    return $this->setAttribute(self::FIELD_NAME, $name);
  }

  public function getManagerName(): string
  {
    return $this->getAttribute(self::FIELD_MANAGER_NAME);
  }

  public function setManagerName(string $name): self
  {
    return $this->setAttribute(self::FIELD_MANAGER_NAME, $name);
  }

  public function getFplId(): int
  {
    return $this->getAttribute(self::FIELD_FPL_ID);
  }

  public function setFplId(int $id): self
  {
    return $this->setAttribute(self::FIELD_FPL_ID, $id);
  }

  public function getPoints(): int
  {
    return $this->getAttribute(self::FIELD_POINTS);
  }

  public function setPoints(int $id): self
  {
    return $this->setAttribute(self::FIELD_POINTS, $id);
  }
}