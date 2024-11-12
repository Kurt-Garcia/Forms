<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Reimbursement Form</title>
</head>
<body>
    <h1>Expense Reimbursement Form</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="/expense-reimbursement" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount" required>
        </div>

        <div>
            <label for="category">Expense Category</label>
            <input type="text" id="category" name="category" required>
        </div>

        <div>
            <label for="receipt">Receipt (Optional)</label>
            <input type="file" id="receipt" name="receipt">
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
