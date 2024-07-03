<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Washwiz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Washwiz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Why Washwiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/history">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Integrations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQs</a>
                </li>
            </ul>
        </div>
    </nav>
    <form action="{{ route('tambahBerita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Upload Image:</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="container mt-5">
        <h2>Uploaded Images</h2>
        <div class="row">
            @foreach($beritas as $berita)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset($berita->image_path) }}" class="card-img-top" alt="{{ $berita->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $berita->title }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
        