<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard Admin - AcademiCore</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(to right, #eef2f3, #8e9eab);
      min-height: 100vh;
      padding-top: 40px;
    }

    /* Cards flottantes avec effet de flou et survol */
    .floating-card {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.2);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      transition: all 0.3s ease-in-out;
      cursor: pointer;
    }

    .floating-card:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
    }

    .card-body h5 {
      font-weight: bold;
    }

    .collapse .card-body {
      background-color: #ffffffee;
      border-radius: 10px;
    }
  </style>
  <script>
    function toggleSection(id, inputId) {
      const section = document.getElementById(id);
      const classe = document.getElementById(inputId).value.trim();
      if (!classe) {
        alert("Veuillez d'abord entrer une classe.");
        return;
      }
      document.querySelectorAll('.section-classe').forEach(e => e.textContent = classe);
      document.querySelectorAll('.collapse').forEach(sec => {
        if (sec.id !== id) sec.classList.remove('show');
      });
      section.classList.toggle('show');
    }
  </script>
</head>
<body>
  <div class="container">
    <h2 class="mb-4 text-center text-dark">Bienvenue {Administrateur}</h2>

    <div class="mb-4">
      <h4 class="text-center mb-3">Publier un emploi du temps</h4>
      <form>
        <div class="row g-3 align-items-end">
          <div class="col-md-4">
            <label for="classe" class="form-label">Classe</label>
            <input type="text" id="classe" class="form-control" placeholder="Ex: 5eA">
          </div>
          <div class="col-md-5">
            <label for="fichier" class="form-label">Fichier emploi du temps</label>
            <input type="file" id="fichier" class="form-control">
          </div>
          <div class="col-md-3">
            <button type="submit" class="btn btn-success w-100">Publier</button>
          </div>
        </div>
      </form>
    </div>

    <div class="mb-4 text-center">
      <label for="classe-selection" class="form-label fw-bold">Entrer une classe pour consulter :</label>
      <input type="text" id="classe-selection" class="form-control mx-auto" style="max-width: 300px;" placeholder="Ex: 3eB">
    </div>

    <div class="row g-4">
      <div class="col-md-3">
        <div class="card floating-card">
          <div class="card-body text-center">
            <h5 class="card-title">Toutes les notes</h5>
            <a href="#section-notes" class="btn btn-outline-primary" onclick="toggleSection('section-notes', 'classe-selection')">Voir</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card floating-card">
          <div class="card-body text-center">
            <h5 class="card-title">Toutes les absences</h5>
            <a href="#section-absences" class="btn btn-outline-warning" onclick="toggleSection('section-absences', 'classe-selection')">Voir</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card floating-card">
          <div class="card-body text-center">
            <h5 class="card-title">Toutes les sanctions</h5>
            <a href="#section-sanctions" class="btn btn-outline-danger" onclick="toggleSection('section-sanctions', 'classe-selection')">Voir</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card floating-card">
          <div class="card-body text-center">
            <h5 class="card-title">Emplois du temps</h5>
            <a href="#section-emplois" class="btn btn-outline-success" onclick="toggleSection('section-emplois', 'classe-selection')">Voir</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Sections dynamiques -->
    <div class="collapse mt-4" id="section-notes">
      <div class="card card-body">
        <h4>Notes pour la classe <span class="section-classe"></span></h4>
        <p>Ici seront affichées toutes les notes.</p>
      </div>
    </div>

    <div class="collapse mt-4" id="section-absences">
      <div class="card card-body">
        <h4>Absences pour la classe <span class="section-classe"></span></h4>
        <p>Ici seront affichées toutes les absences.</p>
      </div>
    </div>

    <div class="collapse mt-4" id="section-sanctions">
      <div class="card card-body">
        <h4>Sanctions pour la classe <span class="section-classe"></span></h4>
        <p>Ici seront affichées toutes les sanctions.</p>
      </div>
    </div>

    <div class="collapse mt-4" id="section-emplois">
      <div class="card card-body">
        <h4>Emploi du temps pour la classe <span class="section-classe"></span></h4>
        <p>Ici seront affichés l'emploi du temps.</p>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
