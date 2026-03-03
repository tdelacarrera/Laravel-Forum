<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $query = User::withCount('threads');
        
        if ($username = request('username')) {
            $query->where('name', 'like', "%{$username}%");
        }

        // Ordenar
        $sortBy = request('sort_by', 'id');
        $sortOrder = request('sort_order', 'desc');
        $query->orderBy($sortBy, $sortOrder);

        // Paginación
        $users = $query->paginate(40)->withQueryString();

        // Total de usuarios
        $totalUsers = User::count();

        return view('forum.users.index', compact('users', 'totalUsers'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
