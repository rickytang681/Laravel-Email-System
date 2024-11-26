<html>

<head>
    <link rel="stylesheet" href="css/inbox.css">
    <script src="{{ asset('js/showEmailDetails.js') }}"></script>
</head>

<body>
    @include('layouts.app')

    <div class="tab">
        @foreach ($emails as $email)
            <button class="tablinks" onclick="openCity(event, '{{ $email['header'] }}')">{{ $email['header'] }}</button>
        @endforeach
    </div>

    @foreach ($emails as $email)
        <div id="{{ $email['header'] }}" class="tabcontent">
            <h1>{{ $email['header'] }}</h1>
            <h4>{{ $email['created_at'] }}</h4>
            <p><b>{{ $email['sender_email'] }}</b></p>
            <hr>
            <p>{{ $email['content'] }}</p>
        </div>
    @endforeach

</body>

</html>
