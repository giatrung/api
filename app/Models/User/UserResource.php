<?php

namespace App\Models\User;

use App\Models\Contracts\BaseResource;

class UserResource extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(\Request $request): array
    {
        return [
            ...parent::toArray($request), 
            'detail' => $this->userDetail,
        ];
    }
}
