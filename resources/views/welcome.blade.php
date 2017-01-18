@extends('layouts.app')

@section('content')
<style>
    .top20 {
        margin-top: 20px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="row top20 panel panel-default">
                <div class="panel-heading">Cadastre-se</div>

                <div class="panel-body" style="text-align: center;">
                    <div class="panel-default">
                        <button type="button" class="btn btn-success" style="padding: 11.5%; width: 100%;">Aluno</button>
                    </div>
                    <div class="panel-default">
                        <button type="button" class="btn btn-warning" style="padding: 10%; width: 100%;">Empresa</button>
                    </div>
                    <div class="panel-default">
                        <button type="button" class="btn btn-danger" style="padding: 10%; width: 100%;">Professor</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection