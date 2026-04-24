<!DOCTYPE html>
<html>
<head>
    <title>Laravel Image Upload</title>
    <style>
        .gallery { display: flex; flex-wrap: wrap; gap: 20px; margin-top: 30px; }
        .photo-card { border: 1px solid #ccc; padding: 10px; text-align: center; width: 200px; }
        .photo-card img { width: 100%; height: 150px; object-fit: cover; }
        .pagination { margin-top: 20px; }
    </style>
</head>
<body>
<p>Abella, Mechaela B.</p>
    <h1>Single Image Upload</h1>
    <form action="{{ route('photos.store.single') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" required>
        <button type="submit">Upload</button>
    </form>

    <h1>Multiple Images Upload</h1>
    <form action="{{ route('photos.store.multiple') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="images[]" multiple required>
        <button type="submit">Upload</button>
    </form>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <hr>

    <h2>Photo Gallery</h2>
    <div class="gallery">
        @forelse($photos as $photo)
            <div class="photo-card">
                <img src="{{ asset('images/' . $photo->image) }}" alt="Image">
                <div style="margin-top: 10px;">
                    <a href="{{ asset('images/' . $photo->image) }}" target="_blank">View</a> |

                    <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: red; border: none; background: none; cursor: pointer;" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p>No photos uploaded yet.</p>
        @endforelse
    </div>

    <div class="pagination">
        {{ $photos->links() }}
    </div>

</body>
</html>
