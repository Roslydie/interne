<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>

    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($document) ? 'Modifier' : 'Créer' }} un Document</h1>
    <form action="{{ isset($document) ? route('documents.update', $document->id) : route('documents.store') }}" method="POST">
        @csrf
        @if(isset($document))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="name" class="form-label">Nom du Document</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $document->name ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Catégorie</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ old('category', $document->category ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenu</label>
            <textarea class="form-control" id="content" name="content" rows="10">{{ old('content', $document->content ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($document) ? 'Mettre à Jour' : 'Enregistrer' }}</button>
    </form>
</div>

<script>
    // Activation de CKEditor sur le champ textarea
    ClassicEditor
        .create(document.querySelector('#content'))
        .catch(error => console.error(error));
</script>
@endsection

    
</body>
</html>