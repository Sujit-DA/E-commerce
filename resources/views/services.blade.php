<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Salon - Services</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('partials.header')
    <main>
        <section>
            <h2>Haircuts</h2>
            <p>We offer a variety of haircuts for all ages and styles.</p>
        </section>
        <section>
            <h2>Coloring</h2>
            <p>Expert coloring services using high-quality products.</p>
        </section>
        <section>
            <h2>Styling</h2>
            <p>From everyday styles to special occasions, we've got you covered.</p>
        </section>
    </main>
    @include('partials.footer')
</body>
</html>
