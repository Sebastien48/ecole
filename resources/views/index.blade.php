<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AcademiCore - Accueil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="icon" href="/assets/academicore1.jpg" type="image/jpg" />
  <style>
    /* Fond image avec animation */
    body, html {
      height: 100%;
      margin: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      overflow: hidden;
    }
    .bg-image {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('https://i.pinimg.com/736x/97/37/3e/97373e53cc3c9b696fdaa50c484d782e.jpg') no-repeat center center/cover;
      filter: brightness(0.7);
      animation: bgAnim 30s ease-in-out infinite alternate;
      z-index: -1;
      will-change: transform, filter;
    }

    @keyframes bgAnim {
      0% {
        filter: brightness(0.7) blur(0);
        transform: scale(1) translate(0, 0);
      }
      50% {
        filter: brightness(0.8) blur(2px);
        transform: scale(1.05) translate(10px, 10px);
      }
      100% {
        filter: brightness(0.7) blur(0);
        transform: scale(1) translate(0, 0);
      }
    }

    /* Conteneur flou et centré */
    .centered-container {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0 20px;
    }

    .glass-box {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 16px;
      padding: 40px 30px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
      color: white;
      text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.7);
      max-width: 600px;
      width: 100%;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .btn-outline-primary {
      color: white;
      border-color: white;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    .btn-outline-primary:hover {
      background-color: white;
      color: #007bff;
      border-color: white;
    }
  </style>
</head>
<body>
  <div class="bg-image"></div>

  <div class="centered-container container">
    <div class="glass-box">
      <h1 class="mb-4">Bienvenue sur AcademiCore</h1>
      <p class="mb-4 fs-5">
        Une plateforme complète de gestion scolaire pour élèves, parents,
        professeurs et administrateurs.
      </p>
      <div>
        <a href="login.html" class="btn btn-primary me-3 px-4">Se connecter</a>
        <a href="register.html" class="btn btn-outline-primary px-4">S'inscrire</a>
      </div>
    </div>
  </div>
</body>
</html>
