<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-success text-white py-3 text-center">
                    <h4 class="mb-0">Add New Book</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('books.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label text-muted small text-uppercase fw-bold">Title</label>
                            <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="Enter book title" required>
                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label text-muted small text-uppercase fw-bold">Author</label>
                            <input type="text" class="form-control form-control-lg" id="author" name="author" placeholder="Enter author name" required>
                        </div>

                        <div class="mb-4">
                            <label for="published_date" class="form-label text-muted small text-uppercase fw-bold">Published Date</label>
                            <input type="date" class="form-control form-control-lg" id="published_date" name="published_date" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg shadow-sm">Save Book</button>
                        </div>

                        <div class="mt-3 text-center">
                            <a href="{{ route('books.index') }}" class="text-decoration-none text-secondary">Cancel and go back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
