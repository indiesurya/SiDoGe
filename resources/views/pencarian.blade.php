@extends('layouts.layout')
@section('container')
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Lagu</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Komponen</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <p class="mt-2 font-weight-bold">Pencarian berdasarkan Lagu Gender</p>
      <form action="" method="GET" id="cariGender">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group mb-3" >
                        <label class="input-group-text">Durasi</label>
                        <select class="form-select" aria-label="Default select example" id="cariDurasi" name="cariDurasi">
                            <option value="">Pilihlah salah satu</option>
                            @foreach($data['rowDurasi'] as $item)
                                <option value="{{ $item['nama'] }}">{{ str_replace('_',' ',$item['nama'])}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3" >
                        <label class="input-group-text">Genre Fungsi</label>
                        <select class="form-select" aria-label="Default select example" id="cariGenre" name="cariGenre">
                            <option value="">Pilihlah salah satu</option>
                            @foreach($data['rowGenre'] as $item)
                                <option value="{{ $item['nama'] }}">{{ str_replace('_',' ',$item['nama']) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">   
                    <div class="input-group mb-3">
                        <label class="input-group-text">Tempo</label>
                        <select class="form-select" aria-label="Default select example"id="cariTempo" name="cariTempo">
                            <option value="">Pilihlah salah satu</option>
                            @foreach($data['rowTempo'] as $item)
                                <option value="{{ $item['nama'] }}">{{ str_replace('_',' ',$item['nama'])}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <label class="input-group-text">Tingkat Kesulitan</label>
                        <select class="form-select" aria-label="Default select example"id="cariTingkatKesulitan" name="cariTingkatKesulitan">
                            <option value="">Pilihlah salah satu</option>
                            @foreach($data['rowTingkatKesulitan'] as $item)
                                <option value="{{ $item['nama'] }}">{{ str_replace('_',' ',$item['nama'])}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <label class="input-group-text">Panca Yadnya</label>
                        <select class="form-select" aria-label="Default select example" id="cariPancaYadnya" name="cariPancaYadnya">
                            <option value="">Pilihlah salah satu</option>
                            @foreach($data['rowPancaYadnya'] as $item)
                                <option value="{{ $item['nama'] }}">{{ str_replace('_',' ',$item['nama']) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <label class="input-group-text">Upacara Adat</label>
                        <select class="form-select" aria-label="Default select example" id="cariUpacaraYadnya" name="cariUpacaraYadnya">
                            <option value="">Pilihlah salah satu</option>
                            @foreach($data['rowUpacaraYadnya'] as $item)
                                <option value="{{ $item['nama'] }}">{{ str_replace('_',' ',str_replace('_','',$item['nama'])) }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <input type="submit" name="cariLaguGender" value="Cari" class="btn btn-dark">
            <input type="submit" name="reset" value="Reset" class="btn btn-danger">
        </form>
        <div class="row">
        <div class="col-lg-6 mb-4 mt-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Hasil Pencarian</h6>
                </div>
                <div class="card-body">
                    @if($data['resp'] == 0)
                        <h4 class="small font-weight-bold">Belum terdapat pencarian data<span> </h4>
                    @elseif($data['resp'] == 1 && $data['jumlahLagu'] == 0)
                        <h4 class="small font-weight-bold">Data tidak ditemukan<span></h4>
                    @else
                        @foreach ($data['rowLagu'] as $item)
                        <ul class="list-group list-group-flush">
                            <a href="/detail-gender/{{$item['nama']}}" class="list-group-item list-group-item-action">{{ str_replace('_',' ',$item['nama']) }}</li></a>
                        </ul>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        
        @if($data['resp']==1 && $data['jumlahLagu']>=1)
        <div class="col-lg-6 mb-4 mt-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Proses SPARQL</h6>
                </div>
                <div class="card-body">
                    <h4 class="small">{{ $data['sql'] }}</h4>
                </div>
            </div>
        </div>
        @endif
    </div>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <p class="mt-2 font-weight-bold">Pencarian berdasarkan Komponen</p> 
        <form action="" method="GET" id="cariGender">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group mb-3" >
                        <label class="input-group-text">Material Pembentuk</label>
                        <select class="form-select" aria-label="Default select example" id="cariDurasi" name="cariDurasi">
                            <option value="">Pilihlah salah satu</option>
                            @foreach($data['rowDurasi'] as $item)
                                <option value="{{ $item['nama'] }}">{{ str_replace('_',' ',$item['nama'])}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <input type="submit" name="cariLaguGender" value="Cari" class="btn btn-dark">
            <input type="submit" name="reset" value="Reset" class="btn btn-danger">
        </form>
    </div>
</div>
@endsection