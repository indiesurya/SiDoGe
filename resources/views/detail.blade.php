@extends('layouts.layout')
@section('container')
<div class="card">
  <div class="card-body">
    <strong>Lagu : </strong>{{ str_replace('_',' ',$data[0]['nama']) }}
  </div>
</div>
    <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Upacara Yadnya</div>
      @foreach($data as $item)
          {{ str_replace('_',' ',$item['upacara']) }} ( {{ str_replace('_',' ',$item['yadnya']) }})
      @endforeach
      @php $count=count($data)@endphp
    </div>
    <span class="badge bg-primary rounded-pill">{{ $count }}</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Fungsi</div>
      {{ $data[0]['fungsi'] }}
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Tingkat Kesulitan</div>
      {{ $data[0]['tingkat'] }}
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Durasi</div>
      {{ $data[0]['durasi'] }}
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Tempo</div>
      {{ $data[0]['tempo'] }}
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
</ol>
@endsection