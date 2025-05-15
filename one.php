<!DOCTYPE html>
<html>
<head>
    <title>Booking</title>
    <link rel="stylesheet" href="all.css">
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        form { max-width: 600px; margin: auto; }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input[type="text"], input[type="email"], input[type="file"] {
            width: 100%; padding: 8px; margin-top: 5px;
        }
        .radio-group { margin-top: 10px; }
        .radio-group label { font-weight: normal; margin-right: 15px; }
        .submit-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <form action="see.php" method="POST" enctype="multipart/form-data">
        <h2>Enter Booking Details</h2>

        <label>Full Name</label>
        <input type="text" name="name" required minlength="3">

        <label>Contact Number</label>
        <input type="text" name="phone" required minlength="10">

        <label>Email Address</label>
        <input type="email" name="email">

        <label>Select Picture</label>
        <input type="file" name="file">

        <label>Address</label>
        <input type="text" name="address">

        <label>Time:</label>
        <div class="radio-group">
            <input type="radio" name="time" value="6:00AM" required> 6:00AM - Malabar Express
            <input type="radio" name="time" value="12:00PM"> 12:00PM - Superfast Express
            <input type="radio" name="time" value="10:00PM"> 10:00PM - Lavanya Express
        </div>

        <label>Date:</label>
        <div class="radio-group">
            <input type="radio" name="date" value="22/06/2025" required> 22/06/2025
            <input type="radio" name="date" value="25/06/2025"> 25/06/2025
            <input type="radio" name="date" value="30/06/2025"> 30/06/2025
        </div>

        <button class="submit-btn" type="submit" name="submit">Book Ticket</button>
    </form>
</body>
</html>

