<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">Admin List</div>
                    <div class="card-body">
                        <form action="{{ route('update.admin', $admin->id) }}" method="POST">
                            @csrf @method('PATCH')

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', $admin->name) }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email', $admin->email) }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Admin</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
