<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UsuariosController extends Controller
{

    public function index()
    {
        $users = User::paginate();
        return view('crud.users.index', compact('users'));
    }

    public function pdf()
    {
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $users = User::paginate();
        $pdf = Pdf::loadView('crud.users.pdf', ['users'=>$users]);
        return $pdf->download('Usuarios.pdf');
    }

    public function excel()
    {
        return Excel::download(new UsersExport, 'usuarios.xlsx');
    }

    public function create()
    {
        $roles = Role::pluck('nombre','id');
        return view('crud.users.create', compact('roles'));
    }


    public function store(Request $request)
    {
        $rules = [
            'nombre' => 'required',
            'cedula' => ['required', 'unique' => Rule::unique(User::class),],
            'email' =>  ['required','string','email','max:255','unique' => Rule::unique(User::class),],
            'password' => 'required',
        ];

        $messages = [
            'nombre.required' => 'El nombrees requerido',
            'cedula.unique' => 'Cedula ya registrado ',
            'cedula.required' => 'Cedula requerida',
            'email.unique' => 'correo ya registrado ',
            'email.required' => 'correo requerido',
            'password.required' => 'contraseña requerida',
        ];

        $this->validate($request, $rules, $messages);

        User::create([
            'nombre' => $request['nombre'],
            'cedula' => $request['cedula'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'rol_id' => $request['role_id'],
        ]);

        return redirect()->route('users.index')->with('info','El Usuario se creó con éxito');
    }


    public function edit($id)
    {
        $User = User::find($id);
        $roles = Role::all();
        return view('crud.users.edit', compact('User','roles'));
    }


    public function update(Request $request,User $user)
    {
        $rules = [
            'nombre' => 'required',
            'cedula' => ['required', 'unique' => Rule::unique(User::class),],
            'email' =>  ['required','string','email','max:255','unique' => Rule::unique(User::class),],
            'password' => 'required',
        ];

        $messages = [
            'nombre.required' => 'El nombres requerido',
            'cedula.unique' => 'Cedula ya registrado ',
            'cedula.required' => 'Cedula requerida',
            'email.unique' => 'correo ya registrado ',
            'email.required' => 'correo requerido',
            'password.required' => 'contraseña requerida',
        ];

        $this->validate($request, $rules, $messages);

        User::update([
            'nombre' => $request['nombre'],
            'cedula' => $request['cedula'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'rol_id' => $request['role_id'],
        ]);

        return redirect()->route('users.index')->with('info','El Usuario se creó con éxito');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('info','El Usuario se elimino con éxito');
    }
}
