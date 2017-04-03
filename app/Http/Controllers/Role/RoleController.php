<?php

namespace App\Http\Controllers\Role;


use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class RoleController extends Controller
{
    public function index()
    {
    }
    public function getAll(){
        return DB::table('role')->select('name')->get();
    }
    protected function create(array $data)
    {
        DB::table('role')->insert(
            ['name' => $data['name']]
        );
    }
    public function getRegister(){
        return view('role/create');
    }
    public function getList(){
        return view('role/list');
    }
    public function postRegister(Request $request){
        $this->create(
            ['name'=>$request->input('name')]
        );

        $role =  $this->getAll();
        return view('role.list')->withRoles($role);
    }
}
