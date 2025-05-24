<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<h1>Upload File</h1>
<form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" required>
    @error('file')
        <div style="color:red;">{{ $message }}</div>
    @enderror
    <button type="submit">Upload</button>
</form>

<h2>Uploaded Files</h2>
<ul>
    @foreach ($uploads as $upload)
        <li>
            <a href="{{ asset('storage/' . $upload->filename) }}" target="_blank">
                {{ $upload->original_name }}
            </a> 
            (stored as: {{ $upload->filename }})
        </li>
    @endforeach
</ul>

</body>
</html>
