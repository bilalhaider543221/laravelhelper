<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Query Form</title>
</head>
<body>
    <h1>SQL Query Form</h1>
    <form action="{{ route('executeQuery') }}" method="POST">
        @csrf
        <label for="query">Enter your SQL query:</label>
        <textarea name="query" id="query" rows="4" cols="50"></textarea>
        <button type="submit">Execute</button>
    </form>

    @isset($results)
        <h2>Results</h2>
        <table>
            <tr>
                @foreach($results[0] as $key => $value)
                    <th>{{ $key }}</th>
                @endforeach
            </tr>
            @foreach($results as $result)
                <tr>
                    @foreach($result as $key => $value)
                        <td>{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    @endisset
</body>
</html>
