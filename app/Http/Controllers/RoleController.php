<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::paginate();
        return view('crud.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('crud.roles.create');
    }


    public function store(Request $request)
    {
        $rules = [
            'nombre' => ['required', 'unique' => Rule::unique(Role::class),],
            'nombre_pantalla' => ['required', 'unique' => Rule::unique(Role::class),],
        ];

        $messages = [
            'nombre.required' => 'El nombre requerido',
            'nombre_pantalla.unique' => 'Nombre en pantalla ya registrado ',
            'nombre_pantalla.required' => 'Nombre en pantalla requerida',
            'nombre.unique' => 'Nombre ya registrado ',
        ];

        $this->validate($request, $rules, $messages);

        Role::create($request->all());

        return redirect()->route('roles.index')->with('info','El Rol se creó con éxito');
    }


    public function edit(Role $role)
    {
        return view('crud.roles.edit', compact('role'));
    }


    public function update(Request $request, Role $role)
    {
        $rules = [
            'nombre' => ['required'],
            'nombre_pantalla' => ['required']
        ];

        $messages = [
            'nombre.required' => 'El nombre requerido',
            'nombre_pantalla.required' => 'Nombre en pantalla requerida',
        ];

        $this->validate($request, $rules, $messages);

        Role::where('id',$role->id)->update(['nombre' => $request['nombre'],
                                             'nombre_pantalla' => $request['nombre_pantalla']]);

        return redirect()->route('roles.index')->with('info','El Rol se creó con éxito');
    }


    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('info','El Rol se elimino con éxito');
    }
}
