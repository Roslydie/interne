<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css">
    <title>Modèles de Documents</title>
    <style>
        .document-section {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            margin: 20px;
        }
        .document-card {
            width: 200px;
            margin: 10px;
        }
        .document-card img {
            width: 100%;
            height: auto;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .search-bar {
            width: 5cm;
            display: flex;
        }
        .search-bar input {
            flex: 1;
        }
        .search-icon {
            margin-left: -30px;
            cursor: pointer;
        }
        .btn-import {
            display: flex;
            align-items: center;
            border: 2px solid orange;
            background-color: transparent;
        }
       
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24">
        </a>
    </div>
</nav>

<div class="container-fluid" style="background-color: beige;">
    <h6 class="container m-1" style="padding-top: 1cm;">Modele de documents</h6>
    <div class="document-section">
        <div class="card document-card">
            <img src="{{ asset('images/paper.jpg') }}" class="card-img-top" alt="Document Word">
            <div class="card-body">
                <h6 class="card-text">Document Excel</h6>
            </div>
        </div>
        <div class="card document-card">
            <img src="{{ asset('images/paper.jpg') }}" class="card-img-top" alt="Document Excel">
            <div class="card-body">
                <h6 class="card-text">Document Excel</h6>
            </div>
        </div>
        <div class="card document-card">
            <img src="{{ asset('images/paper.jpg') }}" class="card-img-top" alt="Document PowerPoint">
            <div class="card-body">
                <h6 class="card-text">Document PowerPoint</h6>
            </div>
        </div>
        <div class="card document-card">
            <img src="{{ asset('images/paper.jpg') }}" class="card-img-top" alt="Document PDF">
            <div class="card-body">
                <h6 class="card-text">Document PDF</h6>
            </div>
        </div>
    </div>
</div>
<h6 class="container m-1" style="padding-top: 1cm;">Documents recents</h6>
<div class="container mt-5">
    <button style="color: rgb(241, 200, 16);" id="importbutton" data-bs-toggle="modal" data-bs-target="#exampleModal" >
        <i class="fa fa-upload" ></i> Importer
    </button>
       <!-- Modale -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload de Documents</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Zone de glisser-déposer -->
                    <div class="dropzone" id="dropzone">
                        Glissez-déposez vos fichiers ici ou cliquez pour sélectionner.
                    </div>
                    <!-- Liste des fichiers sélectionnés -->
                    <ul id="fileList" class="mt-3 list-group"></ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary" id="uploadBtn">Charger les fichiers</button>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<div class="container">
    <div class="top-bar">
        <h6 class="m-1" style="padding-top: 10px;">Tous les documents</h6>
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Rechercher...">
            <span class="search-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.397h-.001a1 1 0 0 0 .237.237l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.237-.237zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </span>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
