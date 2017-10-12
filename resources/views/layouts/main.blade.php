<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.header')
</head>
<body>
    @include('includes.navbar')

    <div class="container">
        <div class="row">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>

    @include('includes.js')
</body>
</html>