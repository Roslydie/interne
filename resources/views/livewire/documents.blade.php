<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .templates-section {
            background-color: #f9f0e6;
            padding: 20px;
        }

        .btn-import {
            display: flex;
            align-items: center;
            border: 2px solid orange;
            background-color: transparent;
            color: rgb(241, 200, 16);
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-crer {
            display: flex;
            align-items: center;
            border: 2px solid orange;
            background-color: transparent;
            color: rgb(241, 200, 16);
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-import i {
            margin-right: 5px;
        }

        .dropzone {
            border: 2px dashed #007bff;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            background-color: dashed #007bff ;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }

        .dropzone.dragover {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <div>
        <div class="container py-4">
            <!-- Section: Modèles de documents -->
            <div class="templates-section mb-5">
                <h5>Modèles de documents</h5>
                <div class="d-flex flex-wrap gap-3">
                    <div class="card" style="width: 150px;">
                        <div class="card-body text-center">
                            <div class="placeholder mb-2" style="height: 100px; background-color: #f3f3f3;"></div>
                            <h6 class="card-title">Devis projet dev web</h6>
                            <p class="text-muted small">Devis</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3">
                    <div class="card" style="width: 150px;">
                        <div class="card-body text-center">
                            <div class="placeholder mb-2" style="height: 100px; background-color: #f3f3f3;"></div>
                            <h6 class="card-title">Devis projet dev web</h6>
                            <p class="text-muted small">Devis</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3">
                    <div class="card" style="width: 150px;">
                        <div class="card-body text-center">
                            <div class="placeholder mb-2" style="height: 100px; background-color: #f3f3f3;"></div>
                            <h6 class="card-title">Devis projet dev web</h6>
                            <p class="text-muted small">Devis</p>
                        </div>
                    </div>
                    
                    <div class="card" style="width: 150px;">
                        <div class="card-body text-center">
                            <div class="placeholder mb-2" style="height: 100px; background-color: #f3f3f3;"></div>
                            <h6 class="card-title">Contrat employé</h6>
                            <p class="text-muted small">Contrat</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section: Documents récents -->
            <div class="recent-docs mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Documents recents</h5>
                    <div class="d-flex gap-2">
                        <button class="btn-import" id="importbutton" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa fa-upload"></i> Importer
                        </button>
                        <button class="btn-crer"> <a href="/documents/create">Creer un nouveau document </a></button>
                    </div>
                </div>
                <div class="d-flex flex-wrap gap-3">
                    <div class="card" style="width: 200px;">
                        <div class="card-body">
                            <div class="placeholder mb-2" style="height: 150px; background-color: #f3f3f3;"></div>
                            <h6 class="card-title">Nom du document.docx</h6>
                            <p class="text-muted small">Dernière modification : 22/09/2024</p>
                        </div>
                    </div>
                    <div class="card" style="width: 200px;">
                        <div class="card-body">
                            <div class="placeholder mb-2" style="height: 150px; background-color: #f3f3f3;"></div>
                            <h6 class="card-title">Nom du document.pdf</h6>
                            <p class="text-muted small">Dernière modification : 23/09/2024</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section: Tous les documents -->
            <div class="all-docs">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Tous les documents</h5>
                </div>
                <div class="mb-3">
                    <input type="search" class="form-control" placeholder="Rechercher un document">
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Propriétaire</th>
                            <th>Dernière modification</th>
                            <th>Catégories</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Devis du projet Armature</td>
                            <td>Marielle A.</td>
                            <td>18 septembre 2024</td>
                            <td>Devis, Armature, Projet</td>
                        </tr>
                        <tr>
                            <td>Contrat maintenance</td>
                            <td>Jean B.</td>
                            <td>20 septembre 2024</td>
                            <td>Contrat, Maintenance</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload de Documents</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="dropzone" id="dropzone">
                            Glissez-déposez vos fichiers ici ou cliquez pour sélectionner.
                        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <scrip src="{{ asset('js/my.js') }}"></scrip>
</body>
</html>
