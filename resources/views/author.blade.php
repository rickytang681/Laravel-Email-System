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
                    Hello Author, {{ session('email') }}
                </div>
            </div>

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">Message List</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Header</th>
                                        <th>Sender Email</th>
                                        <th>Recipient Email</th>
                                        <th>Content</th>
                                        <th>Operation</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $message)
                                        <tr>
                                            <td>{{ $message->header }}</td>
                                            <td>{{ $message->sender_email }}</td>
                                            <td>{{ $message->recipient_email }}</td>
                                            <td>{{ $message->content }}</td>
                                            <td><a href={{ 'deleteMessage/' . $message['id'] }}
                                                    class="btn btn-danger btn-sm">Delete</a></td>
                                            <td><a href={{ 'updateMessage/' . $message['id'] }}
                                                    class="btn btn-danger btn-sm">Update</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
