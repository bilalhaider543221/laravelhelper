<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manager</title>
</head>
<body>
    <h1>File Manager</h1>
    <form action="{{ route('laravel-iide-helper.file-manager') }}" method="get">
        <label for="path">Path:</label>
        <input type="text" name="path" id="path" value="{{ $path }}" />
        <button type="submit">Go</button>
    </form>
    <h2>Directories</h2>
    <ul>
        @foreach ($directories as $directory)
            <li>{{ basename($directory) }}</li>
        @endforeach
    </ul>
    <h2>Files</h2>
    <ul>
        @foreach ($files as $file)
            <li>
                {{ basename($file) }}
                <form action="{{ route('laravel-iide-helper.file-manager.delete') }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="path" value="{{ $file }}" />
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this file?');">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
