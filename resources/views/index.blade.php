<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Salon - Home</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('partials.header')
    <main>
        <section>
            <h2>About Us</h2>
            <p>Our salon offers top-notch hair services provided by experienced stylists.</p>
        </section>
        <section>
            <h2>Why Choose Us?</h2>
            <ul>
                <li>Professional Staff</li>
                <li>Quality Products</li>
                <li>Relaxing Environment</li>
            </ul>
        </section>
    </main>
    @include('partials.footer')
</body>
</html>
