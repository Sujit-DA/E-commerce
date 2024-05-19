<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Salon - Stylists</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('partials.header')
    <main>
        <section>
            <h2>Jane Doe</h2>
            <p>Expert in modern haircuts and coloring.</p>
        </section>
        <section>
            <h2>John Smith</h2>
            <p>Specializes in men's haircuts and beard styling.</p>
        </section>
        <section>
            <h2>Emily White</h2>
            <p>Known for her elegant updos and bridal hairstyles.</p>
        </section>
    </main>
    @include('partials.footer')
</body>
</html>
