<head>
    <link rel="stylesheet" href="css/navbar.css  ">
</head>
<header>
    <h1 class="logo">CODEBLOGGER</h1>
    <input type="checkbox" id="nav-toggle" class="nav-toggle" />
    <nav>
        <ul>
            <li><a href="{{ route('newMessages') }}">New Message</a></li>
            <li><a href="{{ route('inbox') }}">Inbox</a></li>
            <li><a href="{{ route('welcome') }}">Quit</a></li>
        </ul>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
    </label>
</header>
