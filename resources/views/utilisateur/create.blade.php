@extends('layouts.app')

@section('title', 'Ajouter un utilisateur')

@section('content')

<h1 class="mb-4">Ajouter un utilisateur</h1>

<form action="/utilisateur/store" method="POST" class="card p-4 shadow-sm">
    @csrf

    <div class="mb-3">
        <label class="form-label">ID User</label>
        <input type="number" name="id_user" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" name="nom" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Prénom</label>
        <input type="text" name="prenom" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Adresse</label>
        <input type="text" name="adresse" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Téléphone</label>
        <input type="text" name="phone" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Mot de passe</label>
        <input type="text" name="motdepasse" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary w-100">Ajouter</button>
</form>

@endsection
