<script>
    const dropzone = document.getElementById('dropzone');
    const fileList = document.getElementById('fileList');
    const uploadUrl = '/upload'; // Route Laravel pour gérer les fichiers
    let files = [];

    // Style lors du dragover
    dropzone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropzone.classList.add('dragover');
    });

    // Retirer le style au dragleave
    dropzone.addEventListener('dragleave', () => {
        dropzone.classList.remove('dragover');
    });

    // Gestion du drop
    dropzone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropzone.classList.remove('dragover');
        const droppedFiles = Array.from(e.dataTransfer.files);
        addFiles(droppedFiles);
    });

    // Gestion du clic
    dropzone.addEventListener('click', () => {
        const input = document.createElement('input');
        input.type = 'file';
        input.multiple = true;
        input.addEventListener('change', (e) => {
            const selectedFiles = Array.from(e.target.files);
            addFiles(selectedFiles);
        });
        input.click();
    });

    // Ajouter des fichiers à la liste
    function addFiles(newFiles) {
        newFiles.forEach(file => {
            if (!files.some(existingFile => existingFile.name === file.name)) {
                files.push(file);
                const li = document.createElement('li');
                li.textContent = file.name;
                li.classList.add('list-group-item');
                fileList.appendChild(li);
            }
        });
    }

    // Envoi des fichiers au serveur
    document.getElementById('uploadBtn').addEventListener('click', async () => {
        if (files.length === 0) {
            alert('Aucun fichier sélectionné.');
            return;
        }

        const formData = new FormData();
        files.forEach(file => formData.append('files[]', file));

        try {
            const response = await fetch(uploadUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });

            if (response.ok) {
                alert('Fichiers téléchargés avec succès !');
                fileList.innerHTML = '';
                files = [];
            } else {
                alert('Erreur lors du téléchargement.');
            }
        } catch (error) {
            console.error('Erreur :', error);
            alert('Erreur de communication avec le serveur.');
        }
    });
</script>
