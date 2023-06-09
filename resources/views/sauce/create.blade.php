@extends('sauce.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Ajouter une nouvelle sauce</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-outline-primary" href="{{ route('shop.index') }}"> Retour</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oups! </strong> Il y a eu des problèmes avec votre entrée.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('shop.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nom de la sauce:</strong>
                <input type="text" name="Nom" class="form-control" placeholder="Saisir un Nom">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Fabricant:</strong>
                <input type="text" name="Fabricant" class="form-control" placeholder="Saisir un Fabricant">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="Description" class="form-control" placeholder="Saisir une Description">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Ingredient Principale:</strong>
                <input type="text" name="IngredientPrincipale" class="form-control" placeholder="Saisir un Ingredient Principale">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>URL:</strong>
                <input type="text" name="URL" class="form-control" placeholder="Saisir une URL">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Puissance:</strong>
                <input type="text" name="Puissance" class="form-control" placeholder="Saisir une Puissance">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Soumettre</button>
        </div>
    </div>

</form>
@endsection
