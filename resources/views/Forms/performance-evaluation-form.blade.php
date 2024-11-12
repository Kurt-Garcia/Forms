<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Performance Evaluation Form</title>
</head>
<body>
    <h1>Performance Evaluation Form</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="/performance-evaluation" method="POST">
        @csrf
        <div>
            <label for="employee_name">Employee Name</label>
            <input type="text" id="employee_name" name="employee_name" required>
        </div>

        <div>
            <label for="evaluation_date">Evaluation Date</label>
            <input type="date" id="evaluation_date" name="evaluation_date" required>
        </div>

        <div>
            <label for="rating">Rating (1-5)</label>
            <input type="number" id="rating" name="rating" min="1" max="5" required>
        </div>

        <div>
