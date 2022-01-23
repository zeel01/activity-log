<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ $title ?? "Activity Log" }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <a href="{{ route('activities.index') }}">
                <h1>Activity Log</h1>
            </a>
            <nav>
                <a href="{{ route('activities.index') }}">Activity List</a>
                <a href="{{ route('activities.create') }}">Create New Activity</a>
            </nav>
        </header>
		<main class="{{ $class }}">
            {{ $slot }}
        </main>
        <footer>
            <div class="copyright">Copyright &copy; {{ date('Y') }} Josh Olsen</div>
            <div class="links">
                <a href="https://lordzeel.com">lordzeel.com</a>
            </div>
        </footer>
    </body>
</html>
