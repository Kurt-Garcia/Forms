<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
</head>
<body>
    <h1>Main Menu</h1>

    <!-- Display Success Message -->
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        <li><a href="{{ route('attendance.form') }}">Attendance/Absence Form</a></li>
        <li><a href="{{ route('expense-reimbursement.form') }}">Expense Reimbursement Form</a></li>
        <li><a href="{{ route('itinerary.form') }}">Itinerary Form</a></li>
        <li><a href="{{ route('performance-evaluation.form') }}">Performance Evaluation Form</a></li>
    </ul>
</body>
</html>
