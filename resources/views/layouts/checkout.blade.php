<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('checkout-title')</title>

    <!-- Includes Style -->
    @include('includes.style')
    <!-- Includes Styles -->

    <!-- Pages Checkout Add-on Style -->
    @stack('addon-style')
    <!-- Pages Checkout Add-on Style -->
</head>
<body>
    <!-- Includes Navbar -->
    @include('includes.navbar')
    <!-- Includes Navbar -->

    <!-- Pages Checkout -->
    @yield('checkout-content')
    <!-- Pages Checkout -->

    <!-- Includes Footer -->
    @include('includes.footer')
    <!-- Includes Footer -->

    <!-- Includes Script -->
    @include('includes.script')
    <!-- Includes Script -->

    <!-- Pages Checkout Add-on Script -->
    @stack('addon-script')
    <!-- Pages Checkout Add-on Script -->
</body>
</html>