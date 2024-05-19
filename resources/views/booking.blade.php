<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/stylists">Stylists</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/booking">Book Now</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Book an Appointment</h1>
        <form action="/submit-booking" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="service">Service:</label>
            <select id="service" name="service" required>
                <option value="Haircut">Haircut</option>
                <option value="Coloring">Coloring</option>
                <option value="Styling">Styling</option>
            </select>

            <button type="submit">Book Now</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Hair Salon. All rights reserved.</p>
    </footer>
</body>
</html>
