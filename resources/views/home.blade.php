@extends('layouts.app')

@section('content')

<!-- HERO -->
<div class="hero">
    <h1>Temukan Event Seru Untukmu</h1>
    <p>Berbagai event menarik menantimu. Pesan tiket sekarang!</p>
</div>

<!-- KATEGORI -->
<div class="container kategori">
    <h3>Kategori</h3>

    <a href="/?category=all"><button>Semua</button></a>
    <a href="/?category=1"><button>Seminar</button></a>
    <a href="/?category=2"><button>Workshop</button></a>
    <a href="/?category=3"><button>Konser</button></a>
    <a href="/?category=4"><button>Lainnya</button></a>

</div>

<!-- EVENT TERBARU -->
<div class="container">
    <h3>Event Terbaru</h3>

    @if($events->isEmpty())
        <p>Belum ada event tersedia</p>
    @endif

    <div class="grid">
        @foreach($events as $event)
            <div class="card">
                <h4>{{ $event->title }}</h4>

                <p><b>Lokasi:</b> {{ $event->location }}</p>

                <p>
                    <b>Tanggal:</b>
                    {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}
                </p>

                <p>
                    <b>Harga:</b> Rp{{ number_format($event->price) }}
                </p>

                <a href="/detail/{{ $event->id }}">
                    Lihat Detail
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection