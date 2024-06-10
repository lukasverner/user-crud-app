<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $query = User::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        $users = $query->get();

        return view('users.list', compact('users'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        return view('users.form', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        if ($request->get('role_admin')) {
            $user->role = 'admin';
        } else {
            $user->role = 'user';
        }

        $user->name = $request->get('name');
        $user->email = $request->get('email');

        $user->update((array)$request);

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $user = User::find($id);

        $user->delete();

        return redirect('/users');
    }
}
