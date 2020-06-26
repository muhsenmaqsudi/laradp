<?php


namespace App\Repositories;


use App\Repositories\Eloquent\Base\EloquentRepositoryInterface;
use Illuminate\Support\Collection;

interface UserRepositoryInterface extends EloquentRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;
}
