<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projek Lintasarta</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="main-layout">
        <div class="sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('path/to/your/logo.png') }}" alt="Logo">
                <h3>LintasArta</h3>
            </div>

            <div class="nav-group">
                <div class="nav-group-title">Devices</div>
                <a href="{{ route('sites.index') }}" class="nav-link active">
                    <i class="fas fa-server"></i> Devices
                </a>
                <a href="#" class="nav-link">
                    <i class="fas fa-microchip"></i> Modules
                </a>
            </div>

            <div class="nav-group">
                <div class="nav-group-title">Device Components</div>
                <a href="#" class="nav-link">
                    <i class="fas fa-ethernet"></i> Interfaces
                </a>
            </div>
        </div>

        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
</body>

</html>
