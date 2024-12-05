<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .templates-section {
            background-color: #f9f0e6;
            padding: 20px;
        }
        .templates-section .card {
            border: none;
        }
        .recent-docs .card {
            border: 1px solid #e3e3e3;
        }
    </style>
</head>
<body>
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
                <div class="card" style="width: 150px;">
                    <div class="card-body text-center">
                        <div class="placeholder mb-2" style="height: 100px; background-color: #f3f3f3;"></div>
                        <h6 class="card-title">Contrat employé</h6>
                        <p class="text-muted small">Contrat</p>
                    </div>
                </div>
                <!-- Add more templates similarly -->
            </div>
        </div>

        <!-- Section: Documents récents -->
        <div class="recent-docs mb-5">
            <h5>Documents récents</h5>
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
                <!-- Add more recent documents similarly -->
            </div>
        </div>

        <!-- Section: Tous les documents -->
        <div class="all-docs">
            <h5>Tous les documents</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <button class="btn btn-warning">Importer</button>
                    <button class="btn btn-primary">Créer un nouveau document</button>
                </div>
                <div>
                    <input type="search" class="form-control" placeholder="Rechercher un document">
                </div>
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
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
