@foreach ($bukus as $b)
    <li onclick="masukanbuku('{{ $b->id }}')">{{ $b->judul }}</li>
@endforeach