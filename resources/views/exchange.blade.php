<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exchange Rates</title>
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
</head>

<body>
    <h1>Exchange Rates</h1>



    @if(isset($rates['conversion_rates']))
    <p><strong>Base Currency:</strong> {{ $rates['base_code'] ?? 'Unknown' }}</p>

    <table border="1">
        <thead>
            <tr>
                <th>Currency</th>
                <th>Rate (against {{ $rates['base_code'] ?? 'Unknown' }})</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rates['conversion_rates'] as $currency => $rate)
            <tr>
                <td>{{ $currency }}</td>
                <td>{{ $rate }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No exchange rate data available.</p>
    @endif
</body>

</html>