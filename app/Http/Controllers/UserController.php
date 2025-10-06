<?php

namespace App\Http\Controllers;

use App\Contracts\UserServiceInterface;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $userService;

    public function __construct(UserServiceInterface $userServiceInterface){
        $this->userService = $userServiceInterface;
    }

    public function index()
    {
        //
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
    public function update(Request $request)
    {
        $userId = Auth::user()->userId;
        $data = $request->validate([
            'userType' => ['required'],
            'name' => ['required'],
            'email' => ['required', 'email'],
        ]);

        if($data){
            $this->userService->update($userId, $data['userType'], $data['name'], $data['email']);
            return redirect()->route('dashboard')
                ->with('success', 'User updated');
        }

        return back()->withErrors(['email', 'Invalid credentials']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
