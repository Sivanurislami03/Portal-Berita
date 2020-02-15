@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Show Hobi</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Jenis Hobi</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="{{$hobi->hobi}}" name="hobi" readonly>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
