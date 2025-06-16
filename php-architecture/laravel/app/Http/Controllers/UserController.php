<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAll(): JsonResponse
    {
        $users = User::all();
        return response()->json($users, 200, [], JSON_UNESCAPED_UNICODE);
    }
    public function create(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['name'] . '@example.com',
            'password' => bcrypt('password'),
        ]);

        return response()->json($user, 201, [], JSON_UNESCAPED_UNICODE);
    }
    public function update(Request $request, $id): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $user = $this->findById($id);
        $user->update(['name' => $validated['name']]);
        return response()->json($user, 200, [], JSON_UNESCAPED_UNICODE);
    }
    public function delete($id): JsonResponse
    {
        $user = $this->findById($id);
        $user->delete();
        return response()->json(['message' => 'Пользователь удалён с id ' . $user['id']], 200, [], JSON_UNESCAPED_UNICODE);
    }
    private function findById($id): User
    {
        return User::findOrFail($id);
    }
}
