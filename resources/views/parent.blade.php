<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard Parent - AcademiCore</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="icon" href="/assets/academicore1.jpg" type="image/jpg" />
  <style>
    h2, h4 {
      text-align: center;
    }
    .card:hover {
      transform: scale(1.02);
      transition: 0.3s ease-in-out;
    }
  </style>
  <script>
    let matriculeEleve = "";
    let classeEleve = "";

    function afficherDonnees() {
      matriculeEleve = document.getElementById('matricule').value.trim();
      classeEleve = document.getElementById('classe').value.trim();

      if (matriculeEleve === '' || classeEleve === '') {
        alert('Veuillez saisir le matricule et la classe.');
        return;
      }

      document.getElementById('welcome').textContent = `Bienvenue {Parent} - Élève ${matriculeEleve} (classe ${classeEleve})`;

      document.getElementById('zone-matricule').style.display = 'none';
      document.getElementById('zone-sections').style.display = 'block';

      document.querySelectorAll('.section-classe').forEach(e => e.textContent = classeEleve);
      document.querySelectorAll('.section-matricule').forEach(e => e.textContent = matriculeEleve);
    }

    function toggleSection(id) {
      const section = document.getElementById(id);
      document.querySelectorAll('.collapse').forEach(s => {
        if (s.id !== id) s.classList.remove('show');
      });
      section.classList.toggle('show');
    }
  </script>
</head>
<body>
<div class="container mt-5">
  <h2 class="mb-4" id="welcome">Bienvenue {Parent}</h2>

  <!-- Formulaire -->
  <div id="zone-matricule">
    <div class="card shadow mb-4">
      <div class="card-body">
        <h5 class="card-title text-center">Entrer les informations de l'élève</h5>
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" id="matricule" class="form-control" placeholder="Matricule de l'élève" />
          </div>
          <div class="col-md-6">
            <input type="text" id="classe" class="form-control" placeholder="Classe de l'élève" />
          </div>
        </div>
        <div class="text-end mt-3">
          <button class="btn btn-primary" onclick="afficherDonnees()">Valider</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Zone dynamique -->
  <div id="zone-sections" style="display:none;">
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card shadow h-100">
          <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title text-center">Notes</h5>
            <p class="text-center">Consulte les notes de ton enfant.</p>
            <div class="d-grid">
              <a href="#section-notes" class="btn btn-outline-success" onclick="toggleSection('section-notes')">Voir les notes</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow h-100">
          <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title text-center">Absences</h5>
            <p class="text-center">Consulte les absences de ton enfant.</p>
            <div class="d-grid">
              <a href="#section-absences" class="btn btn-outline-warning" onclick="toggleSection('section-absences')">Voir les absences</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow h-100">
          <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title text-center">Sanctions</h5>
            <p class="text-center">Consulte les sanctions de ton enfant.</p>
            <div class="d-grid">
              <a href="#section-sanctions" class="btn btn-outline-danger" onclick="toggleSection('section-sanctions')">Voir les sanctions</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow h-100">
          <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title text-center">Emploi du temps</h5>
            <p class="text-center">Consulte l'emploi du temps de ton enfant.</p>
            <div class="d-grid">
              <a href="#section-emplois" class="btn btn-outline-primary" onclick="toggleSection('section-emplois')">Voir l'emploi du temps</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Sections -->
    <div class="collapse mt-4" id="section-notes">
      <div class="card card-body">
        <h4>Notes pour l'élève <span class="section-matricule"></span> (classe <span class="section-classe"></span>)</h4>
        <p>Ici seront affichées toutes les notes.</p>
      </div>
    </div>

    <div class="collapse mt-4" id="section-absences">
      <div class="card card-body">
        <h4>Absences pour l'élève <span class="section-matricule"></span> (classe <span class="section-classe"></span>)</h4>
        <p>Ici seront affichées toutes les absences.</p>
      </div>
    </div>

    <div class="collapse mt-4" id="section-sanctions">
      <div class="card card-body">
        <h4>Sanctions pour l'élève <span class="section-matricule"></span> (classe <span class="section-classe"></span>)</h4>
        <p>Ici seront affichées toutes les sanctions.</p>
      </div>
    </div>

    <div class="collapse mt-4" id="section-emplois">
      <div class="card card-body">
        <h4>Emploi du temps pour l'élève <span class="section-matricule"></span> (classe <span class="section-classe"></span>)</h4>
        <p>Ici sera affiché l'emploi du temps.</p>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
