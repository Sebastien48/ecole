<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Inscription - AcademiCore</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="icon" href="/assets/academicore1.jpg" type="image/jpg" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      
      background: url('https://i.pinimg.com/736x/c7/27/5d/c7275d7d339d98e184e10f43ada26a68.jpg') no-repeat center center/cover;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px 0;
    }

    .container-overlay {
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 480px;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .logo-section {
      text-align: center;
      margin-bottom: 30px;
    }

    .logo-section h2 {
      color: #2c3e50;
      font-weight: 700;
      font-size: 2rem;
      margin: 0;
    }

    .logo-section p {
      color: #7f8c8d;
      margin-top: 5px;
      font-size: 0.9rem;
    }

    .role-selection {
      margin-bottom: 30px;
    }

    .role-selection h3 {
      color: #2c3e50;
      font-weight: 600;
      text-align: center;
      margin-bottom: 20px;
      font-size: 1.3rem;
    }

    .role-choice {
      display: flex;
      gap: 15px;
      justify-content: center;
    }

    .role-choice button {
      flex: 1;
      padding: 15px 20px;
      border: 2px solid #e3e6f0;
      background: white;
      color: #5a6c7d;
      border-radius: 12px;
      font-weight: 600;
      transition: all 0.3s ease;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }

    .role-choice button:hover {
      border-color: #667eea;
      color: #667eea;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
    }

    #registerForm {
      display: none;
    }

    .form-group {
      margin-bottom: 25px;
    }

    .form-label {
      display: block;
      margin-bottom: 8px;
      color: #2c3e50;
      font-weight: 600;
      font-size: 0.9rem;
    }

    .input-group {
      position: relative;
    }

    .input-group-text {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      color: #a0a0a0;
      z-index: 10;
      padding: 0;
    }

    .form-control {
      width: 100%;
      padding: 15px 15px 15px 45px;
      border: 2px solid #e3e6f0;
      border-radius: 12px;
      background-color: #f8f9fa;
      color: #2c3e50;
      font-size: 0.95rem;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      outline: none;
      border-color: #667eea;
      background-color: white;
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .form-control::placeholder {
      color: #a0a0a0;
    }

    .btn-container {
      display: flex;
      gap: 15px;
      margin-top: 30px;
    }

    .btn {
      flex: 1;
      padding: 15px 20px;
      border-radius: 12px;
      font-weight: 600;
      font-size: 0.95rem;
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;
    }

    .btn-secondary {
      background-color: #6c757d;
      color: white;
    }

    .btn-secondary:hover {
      background-color: #5a6268;
      transform: translateY(-2px);
    }

    .btn-primary {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .form-step {
      animation: fadeIn 0.5s ease-in-out;
    }

    .step-header {
      text-align: center;
      margin-bottom: 30px;
      padding-bottom: 20px;
      border-bottom: 2px solid #e3e6f0;
    }

    .step-header h4 {
      color: #2c3e50;
      font-weight: 700;
      margin-bottom: 5px;
      font-size: 1.4rem;
    }

    .step-subtitle {
      color: #7f8c8d;
      font-size: 0.9rem;
      margin: 0;
    }

    .form-text {
      color: #7f8c8d;
      font-size: 0.8rem;
      margin-top: 5px;
      display: block;
    }

   

    .login-link a {
      color: #667eea;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .login-link a:hover {
      color: #764ba2;
    }

    .hidden-field {
      display: none;
    }

    .visible-field {
      display: block;
    }

    @media (max-width: 576px) {
      .container-overlay {
        margin: 0 15px;
        padding: 30px 25px;
      }
      
      .role-choice {
        flex-direction: column;
      }
      
      .btn-container {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <div class="container-overlay">
    <div class="logo-section">
      <h2>AcademiCore</h2>
      <p>Créez votre compte</p>
    </div>

    <div id="roleSelection" class="role-selection">
      <h3>Vous êtes un :</h3>
      <div class="role-choice">
        <button id="btnEleve" type="button">
          <i class="fas fa-user-graduate"></i>
          Élève
        </button>
        <button id="btnParent" type="button">
          <i class="fas fa-user-friends"></i>
          Parent
        </button>
      </div>
    </div>

    <form id="registerForm" novalidate>
      <input type="hidden" id="selectedRole" name="role" value="">

      <!-- Étape 1: Informations personnelles -->
      <div id="step1" class="form-step">
        <div class="step-header">
          <h4><i class="fas fa-user-circle me-2"></i>Informations personnelles</h4>
          <p class="step-subtitle">Étape 1 sur 2</p>
        </div>

        <div class="form-group">
          <label for="nomPrenom" class="form-label">Nom & Prénom</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
            <input type="text" class="form-control" name="nomPrenom" id="nomPrenom" required placeholder="Ex : Jean Dupont">
          </div>
        </div>

        <div class="form-group" id="matriculeField">
          <label for="matricule" class="form-label">Matricule</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
            <input type="text" class="form-control" name="matricule" id="matricule" required placeholder="Entrez votre matricule">
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="form-label">Adresse e-mail</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            <input type="email" class="form-control" name="email" id="email" required placeholder="exemple@domaine.com">
          </div>
        </div>

        <div class="form-group hidden-field" id="classeField">
          <label for="classe" class="form-label">Classe</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-school"></i></span>
            <input type="text" class="form-control" name="classe" id="classe" placeholder="Ex : Terminale C">
          </div>
        </div>

        <div class="form-group hidden-field" id="telephoneField">
          <label for="telephone" class="form-label">Numéro de téléphone</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
            <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="Ex : 06 00 00 00 00">
          </div>
        </div>

        <div class="btn-container">
          <button type="button" id="backButton" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Retour
          </button>
          <button type="button" id="nextButton" class="btn btn-primary">
            Suivant<i class="fas fa-arrow-right ms-2"></i>
          </button>
        </div>
      </div>

      <!-- Étape 2: Sécurité -->
      <div id="step2" class="form-step" style="display: none;">
        <div class="step-header">
          <h4><i class="fas fa-shield-alt me-2"></i>Sécurité du compte</h4>
          <p class="step-subtitle">Étape 2 sur 2</p>
        </div>

        <div class="form-group">
          <label for="password" class="form-label">Mot de passe</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
            <input type="password" class="form-control" name="password" id="password" required placeholder="Mot de passe sécurisé">
          </div>
          <small class="form-text">Le mot de passe doit contenir au moins 6 caractères</small>
        </div>

        <div class="form-group">
          <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
            <input type="password" class="form-control" id="confirmPassword" required placeholder="Répétez le mot de passe">
          </div>
        </div>

        <div class="btn-container">
          <button type="button" id="prevButton" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Précédent
          </button>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-user-plus me-2"></i>S'inscrire
          </button>
        </div>
      </div>
    </form>

    <div class="login-link">
      <a href="login.html">Déjà inscrit ? Connectez-vous</a>
    </div>
  </div>

  <script>
    const btnEleve = document.getElementById('btnEleve');
    const btnParent = document.getElementById('btnParent');
    const backButton = document.getElementById('backButton');
    const nextButton = document.getElementById('nextButton');
    const prevButton = document.getElementById('prevButton');
    const roleSelection = document.getElementById('roleSelection');
    const registerForm = document.getElementById('registerForm');
    const selectedRoleInput = document.getElementById('selectedRole');
    const step1 = document.getElementById('step1');
    const step2 = document.getElementById('step2');

    const classeField = document.getElementById('classeField');
    const telephoneField = document.getElementById('telephoneField');
    const matriculeField = document.getElementById('matriculeField');

    function showForm() {
      roleSelection.style.display = 'none';
      registerForm.style.display = 'block';
      step1.style.display = 'block';
      step2.style.display = 'none';
    }

    function hideForm() {
      registerForm.style.display = 'none';
      roleSelection.style.display = 'block';
      step1.style.display = 'block';
      step2.style.display = 'none';
      registerForm.reset();
    }

    function goToStep2() {
      step1.style.display = 'none';
      step2.style.display = 'block';
    }

    function goToStep1() {
      step2.style.display = 'none';
      step1.style.display = 'block';
    }

    function validateStep1() {
      const requiredFields = step1.querySelectorAll('input[required]');
      let isValid = true;
      
      requiredFields.forEach(field => {
        if (!field.value.trim()) {
          field.focus();
          isValid = false;
          return false;
        }
      });

      // Validation de l'email
      const email = document.getElementById('email');
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email.value)) {
        alert('Veuillez saisir une adresse e-mail valide.');
        email.focus();
        return false;
      }

      return isValid;
    }

    btnEleve.addEventListener('click', () => {
      selectedRoleInput.value = 'eleve';
      showForm();

      // Afficher les champs spécifiques aux élèves
      classeField.classList.remove('hidden-field');
      classeField.classList.add('visible-field');
      matriculeField.classList.remove('hidden-field');
      matriculeField.classList.add('visible-field');
      
      // Masquer les champs spécifiques aux parents
      telephoneField.classList.remove('visible-field');
      telephoneField.classList.add('hidden-field');

      // Gérer les attributs required
      document.getElementById('classe').setAttribute('required', 'required');
      document.getElementById('matricule').setAttribute('required', 'required');
      document.getElementById('telephone').removeAttribute('required');
    });

    btnParent.addEventListener('click', () => {
      selectedRoleInput.value = 'parent';
      showForm();

      // Afficher les champs spécifiques aux parents
      telephoneField.classList.remove('hidden-field');
      telephoneField.classList.add('visible-field');
      
      // Masquer les champs spécifiques aux élèves
      classeField.classList.remove('visible-field');
      classeField.classList.add('hidden-field');
      matriculeField.classList.remove('visible-field');
      matriculeField.classList.add('hidden-field');

      // Gérer les attributs required
      document.getElementById('telephone').setAttribute('required', 'required');
      document.getElementById('classe').removeAttribute('required');
      document.getElementById('matricule').removeAttribute('required');
    });

    backButton.addEventListener('click', () => {
      hideForm();
    });

    nextButton.addEventListener('click', () => {
      if (validateStep1()) {
        goToStep2();
      } else {
        alert('Veuillez remplir tous les champs obligatoires.');
      }
    });

    prevButton.addEventListener('click', () => {
      goToStep1();
    });

    registerForm.addEventListener('submit', (e) => {
      e.preventDefault();
      
      if (!registerForm.checkValidity()) {
        registerForm.reportValidity();
        return;
      }

      const password = document.getElementById('password').value;
      const confirm = document.getElementById('confirmPassword').value;

      if (password !== confirm) {
        alert("Les mots de passe ne correspondent pas.");
        return;
      }

      // Validation du mot de passe (optionnel)
      if (password.length < 6) {
        alert("Le mot de passe doit contenir au moins 6 caractères.");
        return;
      }

      const formData = new FormData(registerForm);
      const data = {};
      formData.forEach((value, key) => {
        if (value.trim() !== '') {
          data[key] = value;
        }
      });

      // Simulation de l'inscription réussie
      alert(`Inscription réussie !\n\nRôle : ${data.role === 'eleve' ? 'Élève' : 'Parent'}\nNom : ${data.nomPrenom}\nEmail : ${data.email}`);
      
      hideForm();
    });

    // Animation au focus des inputs
    document.querySelectorAll('.form-control').forEach(input => {
      input.addEventListener('focus', function() {
        this.parentElement.style.transform = 'scale(1.02)';
      });
      
      input.addEventListener('blur', function() {
        this.parentElement.style.transform = 'scale(1)';
      });
    });
  </script>
</body>
</html>