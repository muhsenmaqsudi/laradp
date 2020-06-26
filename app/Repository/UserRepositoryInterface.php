<?php


namespace App\Repository;


use App\Repository\Eloquent\Base\EloquentRepositoryInterface;
use Illuminate\Support\Collection;

interface UserRepositoryInterface extends EloquentRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;
}
