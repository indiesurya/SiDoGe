@extends('layouts.layout')
@section('container')
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Spesifikasi</a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <p class="mt-2 font-weight-bold">Pencarian berdasarkan spesifikasi</p>   
        <form action="" method="GET" id="carispesifikasi">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group mb-3" >
                        <label class="input-group-text">Durasi</label>
                        <select class="form-select" aria-label="Default select example" id="cariRAM" name="cariRAM">
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
                        <select class="form-select" aria-label="Default select example" id="cariBaterai" name="cariBaterai">
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
                        <select class="form-select" aria-label="Default select example"id="cariKameraDepan" name="cariKameraDepan">
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
                        <select class="form-select" aria-label="Default select example"id="cariKameraBelakang" name="cariKameraBelakang">
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
                        <select class="form-select" aria-label="Default select example" id="cariMemori" name="cariMemori">
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
                        <select class="form-select" aria-label="Default select example" id="cariSistemOperasi" name="cariSistemOperasi">
                            <option value="">Pilihlah salah satu</option>
                            @foreach($data['rowUpacaraYadnya'] as $item)
                                <option value="{{ $item['nama'] }}">{{ str_replace('_',' ',str_replace('_','',$item['nama'])) }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <label class="input-group-text">Material Pembentuk</label>
                        <select class="form-select" aria-label="Default select example"id="cariUkuranLayar" name="cariUkuranLayar">
                            <option value="">Pilihlah salah satu</option>
                            @foreach($data['rowMaterialPembentuk'] as $item)
                                <option value="{{ $item['nama'] }}">{{ str_replace('_',' ',$item['nama'])}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <input type="submit" name="cariSpesifikasi" value="Cari" class="btn btn-dark">
            <input type="submit" name="reset" value="Reset" class="btn btn-danger">
        </form>
    </div>
</div>
@endsection