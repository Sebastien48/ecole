<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Connexion - AcademiCore</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="icon" href="assets/academicore1.jpg" type="image/jpg" />
  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .bg-image {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: url('https://i.pinimg.com/736x/c7/27/5d/c7275d7d339d98e184e10f43ada26a68.jpg') no-repeat center center/cover;
      filter: brightness(0.5);
      animation: bgAnim 60s ease-in-out infinite alternate;
      z-index: -2;
    }

    .login-section {
      background: linear-gradient(135deg, #2b5876, #4e4376);
      padding: 40px 50px;
      border-radius: 16px;
      box-shadow: 0 15px 30px rgba(0,0,0,0.4);
      width: 100%;
      max-width: 450px;
      z-index: 10;
      color: #fff;
    }

    h2 {
      color: #fff;
      margin-bottom: 30px;
      font-weight: 700;
      text-align: center;
    }

    label {
      font-weight: 600;
      color: #f0f0f0;
    }

    .btn-google {
      background-color: #fff;
      color: #444;
      border: none;
      width: 100%;
      margin-top: 15px;
    }

    .btn-google:hover {
      background-color: #f1f1f1;
    }

    .text-small {
      font-size: 0.9rem;
      text-align: center;
      margin-top: 15px;
    }

    a {
      color: #ddd;
      text-decoration: underline;
    }

    a:hover {
      color: #fff;
    }

    .input-group-text {
      background-color: #ddd;
      color: #333;
    }
  </style>
</head>
<body>
  <div class="bg-image"></div>

  <section class="login-section">
    <h2>Connexion</h2>
    <form id="loginForm">
      <div class="mb-3">
        <label class="form-label">Email ou Matricule</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          <input type="text" class="form-control" name="identifiant" placeholder="Email ou matricule" required />
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Mot de passe</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-lock"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Mot de passe" required />
        </div>
      </div>

      <button type="submit" class="btn btn-primary w-100">Se connecter</button>

      <div class="text-small mt-3">
        <a href="register.html">Créer un compte</a> | <a href="#">Mot de passe oublié ?</a>
      </div>

      <hr class="my-4" />

      <button type="button" class="btn btn-google">
        <i class="fab fa-google me-2"></i> Se connecter avec Google
      </button>
    </form>
  </section>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>