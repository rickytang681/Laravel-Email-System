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
                    <div class="card-header bg-primary text-white">User List</div>
                    <div class="card-body">
                        <form action="updateMessage" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$data['id']}}">
                            <div class="form-group">
                                <label for="header">Header:</label>
                                <input type="text" class="form-control" id="header" name="header"
                                    value="{{$data['header']}}">
                            </div>
                            <div class="form-group">
                                <label for="sender_email">Sender Email:</label>
                                <input type="email" class="form-control" id="sender_email" name="sender_email"
                                    value="{{$data['sender_email']}}">
                            </div>
                            <div class="form-group">
                                <label for="recipient_email">Recipient Email:</label>
                                <input type="email" class="form-control" id="recipient_email" name="recipient_email"
                                    value="{{$data['recipient_email']}}">
                            </div>
                            <div class="form-group">
                                <label for="content">Content:</label>
                                <textarea class="form-control" id="content" name="content"
                                    rows="3">{{$data['content']}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Message</button>
                        </form>
                    </div>
                </div>
                <div class="mt-3 d-flex justify-content-end">
                    <a href="logout" class="btn btn-light">LOGOUT</a>
                </div>
            </div>
        </div>
    </div>
</body>
