<?php

namespace App\Repositories\Common\Branch;

use App\Models\Common\Branch\Department;
use App\Repositories\Contracts\RepoInterface;
use App\Repositories\Contracts\Traits\RepoTrait;
use Illuminate\Http\Request;

/**
 * Class DepartmentRepository
 *
 * @package App\Repositories\Common\Branch
 */
class DepartmentRepository implements RepoInterface
{
    use RepoTrait;

    /**
     * @return $this|mixed
     */
    public function init()
    {
        $this->set(new Department);

        return $this;
    }

    public function all(Request $request) {}
}
