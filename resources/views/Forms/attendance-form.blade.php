<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Form</title>
</head>
<body>
    <h1>Attendance/Absence Form</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="/attendance" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="date">Date</label>
            <input type="date" id="date" name="date" required>
        </div>

        <div>
            <label for="reason">Reason for Absence (Optional)</label>
            <textarea id="reason" name="reason"></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
