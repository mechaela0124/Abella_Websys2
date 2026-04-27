<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book - Offline Mode</title>
    <style>
        /* OFFLINE BOOTSTRAP EMULATION */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f4f7f6;
            color: #212529;
        }

        .container { width: 100%; padding: 0 15px; margin: 0 auto; }
        @media (min-width: 768px) { .container { max-width: 720px; } }
        @media (min-width: 992px) { .container { max-width: 960px; } }

        .row { display: flex; flex-wrap: wrap; justify-content: center; }
        .col-md-6 { flex: 0 0 auto; width: 100%; max-width: 550px; }

        .py-5 { padding: 3rem 0; }
        .py-3 { padding: 1rem 0; }
        .p-4 { padding: 1.5rem; }
        .mb-0 { margin-bottom: 0; }
        .mb-3 { margin-bottom: 1rem; }
        .mb-4 { margin-bottom: 1.5rem; }

        /* Card Component */
        .card {
            background: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15); /* Shadow class */
            border: none;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .card-header {
            padding: 1rem;
            background-color: #0d6efd; /* bg-primary */
            color: white;
        }
        .card-title { font-size: 1.25rem; }

        /* Form Controls */
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 700; /* fw-bold */
        }
        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            box-sizing: border-box;
            transition: border-color 0.15s ease-in-out;
        }
        .form-control:focus {
            border-color: #0d6efd;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        /* Buttons & Grid */
        .d-grid { display: grid; }
        .gap-2 { gap: 0.5rem; }
        .btn {
            cursor: pointer;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            text-decoration: none;
            border: 1px solid transparent;
            transition: background-color 0.15s ease-in-out;
        }
        .btn-primary {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .btn-primary:hover { background-color: #0b5ed7; }

        .btn-outline-secondary {
            color: #6c757d;
            border-color: #6c757d;
            background-color: transparent;
        }
        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #6c757d;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header py-3">
                    <h5 class="card-title mb-0">Edit Book</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('books.update', $book->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="published_date" class="form-label">Published Date</label>
                            <input type="date" class="form-control" id="published_date" name="published_date" value="{{ $book->published_date }}" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Update Book</button>
                            <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">Back to List</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
