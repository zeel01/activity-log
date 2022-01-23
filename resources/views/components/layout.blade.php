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
            <h1>Activity Log</h1>
            <nav>
                <a href="/activities">Activities</a>
                <a href="/activities/create">Create Activity</a>
            </nav>
        </header>
		<main class="{{ $class }}">
            {{ $slot }}
        </main>
        <footer>

        </footer>
    </body>
</html>
