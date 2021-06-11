<?php
/**
 * Se usa solo para gestionar los roles de los usuarios
 *
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * UserController constructor.
     *
     */
    public function __construct()
    {
        $this->middleware('can:admin.r_users.index')->only("index");
        $this->middleware('can:admin.r_users.edit')->only('edit', 'update');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('admin.r_users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $r_user
     * @return Application|Factory|View|Response
     */
    public function edit(User $r_user)
    {
        $roles = Role::all();
        return view('admin.r_users.edit', compact('r_user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $r_user
     * @return RedirectResponse
     */
    public function update(Request $request, User $r_user): RedirectResponse
    {
        $r_user->roles()->sync($request->roles);
        return redirect()->route('admin.r_users.index')->with('status', 'Se ha actualizado el rol del usuario.');
    }

}
