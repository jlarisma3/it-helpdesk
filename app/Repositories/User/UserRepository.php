<?php

namespace App\Repositories\User;

use App\Models\User\User as User;
use App\Repositories\Contracts\RepoInterface;
use App\Repositories\Contracts\Traits\RepoTrait;
use Illuminate\Http\Request;

/**
 * Class UserRepository
 *
 * @package App\Repositories\User
 */
class UserRepository implements RepoInterface
{
    use RepoTrait;

    public function init()
    {
        $this->set(new User);

        return $this;
    }

    public function all(Request $request)
    {
        $query = $this->model->with(['branch', 'department']);

        if($sort = $request->query('sort')) {
            $sort = json_decode($sort);
            $query = $query->orderBy($sort->column == 'display_name' ? 'first_name' : $sort->column, $sort->direction);
        }

        return $query->paginate(config('data.page_limit'));
    }
}
