<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    Hello Admin, {{ session('email') }}
                </div>
            </div>


            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">Primary Admin List</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Operation</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $admin)
                                        <tr>
                                            <td>{{ $admin->id }}</td>
                                            <td>{{ $admin->name }}</td>
                                            <td>{{ $admin->email }}</td>
                                            <td><a href={{ 'deleteAdmin/' . $admin['id'] }}
                                                    class="btn btn-danger btn-sm">Delete</a></td>
                                            <td><a href={{ '/edit-admin/' . $admin['id'] }}
                                                    class="btn btn-danger btn-sm">Update</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="register/admin" class="btn btn-light float-right">Add Primary Admin</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white">User List</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Operation</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td><a href={{ '/deleteUser/' . $user['id'] }}
                                                    class="btn btn-danger btn-sm">Delete</a></td>
                                            <td><a href={{ '/edit-user/' . $user['id'] }}
                                                    class="btn btn-danger btn-sm">Update</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="register/addUser" class="btn btn-light float-right">Add User</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white">Secondary Admin List</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Operation</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($authors as $author)
                                        <tr>
                                            <td>{{ $author->id }}</td>
                                            <td>{{ $author->name }}</td>
                                            <td>{{ $author->email }}</td>
                                            <td><a href={{ 'deleteAuthor/' . $author['id'] }}
                                                    class="btn btn-danger btn-sm">Delete</a></td>
                                            <td><a href={{ '/edit-author/' . $author['id'] }}
                                                    class="btn btn-danger btn-sm">Update</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="register/author" class="btn btn-light float-right">Add Secondary Admin</a>
                        </div>
                    </div>
                </div>

                <div class="mt-3 d-flex justify-content-end">
                    <a href="logout" class="btn btn-light">LOGOUT</a>
                </div>
            </div>
        </div>
    </div>
</body>
