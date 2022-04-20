@extends('layouts.layout')
@section('container')
<form action="" method="GET" id="cari_spesifikasi">
    <div class="row">
        <div class="col-md-4">
            <div class="input-group mb-3">
                <label class="input-group-text">Kriteria</label>
                <select class="form-select" aria-label="Default select example" id="browse" name="browse">
                    <option value="">Pilihlah salah satu</option>
                        <option value="laguGender">Lagu Gender</option>
                        <option value="jenis">Jenis</option>
                        <option value="komponenPembentuk">Komponen Pembentuk</option>
                        <option value="teknikPermainan">Teknik Permainan</option>
                        <option value="pancaYadnya">Panca Yadnya</option>
                        <option value="upacaraYadnya">Upacara Yadnya</option>
                </select>
            </div>
        </div>
    </div>
    <input type="submit" name="browsing" value="Jelajah" class="btn btn-dark" id="submit">
    <input type="submit" name="reset" value="Reset" class="btn btn-danger">
</form>
@if($data['resp']>=1 && $data['data']['penjelajahan'] == 'laguGender')
<div class="row">
    <div class="col-lg-12 mb-1 mt-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" id="headAplikasi">Lagu Gender</h6>
            </div>
            <div class="card-body" id="bodyAplikasi">
                <div class="row">
                @foreach ($data['data']['resultLagu'] as $item)
                <div class="col-md-3 d-inline-block">
                <ul class="list-group list-group-flush">
                    <a href="/jelajah/{{'Aplikasi'}}/{{$item['nama']}}" class="list-group-item list-group-item-action">{{ str_replace('_',' ',$item['nama']) }}</li></a>
                </ul>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@elseif($data['resp']>=1 && $data['data']['penjelajahan'] == 'jenis')
<div class="row">
    <div class="col-lg-12 mb-1 mt-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" id="headAplikasi">Jenis Gender</h6>
            </div>
            <div class="card-body" id="bodyAplikasi">
                <div class="row">
                @foreach ($data['data']['resultJenis'] as $item)
                <div class="col-md-3 d-inline-block">
                <ul class="list-group list-group-flush">
                    <a href="/jelajah/{{'Aplikasi'}}/{{$item['nama']}}" class="list-group-item list-group-item-action">{{ str_replace('_',' ',$item['nama']) }}</li></a>
                </ul>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@elseif($data['resp']>=1 && $data['data']['penjelajahan'] == 'komponenPembentuk')
<div class="row">
    <div class="col-lg-12 mb-1 mt-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" id="headMerek">Komponen Pembentuk</h6>
            </div>
            <div class="card-body" id="bodyMerek">
                <div class="row">
                @foreach ($data['data']['resultKomponenPembentuk'] as $item)
                <div class="col-md-3 d-inline-block">
                <ul class="list-group list-group-flush">
                    <a href="/jelajah/{{ 'Merek' }}/{{$item['nama']}}" class="list-group-item list-group-item-action">{{ str_replace('_',' ',$item['nama']) }}</li></a>
                </ul>
                </div>
                @endforeach 
                </div>  
            </div>
        </div>
    </div>
</div>
@elseif($data['resp']>=1 && $data['data']['penjelajahan'] == 'upacaraYadnya')
<div class="row">
    <div class="col-lg-12 mb-1 mt-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" id="headMerek">Upacara Yadnya</h6>
            </div>
            <div class="card-body" id="bodyMerek">
                <div class="row">
                @foreach ($data['data']['resultUpacaraYadnya'] as $item)
                <div class="col-md-3 d-inline-block">
                <ul class="list-group list-group-flush">
                    <a href="/jelajah/{{ 'Merek' }}/{{$item['nama']}}" class="list-group-item list-group-item-action">{{ str_replace('_',' ',$item['nama']) }}</li></a>
                </ul>
                </div>
                @endforeach 
                </div>  
            </div>
        </div>
    </div>
</div>
@elseif($data['resp']>=1 && $data['data']['penjelajahan'] == 'teknikPermainan')
<div class="row">
    <div class="col-lg-12 mb-1 mt-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" id="headMerek">Teknik Permainan</h6>
            </div>
            <div class="card-body" id="bodyMerek">
                <div class="row">
                @foreach ($data['data']['resultTeknikPermainan'] as $item)
                <div class="col-md-3 d-inline-block">
                <ul class="list-group list-group-flush">
                    <a href="/jelajah/{{ 'Merek' }}/{{$item['nama']}}" class="list-group-item list-group-item-action">{{ str_replace('_',' ',$item['nama']) }}</li></a>
                </ul>
                </div>
                @endforeach 
                </div>  
            </div>
        </div>
    </div>
</div>
@elseif($data['resp']>=1 && $data['data']['penjelajahan'] == 'pancaYadnya')
<div class="row">
    <div class="col-lg-12 mb-1 mt-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" id="headMerek">Panca Yadnya</h6>
            </div>
            <div class="card-body" id="bodyMerek">
                <div class="row">
                @foreach ($data['data']['resultPancaYadnya'] as $item)
                <div class="col-md-3 d-inline-block">
                <ul class="list-group list-group-flush">
                    <a href="/jelajah/{{ 'Merek' }}/{{$item['nama']}}" class="list-group-item list-group-item-action">{{ str_replace('_',' ',$item['nama']) }}</li></a>
                </ul>
                </div>
                @endforeach 
                </div>  
            </div>
        </div>
    </div>
</div>
@endif
@endsection