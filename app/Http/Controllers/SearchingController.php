<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SearchingController  extends Controller
{
    public function index(Request $request)
    {
    $durasi = $this->sparql->query('SELECT * WHERE{?g a gender:Durasi}');
    $genre = $this->sparql->query('SELECT * WHERE{?g a gender:GenreFungsi}');
    $tempo = $this->sparql->query('SELECT * WHERE{?g a gender:Tempo}');
    $tingkatKesulitan = $this->sparql->query('SELECT * WHERE{?g a gender:TingkatKesulitan}');
    $pancaYadnya = $this->sparql->query('SELECT * WHERE{?g a gender:PancaYadnya}');
    $upacaraYadnya = $this->sparql->query('SELECT * WHERE{?g a gender:UpacaraYadnya}');
    $materialPembentuk = $this->sparql->query('SELECT * WHERE{?g a gender:MaterialPembentuk}');

    $rowDurasi = [];
    $rowGenre = [];
    $rowTempo = [];
    $rowTingkatKesulitan = [];
    $rowPancaYadnya = [];
    $rowUpacaraYadnya = [];
    $rowMaterialPembentuk = [];
    foreach($durasi as $item){
        array_push($rowDurasi,[
            'nama' => $this->parseData($item->g->getUri())
        ]);
    }
    foreach ($genre as $item) {
        array_push($rowGenre, [
            'nama' => $this->parseData($item->g->getUri())
        ]);
    }
    foreach ($tempo as $item) {
        array_push($rowTempo, [
            'nama' => $this->parseData($item->g->getUri())
        ]);
    }
    foreach ($tingkatKesulitan as $item) {
        array_push($rowTingkatKesulitan, [
            'nama' => $this->parseData($item->g->getUri())
        ]);
    }
    foreach ($pancaYadnya as $item) {
        array_push($rowPancaYadnya, [
            'nama' => $this->parseData($item->g->getUri())
        ]);
    }
    foreach ($upacaraYadnya as $item) {
        array_push($rowUpacaraYadnya, [
            'nama' => $this->parseData($item->g->getUri())
        ]);
    }
    foreach ($materialPembentuk as $item) {
        array_push($rowMaterialPembentuk, [
            'nama' => $this->parseData($item->g->getUri())
        ]);
    }
    $data = [
        'rowDurasi' => $rowDurasi,
        'rowGenre' => $rowGenre,
        'rowTempo' => $rowTempo,
        'rowTingkatKesulitan' => $rowTingkatKesulitan,
        'rowPancaYadnya' => $rowPancaYadnya,
        'rowUpacaraYadnya' => $rowUpacaraYadnya,
        'rowMaterialPembentuk' => $rowMaterialPembentuk
    ];

    return view('pencarian',[
        'title'=>'Fitur Pencarian',
        'data' => $data
    ]);
    }
}
