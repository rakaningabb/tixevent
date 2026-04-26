<!DOCTYPE html>
<html>
<head>
    <title>TixEvent</title>
</head>
<body>

    <h1>Daftar Event</h1>

    @foreach($events as $event)
        <div style="border:1px solid #ccc; margin:10px; padding:10px;">
            <h2>{{ $event->title }}</h2>
            <p>{{ $event->description }}</p>
            <p>Harga: Rp {{ $event->price }}</p>

            <a href="/event/{{ $event->id }}">Lihat Detail</a>
        </div>
    @endforeach

</body>
</html>