<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User PDF</title>
    <link type="text/css" href="{{ public_path('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>
<body>

                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <h1>Lista de Usuarios</h1>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae suscipit quod a recusandae ut cumque, nihil dolorem velit. Natus possimus minus unde eveniet amet tempora impedit blanditiis! Ducimus, iusto alias.</p>
                                <table id="table_id" class="table table-striped table-hover">
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
                            </div>
                        </div>

</body>
</html>
