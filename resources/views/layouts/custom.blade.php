<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Include Tailwind CSS or any other styles here -->
</head>
<body>
    <div id="app">
        <!-- The slot variable should be defined inside the layout -->
        @yield('content')
    </div>
</body>
</html>
