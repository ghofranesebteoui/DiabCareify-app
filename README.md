# DiabCareify-app

## 📖 Description  
**DiabCareify-App** est une application web développée en **PHP natif** qui permet de gérer et d'analyser l'indicateur de santé :  
**"Taux des diabétiques et hypertendus dépistés au stade de complication".**  

Ce projet vise à faciliter une gestion efficace des données de santé, permettant une meilleure compréhension des tendances et une amélioration de la prise en charge.

---

## ✨ Fonctionnalités  
- 📊 Gestion des données liées au taux de dépistage.  
- ✏️ Ajout, modification et suppression des données des patients.  
- 📈 Visualisation et suivi de l'évolution des indicateurs de santé via des rapports.  
- 🔒 Système d’authentification pour sécuriser l’accès à l’application.  
- 📊 Statistiques et graphiques pour une meilleure analyse des données.  

---

## 🛠️ Technologies utilisées  
- **Langage backend** : PHP (natif)  
- **Base de données** : MySQL  
- **Frontend** : HTML5, CSS3, JavaScript  
- **Outils de modélisation** : StarUML pour les diagrammes UML  
- **Méthodologie de développement** : Scrum  

---

## 🚀 Installation  

1. **Clonez ce repository** sur votre machine locale :  
   ```bash
   git clone https://github.com/username/DiabCareify-app.git
2. **Importez le fichier** de la base de données dans votre serveur MySQL :
  Importez diabcareify_db.sql.

3. **Configurez les paramètres** de connexion à la base de données dans config.php :
   <?php
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'diabcareify');
  define('DB_USER', 'root');
  define('DB_PASS', 'votre_mot_de_passe');
  ?>
4. **Démarrez votre serveur local** (XAMPP, WAMP, ou autre).
5. **Accédez à l'application** via votre navigateur :
  http://localhost/DiabCareify-app
  
  ---

  
## 🗂️ Diagrammes UML  
Les diagrammes UML utilisés pour ce projet incluent :  
- **Diagramme de cas d'utilisation**  
- **Diagramme de classe**  
- **Diagramme de séquence**  

📂 Les fichiers des diagrammes sont disponibles dans le dossier `/uml`.

---

## 🤝 Contribution  
Les contributions sont les bienvenues ! Pour contribuer :  
1. **Forkez** ce repository.  
2. **Créez une branche** pour votre fonctionnalité :  
   ```bash
   git checkout -b feature-nom-de-la-fonctionnalite
3. **Effectuez vos modifications** et committez-les :
  git commit -m "Ajout de [votre modification]"
4. **Poussez vos modifications** sur votre fork :
  git push origin feature-nom-de-la-fonctionnalite
5. **Ouvrez une Pull Request** sur ce repository.

---

## 👩‍💻 Auteur
Ghofrane Sebteoui

Étudiante en technologie de l'information à ISET Rades
Stagiaire en perfectionnement à CIMF Tunisie

---

## 📜 Licence
Ce projet est sous licence MIT.
