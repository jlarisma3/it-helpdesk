<?php

namespace App\Services\Common;

use App\Models\Common\Branch\Branch;
use App\Models\Common\Branch\Department;
use App\Models\Common\Support\SupportGroup;
use App\Models\User\Role\Role;
use App\Models\User\Status\Status;

class StaticData
{
    /**
     * @param $key
     * @return array|mixed
     */
    public function userStaticData($key = null)
    {
        $data = [
            'branches' => Branch::orderBy('name', 'asc')->get(),
            'departments' => Department::orderBy('name', 'asc')->get(),
            'status' => Status::orderBy('name', 'asc')->get(),
            'roles' => Role::orderBy('name', 'asc')->get(),
            'groups' => SupportGroup::orderBy('name', 'asc')->get()
        ];

        return is_null($key) ? $data : $data[$key];
    }
}
