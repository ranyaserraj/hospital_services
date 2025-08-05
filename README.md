# 🏥 Application de Digitalisation des Services Hospitaliers

Application web développée pour l'Hôpital Ghassani à Fès dans le cadre de mon stage à l'ENSIAS.

## 🚀 Fonctionnalités
- 🔐 Gestion des utilisateurs (médecins, secrétaires, patients)
- 📅 Prise de rendez-vous en ligne
- 👨‍⚕️ Gestion des patients (CRUD)
- 📝 Rapports médicaux (PDF)
- 💳 Génération de factures

## ⚙️ Technologies utilisées
**Backend :** PHP/Laravel, MySQL, phpMyAdmin, XAMPP  
**Frontend :** HTML/CSS/JS, Bootstrap  
**Outils :** Git, DomPDF

---

## 📸 Aperçu de l'application

### Page d'accueil
<img src="docs/homepage.png" width="600"/>
<img src="docs/homepage2.png" width="600"/>
### Prise de rendez-vous
<img src="docs/rendezvous.png" width="600"/>
### Gestion des patients
<img src="docs/interfaceDocteur.png" width="600"/>

### Rapport médical PDF
<img src="docs/rapport-pdf.png" width="600"/>
<img src="docs/rapport-pdf2.png" width="600"/>
## 🚀 Installation

1. **Cloner le projet**
```bash
git clone [URL_DU_REPOSITORY]
```

2. **Installer les dépendances**
```bash
composer install
```

3. **Configuration**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Base de données** (configurer `.env` puis)
```bash
php artisan migrate
php artisan db:seed
```

5. **Lancer l'application**
```bash
php artisan serve
```

---

## 👩‍💻 Auteur

**Ranya SERRAJ ANDALOUSSI** - ENSIAS (1ère année)  
Encadrante : MEZZAT Tasnime

📧 [ranyaserraj18@gmail.com](mailto:ranyaserraj18@gmail.com) | 🔗 [LinkedIn](https://www.linkedin.com/in/ranya-serraj/)
