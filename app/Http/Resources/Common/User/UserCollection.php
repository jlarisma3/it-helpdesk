<?php

namespace App\Http\Resources\Common\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->collection->map(function ($item) {
            return [
                'id' => $item->id,
                'display_name' => $item->display_name,
                'branch' => $item->branch->name,
                'department' => $item->department->name,
                'email' => $item->email
            ];
        })->toArray();

        //return parent::toArray($request);
    }
}
