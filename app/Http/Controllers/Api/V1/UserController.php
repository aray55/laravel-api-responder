<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Helpers\ApiResponse;
use App\Helpers\StatusCodes;

class UserController extends Controller
{
    protected $users = [
        ['id' => 1, 'name' => 'Ali', 'email' => 'ali@example.com'],
        ['id' => 2, 'name' => 'Sara', 'email' => 'sara@example.com'],
    ];

    public function index()
    {
        return ApiResponse::success(
            'Users fetched successfully',
            $this->users,
            StatusCodes::HTTP_OK
        );
    }

    public function show(string $id)
    {
        $user = collect($this->users)->firstWhere('id', (int)$id);

        if (!$user) {
            return ApiResponse::error(
                'User not found',
                [],
                StatusCodes::HTTP_NOT_FOUND
            );
        }

        return ApiResponse::success(
            'User fetched successfully',
            $user
        );
    }

    public function store()
    {
        // Simulate creating a new user
        $newUser = ['id' => 3, 'name' => 'New User', 'email' => 'new@example.com'];

        return ApiResponse::success(
            'User created successfully',
            $newUser,
            StatusCodes::HTTP_CREATED
        );
    }
}
