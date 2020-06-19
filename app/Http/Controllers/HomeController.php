<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','age']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Role::create(['name'=>'Writer']);
        //$permission = Permission::create(['name' => 'write articles']);
//        $role=Role::find(1);
//        $permission =Permission::all();
//        $role->givePermissionTo($permission);
        // $permission->assignRole($role);
        return view('home');
    }
}
