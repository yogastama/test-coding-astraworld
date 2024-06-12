<!DOCTYPE html>
<html>
<head>
    <title>Car Table</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $car)
                <tr>
                    <td>{{ $car['brand'] }}</td>
                    <td>{{ $car['year'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
