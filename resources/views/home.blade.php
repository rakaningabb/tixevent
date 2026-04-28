<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Event</title>
</head>
<body>

    <h1>Daftar Event</h1>

    <!-- FILTER KATEGORI -->
    <form method="GET" action="/">
        <select name="category">
            <option value="">Semua Kategori</option>

            @foreach($categories as $cat)
                <option value="{{ $cat->category_id }}">
                    {{ $cat->name }}
                </option>
            @endforeach

        </select>

        <button type="submit">Filter</button>
    </form>

    <hr>

    <!-- LIST EVENT -->
    @forelse($events as $event)
        <div style="border:1px solid #ccc; margin:10px; padding:10px;">
            
            <h3>{{ $event->title }}</h3>

            <p><strong>Kategori:</strong> {{ $event->category->name ?? '-' }}</p>

            <p><strong>Lokasi:</strong> {{ $event->location }}</p>

            <p><strong>Tanggal:</strong> {{ $event->event_date }}</p>

            <p><strong>Harga:</strong> Rp {{ number_format($event->price) }}</p>

            <a href="/events/{{ $event->slug ?? $event->event_id }}">
                Lihat Detail
            </a>

        </div>
    @empty
        <p>Tidak ada event.</p>
    @endforelse

    <!-- PAGINATION -->
    <div style="margin-top:20px;">
        {{ $events->links() }}
    </div>

</body>
</html>