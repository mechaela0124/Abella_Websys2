<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Catalog - Offline Mode</title>
    <style>
        /* OFFLINE BOOTSTRAP TABLE & LAYOUT EMULATION */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f8f9fa;
            color: #212529;
            padding-top: 3rem;
        }

        .container { width: 100%; padding: 0 15px; margin: 0 auto; }
        @media (min-width: 992px) { .container { max-width: 960px; } }

        .d-flex { display: flex !important; }
        .justify-content-between { justify-content: space-between !important; }
        .align-items-center { align-items: center !important; }
        .mb-0 { margin-bottom: 0 !important; }
        .mb-4 { margin-bottom: 1.5rem !important; }
        .me-2 { margin-right: 0.5rem !important; }
        .mt-5 { margin-top: 3rem !important; }

        .h2 { font-size: 2rem; font-weight: 500; margin: 0; }

        /* Card & Table Styling */
        .card {
            background: #fff;
            border-radius: 0.35rem;
            border: 1px solid rgba(0,0,0,.125);
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); /* shadow-sm */
            overflow: hidden;
        }

        .table-responsive { overflow-x: auto; }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            vertical-align: top;
            border-color: #dee2e6;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 0.75rem;
            border-bottom: 1px solid #dee2e6;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-light { background-color: #f8f9fa; }
        .align-middle { vertical-align: middle !important; }
        .text-end { text-align: right !important; }
        .fw-bold { font-weight: 700 !important; }

        /* Buttons */
        .btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            transition: all 0.15s ease-in-out;
        }

        .btn-sm { padding: 0.25rem 0.5rem; font-size: 0.875rem; }

        .btn-primary { color: #fff; background-color: #0d6efd; border-color: #0d6efd; }
        .btn-primary:hover { background-color: #0b5ed7; }

        .btn-outline-secondary { color: #6c757d; border-color: #6c757d; }
        .btn-outline-secondary:hover { color: #fff; background-color: #6c757d; }

        .btn-danger { color: #fff; background-color: #dc3545; border-color: #dc3545; }
        .btn-danger:hover { background-color: #bb2d3b; }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Library Catalog</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary">Add New Book</a>
    </div>

    <div class="card">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Published Date</th>
                        <th class="text-end px-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $book)
                    <tr>
                        <td class="fw-bold">{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->published_date }}</td>
                        <td class="text-end px-4">
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-outline-secondary me-2">Edit</a>

                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this book?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">No books found in the catalog.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
