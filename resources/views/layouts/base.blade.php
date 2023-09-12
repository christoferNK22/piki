<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title }} - PIKI</title>
    @include('layouts.admin-partials.css')
</head>

<body>
    {{ $slot }}
    @include('layouts.admin-partials.scripts')
</body>

</html>
