<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('components.style')
</head>

<body id="body" data-bs-spy="scroll" data-bs-target="navbar" data-bs-offset="100">
    @include('components.navbar')
    @yield('content')
    @include('components.footer')
    @include('components.script')
</body>

</html>
