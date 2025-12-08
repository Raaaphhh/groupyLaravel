@extends('layouts.app')

@section('title', 'Ajouter un utilisateur')

@section('content')

<h1 class="mb-4">Se connecter</h1>

<form action="/utilisateur/login" method="POST" class="card p-4 shadow-sm">
    @csrf

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
