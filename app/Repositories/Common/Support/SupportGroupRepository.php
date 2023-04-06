<?php

namespace App\Repositories\Common\Support;

use App\Models\Common\Support\SupportGroup;
use App\Repositories\Contracts\RepoInterface;
use App\Repositories\Contracts\Traits\RepoTrait;
use Illuminate\Http\Request;

/**
 * Class SupportGroupRepository
 *
 * @package App\Repositories\Common\Support
 */
class SupportGroupRepository implements RepoInterface
{
    use RepoTrait;

    /**
     * @return $this|mixed
     */
    public function init()
    {
        $this->set(new SupportGroup);

        return $this;
    }

    public function all(Request $request) {}
}
