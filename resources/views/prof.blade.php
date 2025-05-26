
<!-- dashboard_professeur.html -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Professeur - AcademiCore</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="/assets/academicore1.jpg" type="image/jpg" />
  <style>
    body {
      background-color: #f8f9fa;
    }
    h2, h4 {
      text-align: center;
    }
    .card {
      transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }
  </style>
</head>
<body>
<div class="container mt-5">
  <h2 class="mb-4 text-primary">Bienvenue M. {Professeur}</h2>

  <div class="row g-4 justify-content-center">
    <div class="col-md-4">
      <div class="card border-success shadow">
        <div class="card-body text-center">
          <h5 class="card-title text-success">Notes</h5>
          <p class="card-text">Ajouter ou modifier les notes des élèves.</p>
          <a href="#gestion-notes" class="btn btn-outline-success" data-bs-toggle="collapse">Gérer les notes</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-warning shadow">
        <div class="card-body text-center">
          <h5 class="card-title text-warning">Absences</h5>
          <p class="card-text">Enregistrer les absences des élèves.</p>
          <a href="#gestion-absences" class="btn btn-outline-warning" data-bs-toggle="collapse">Gérer les absences</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-danger shadow">
        <div class="card-body text-center">
          <h5 class="card-title text-danger">Sanctions</h5>
          <p class="card-text">Attribuer ou consulter les sanctions.</p>
          <a href="#gestion-sanctions" class="btn btn-outline-danger" data-bs-toggle="collapse">Gérer les sanctions</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Gestion des Notes -->
  <div class="collapse mt-5" id="gestion-notes">
    <h4 class="text-success mb-3">Notes par classe</h4>
    <form class="row g-3">
      <div class="col-md-4">
        <label for="classeNotes" class="form-label">Classe</label>
        <select class="form-select" id="classeNotes">
          <option selected>Choisir...</option>
          <option value="6e">6e</option>
          <option value="5e">5e</option>
          <option value="4e">4e</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="nomEleve" class="form-label">Nom de l'élève</label>
        <input type="text" class="form-control" id="nomEleve">
      </div>
      <div class="col-md-4">
        <label for="matiere" class="form-label">Matière</label>
        <input type="text" class="form-control" id="matiere" placeholder="Ex: Mathématiques">
      </div>
      <div class="col-md-4">
        <label for="note" class="form-label">Note</label>
        <input type="number" step="0.01" class="form-control" id="note" placeholder="Ex: 14.5">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-success">Enregistrer</button>
      </div>
    </form>
  </div>

  <!-- Gestion des Absences -->
  <div class="collapse mt-5" id="gestion-absences">
    <h4 class="text-warning mb-3">Absences par classe</h4>
    <form class="row g-3">
      <div class="col-md-4">
        <label for="classeAbs" class="form-label">Classe</label>
        <select class="form-select" id="classeAbs">
          <option selected>Choisir...</option>
          <option value="6e">6e</option>
          <option value="5e">5e</option>
          <option value="4e">4e</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="nomEleveAbs" class="form-label">Nom de l'élève</label>
        <input type="text" class="form-control" id="nomEleveAbs">
      </div>
      <div class="col-md-4">
        <label for="dateAbsence" class="form-label">Date</label>
        <input type="date" class="form-control" id="dateAbsence">
      </div>
      <div class="col-md-4">
        <label for="heureAbsence" class="form-label">Heure</label>
        <input type="time" class="form-control" id="heureAbsence">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-warning">Enregistrer</button>
      </div>
    </form>
  </div>

  <!-- Gestion des Sanctions -->
  <div class="collapse mt-5" id="gestion-sanctions">
    <h4 class="text-danger mb-3">Sanctions par classe</h4>
    <form class="row g-3">
      <div class="col-md-4">
        <label for="classeSanction" class="form-label">Classe</label>
        <select class="form-select" id="classeSanction">
          <option selected>Choisir...</option>
          <option value="6e">6e</option>
          <option value="5e">5e</option>
          <option value="4e">4e</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="eleveSanction" class="form-label">Nom de l'élève</label>
        <input type="text" class="form-control" id="eleveSanction">
      </div>
      <div class="col-md-4">
        <label for="motifSanction" class="form-label">Motif</label>
        <input type="text" class="form-control" id="motifSanction">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-danger">Enregistrer</button>
      </div>
    </form>
  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
