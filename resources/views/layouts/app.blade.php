<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task Organizer</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Your Custom CSS (if any) -->
        <style>
          /* Add your custom styles here */
          body {
            padding-top: 60px; /* Adjusted for fixed navbar */
          }
          footer {
            background-color: #f8f9fa;
            padding: 20px 0;
          }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="/">Task Organizer</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('tasks.create')}}">Create Task</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        @if (session()->has('success'))
        <div class="container container-narrow">
          <div class="alert alert-success text-center">
            {{session('success')}}
          </div>
        </div>
        @endif

        @if (session()->has('error'))
          <div class="container container-narrow">
            <div class="alert alert-danger text-center">
              {{session('error')}}
            </div>
          </div>
        @endif
        <h1 class="text-primary text-center mt-4">@yield('title')</h1>
        <div>
            @yield('content')
        </div>
    </body>
    <footer class="text-center fixed-bottom">
        <p>&copy; Task Organizer by Jesus Urdaneta. All Rights Reserved.</p>
    </footer>
</html>