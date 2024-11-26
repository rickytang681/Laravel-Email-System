<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Author;

class UserController extends Controller
{
    public function getUsers()
    {
        $user = User::all();
        $admin = Admin::all();
        $author = Author::all();
        return view("admin", ['users' => $user, 'admins' => $admin, 'authors' => $author]);

    }

    function deleteUser($id)
    {
        $data = User::find($id);
        if(Gate::allows("isAdmin")){
            $data->delete();
        }else{
            dd("You are not isAdmin");
        }
        return redirect("admin");
    }

    function deleteAdmin($id)
    {
        $data = Admin::find($id);
        if(Gate::allows("isAdmin")){
            $data->delete();
        }else{
            dd("You are not isAdmin");
        }
        return redirect("admin");
    }

    function deleteAuthor($id)
    {
        $data = Author::find($id);
        if(Gate::allows("isAdmin")){
            $data->delete();
        }else{
            dd("You are not isAdmin");
        }
        return redirect("admin");
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id); // Find user by ID
        return view("edit-user", ['user' => $user]);
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,' . $user->id, 
        ]);

        $user->update($validatedData);

        return redirect("admin")->with('success', 'User information updated successfully!');
    }

    public function editAdmin($id)
    {
        $admin = Admin::findOrFail($id); // Find user by ID
        return view("edit-admin", ['admin' => $admin]);
    }

    public function updateAdmin(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,' . $admin->id, 
        ]);

        $admin->update($validatedData);

        return redirect("admin")->with('success', 'Admin information updated successfully!');
    }


    public function editAuthor($id)
    {
        $author = Author::findOrFail($id); // Find user by ID
        return view("edit-author", ['author' => $author]);
    }

    public function updateAuthor(Request $request, $id)
    {
        $author = Author::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,' . $author->id, 
        ]);

        $author->update($validatedData);

        return redirect("admin")->with('success', 'Author information updated successfully!');
    }


}
