<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Salon - Contact</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('partials.header')
    <main>
        <section>
            <h2>Our Location</h2>
            <p>123 Hair Street, Salon City, HA 12345</p>
        </section>
        <section>
            <h2>Get in Touch</h2>
            <p>Phone: (123) 456-7890</p>
            <p>Email: info@hairsalon.com</p>
        </section>
    </main>
    @include('partials.footer')
</body>
</html>
