<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book - Offline Mode</title>
    <style>
        /* OFFLINE BOOTSTRAP EMULATION */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f8f9fa;
            color: #212529;
        }

        .container { width: 100%; padding: 0 15px; margin: 0 auto; }
        @media (min-width: 768px) { .container { max-width: 720px; } }
        @media (min-width: 992px) { .container { max-width: 960px; } }

        .row { display: flex; flex-wrap: wrap; justify-content: center; }
        .col-lg-5 { flex: 0 0 auto; width: 100%; max-width: 450px; }

        .py-5 { padding: 3rem 0; }
        .mb-3 { margin-bottom: 1rem; }
        .mb-4 { margin-bottom: 1.5rem; }
        .mt-3 { margin-top: 1rem; }
        .text-center { text-align: center; }

        /* Card Styling */
        .card {
            background: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            border: none;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .card-header {
            padding: 1.25rem;
            background-color: #198754; /* Success Green */
            color: white;
        }
        .card-header h4 { margin: 0; font-size: 1.5rem; }
        .card-body { padding: 1.5rem; }

        /* Form Styling */
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.75rem;
            text-transform: uppercase;
            font-weight: 700;
            color: #6c757d;
        }
        .form-control {
            display: block;
            width: 100%;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 0.3rem;
            box-sizing: border-box; /* Crucial for padding */
            transition: border-color 0.15s ease-in-out;
        }
        .form-control:focus {
            border-color: #198754;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
        }

        /* Button Styling */
        .d-grid { display: grid; }
        .btn {
            cursor: pointer;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            padding: 0.75rem 1rem;
            font-size: 1.1rem;
            border-radius: 0.3rem;
            border: 1px solid transparent;
            transition: background-color 0.15s ease-in-out;
            text-decoration: none;
        }
        .btn-success {
            color: #fff;
            background-color: #198754;
            border-color: #198754;
        }
        .btn-success:hover { background-color: #157347; }

        .text-secondary { color: #6c757d; }
        .text-decoration-none { text-decoration: none; }
        .text-decoration-none:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Add New Book</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('books.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter book title" required>
                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control" id="author" name="author" placeholder="Enter author name" required>
                        </div>

                        <div class="mb-4">
                            <label for="published_date" class="form-label">Published Date</label>
                            <input type="date" class="form-control" id="published_date" name="published_date" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Save Book</button>
                        </div>

                        <div class="mt-3 text-center">
                            <a href="{{ route('books.index') }}" class="text-decoration-none text-secondary">
                                <small>Cancel and go back</small>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
