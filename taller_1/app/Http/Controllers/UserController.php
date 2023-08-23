<?php

namespace App\Http\Controllers;

use App\Models\CustomUser;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view('users.index');
    }

    public function list(): View
    {
        $viewData = [];
        $viewData['title'] = 'Users list';
        $viewData['users'] = CustomUser::all();

        return view('users.list')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $user = CustomUser::findOrFail($id);
        $viewData['title'] = $user['name'].' - Detailed Info';
        $viewData['user'] = $user;

        return view('users.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Users creating section';

        return view('users.create')->with('viewData', $viewData);
    }

    public function save(Request $request): \Illuminate\View\View
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'balance' => 'required',
            'role' => 'required',

        ]);

        CustomUser::create($request->only(['name', 'email', 'password', 'address', 'balance', 'role' ]));

        return view('users.success');

    }

    public function delete($id)
    {
        $userDelete = CustomUser::findOrFail($id);
        $userDelete->delete();
        return redirect(route('users.list'));
    }
}
