<?php


namespace App\Repositories\Eloquent;


use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\UserRepositoryInterface;
use App\User;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }
}
