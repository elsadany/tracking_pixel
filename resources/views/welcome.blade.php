<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tracking Pixel</title>
</head>
<body>
    <h1>Welcome to Tracking Pixel Example</h1>

    <!-- Embed the tracking pixel -->
    <img src="{{ route('track') }}?page_url={{ urlencode(url()->current()) }}" alt="" style="display:none;">
</body>
</html>