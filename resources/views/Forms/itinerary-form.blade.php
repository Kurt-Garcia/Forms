<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itinerary Form</title>
</head>
<body>
    <h1>Itinerary Form</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="/itinerary" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="start_date">Start Date</label>
            <input type="date" id="start_date" name="start_date" required>
        </div>

        <div>
            <label for="end_date">End Date</label>
            <input type="date" id="end_date" name="end_date" required>
        </div>

        <div>
            <label for="destination">Destination</label>
            <input type="text" id="destination" name="destination" required>
        </div>

        <div>
            <label for="accommodation">Accommodation (Optional)</label>
            <input type="text" id="accommodation" name="accommodation">
        </div>

        <div>
            <label for="transport">Transport (Optional)</label>
            <input type="text" id="transport" name="transport">
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
