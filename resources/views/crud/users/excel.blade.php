<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Email</th>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->cedula }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->Role->nombre }}</td>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Email</th>
            <th>Rol</th>
        </tr>
    </tfoot>
</table>
