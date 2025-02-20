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

    @if(session('error'))
    <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('convert.currency') }}" method="POST">
        @csrf
        <label>Enter Amount (Base Currency: USD):</label>
        <input type="number" name="amount" value="{{ old('enteredAmount', 1) }}" min="1" required>

        <label>Select Currency:</label>
        <select name="currency" required>
            @foreach($rates['conversion_rates'] as $currency => $rate)
            <option value="{{ $currency }}" {{ old('selectedCurrency')==$currency ? 'selected' : '' }}>
                {{ $currency }}
            </option>
            @endforeach
        </select>

        <button type="submit">Convert</button>
    </form>

    @if(session('convertedAmount'))
    <h3>Converted Amount: {{ session('convertedAmount') }} {{ session('selectedCurrency') }}</h3>
    @endif
</body>

</html>