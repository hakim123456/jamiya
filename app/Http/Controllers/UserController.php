<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    
public function index()
{
    $users = User::all();
    return view('users.index', compact('users'));
}

public function create()
{
    return view('users.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ]);

    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password'));
    $user->save();

    return redirect()->route('users.index')
        ->with('success', 'User created successfully.');
}
public function show(User $user)
{
    return view('users.show', compact('user'));
}

public function edit(User $user)
{
    return view('users.edit', compact('user'));
}

public function update(Request $request, User $user)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,'.$user->id,
        'password' => 'nullable|min:6',
    ]);

    $data = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
    ];

    if ($request->filled('password')) {
        $data['password'] = Hash::make($request->input('password'));
    }

    $user->update($data);

    return redirect()->route('users.index')
        ->with('success', 'User updated successfully.');
}
public function destroy(User $user)
{
    $user->delete();

    return redirect()->route('users.index')
        ->with('success', 'User deleted successfully.');
}
}
