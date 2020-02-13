@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Tabungan Siswa</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Tabungan Siswa</label>
                        </div>
                        <div class="col-md-8">
                            <select name="siswa_id" class="form-control" readonly>
                                <option value="{{ $data->id }}"> 
                                {{$data->siswa->nama}} - {{$data->siswa->kelas}}</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Jumlah Uang</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" class="form-control" value="{{ $data->jumlah_uang }}" name="jumlah_uang" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
