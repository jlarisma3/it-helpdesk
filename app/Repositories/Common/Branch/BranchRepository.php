<?php

namespace App\Repositories\Common\Branch;

use App\Models\Common\Branch\Branch;
use App\Repositories\Contracts\RepoInterface;
use App\Repositories\Contracts\Traits\RepoTrait;
use Illuminate\Http\Request;

/**
 * Class BranchRepository
 *
 * @package App\Repositories\Common\Branch
 */
class BranchRepository implements RepoInterface
{
    use RepoTrait;


    /**
     * @return $this|mixed
     */
    public function init()
    {
        $this->set(new Branch);

        return $this;
    }

    public function all(Request $request) {}
}
