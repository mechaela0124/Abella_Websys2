<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white py-3">
                    <h5 class="card-title mb-0">Edit Book</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('books.update', $book->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label fw-bold">Author</label>
                            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="published_date" class="form-label fw-bold">Published Date</label>
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
