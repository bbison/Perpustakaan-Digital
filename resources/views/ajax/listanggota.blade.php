@foreach ($anggotas as $a)
    <li onclick="masukan('{{ $a->id }}')">  {{ $a->nama.'('.$a->kelas->nama.')' }}  -{{ $a->nisn }}</li>
@endforeach