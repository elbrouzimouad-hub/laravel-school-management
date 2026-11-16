<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management</title>
    <!-- Bootstrap CSS & JS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    <!-- additional CSS -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <!-- Header -->
    <div class="container-fluid p-0">
        <img src="{{ url('img/banner.jpg') }}" style="width: 100%;">
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">School Management</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">Students List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.create') }}">Add Student</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>