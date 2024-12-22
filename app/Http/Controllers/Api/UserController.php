<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // Get all users
    public function index()
    {
        $users = User::all(); // Get all users from the database
        return response()->json($users); // Return JSON response
    }

    // Get a single user by ID
    public function show($id)
    {
        $user = User::find($id); // Find user by ID

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json($user); // Return user data as JSON
    }
}
