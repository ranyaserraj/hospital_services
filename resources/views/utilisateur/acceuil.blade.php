<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Médical</title>
    <link rel="stylesheet" href="{{ asset('css/acceuil.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("btn_inscrire").addEventListener("click", function() {
                window.location.href = "{{ route('auth.registration') }}";
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("btn_connecter").addEventListener("click", function() {
                window.location.href = "{{ route('auth.login') }}";
            });
        });
    </script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const textH1 = "Bienvenue dans votre site médical";
            const textH2 = "Notre Équipe et Notre Travail";
            const welcomeId = document.getElementById('welcome-id');
            const teamId = document.getElementById('team-id');
            let indexH1 = 0;
            let indexH2 = 0;

            function typeLetterH1() {
                if (indexH1 < textH1.length) {
                    welcomeId.textContent += textH1.charAt(indexH1);
                    indexH1++;
                    setTimeout(typeLetterH1, 100); // Adjust the speed by changing the timeout value
                } else {
                    setTimeout(resetTextH1, 1000); // Wait for 1 second before resetting
                }
            }

            function resetTextH1() {
                welcomeId.textContent = '';
                indexH1 = 0;
                typeLetterH1();
            }

            function typeLetterH2() {
                if (indexH2 < textH2.length) {
                    teamId.textContent += textH2.charAt(indexH2);
                    indexH2++;
                    setTimeout(typeLetterH2, 100); // Adjust the speed by changing the timeout value
                } else {
                    setTimeout(resetTextH2, 1000); // Wait for 1 second before resetting
                }
            }

            function resetTextH2() {
                teamId.textContent = '';
                indexH2 = 0;
                typeLetterH2();
            }

            // Clear the text content initially
            welcomeId.textContent = '';
            teamId.textContent = '';
            typeLetterH1();
            setTimeout(typeLetterH2, 2000); // Start typing the second text after 2 seconds
        });
    </script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Medical">
            <span class="logo-name"></span>
        </div>
        <ul class="nav-links">
            <li><a href="#accueil" class="menu">Accueil</a></li>
            <li><a href="#services" class="menu">Services</a></li>
            <li><a href="#docteurs" class="menu">Docteurs</a></li>
            <li><a href="#question" class="menu">Questions</a></li>
            <li><a href="#contact" class="menu">Contactez-nous</a></li>
        </ul>
        <div class="container mt-5">
        <div class="auth-buttons">
            <a href="{{ route('login') }}" class="btn auth-btn" id="btn_connecter">Login</a>
            <a href="{{ route('register') }}" class="btn auth-btn" id="btn_inscrire">Register</a>
        </div>
    </div>
    </nav>

    <!-- Contenu principal -->
    <div class="main-content">
        <section class="welcome-section" id="accueil">
            <div class="welcome-text">
                <h1 id="welcome-id">Bienvenue dans votre site médical</h1>
                <p>Explorez nos services pour une meilleure santé.</p>
            </div>
        </section>
    </div>

    <!-- Infos sur l'hôpital -->
    <section class="hospital-info animate" id="services">
        <div class="hospital-info1">
           
        </div>
        <div class="hospital-info1">
            <div class="info-box" id="info1">
                <h2>Informations Utiles</h2>
                <p>Notre hôpital est ouvert 24h/24 et 7j/7 pour répondre à tous vos besoins médicaux urgents. Pour une admission, veuillez apporter une pièce d'identité et votre carte d'assurance. Nos équipes sont disponibles pour vous guider et vous offrir le meilleur soin possible. N’hésitez pas à contacter notre accueil pour toute question ou assistance.</p>
            </div>
            <div class="info-box" id="info2">
                <h2>Services</h2>
                <p>Découvrez notre gamme complète de services médicaux spécialisés, incluant des consultations en cardiologie, neurologie, et pédiatrie. Nous proposons également des examens de diagnostic avancés et des traitements personnalisés pour chaque patient. Notre équipe de professionnels expérimentés est dédiée à fournir des soins de haute qualité pour améliorer votre santé et votre bien-être.</p>
            </div>
            <div class="info-box " id="info3">
                <h2>Équipe</h2>
                <p>Rencontrez notre équipe de professionnels dévoués, composée de médecins spécialistes, infirmiers expérimentés et personnels administratif compétent. Chacun de nos membres joue un rôle crucial dans le maintien de l'excellence de nos services. Nous travaillons ensemble avec passion et expertise pour offrir des soins de qualité supérieure et assurer le bien-être de nos patients à chaque étape de leur parcours de santé.</p>
            </div>
        </div>
    </section>
    <section class="questions " id="question" >
        <div class="questionContainer">
            <div class="question">
                <div class="icone animate">
                    <img src="{{asset('images/services.png')}}" alt="services">
                    <h3>Quels sont les services médicaux offerts par L'Hopital ?</h3>
                </div>
               <p>Notre hôpital propose des consultations en médecine générale, des soins spécialisés (cardiologie, dermatologie, pédiatrie, gynécologie), ainsi que des services d'urgence 24/7. Nous offrons également des diagnostics avancés comme les radiographies et les analyses de laboratoire.</p>
            </div>

            <div class="question">
                <div class="icone animate">
                    <img src="{{asset('images/rend.png')}}" alt="services">
                    <h3>Comment puis-je prendre rendez-vous avec un médecin ou une téleconsultation ?</h3>
                </div>
            <p>Pour prendre rendez-vous avec un médecin ou organiser une téléconsultation, veuillez visiter notre site web ou contacter notre service client. Vous pouvez également utiliser notre application web pour choisir un créneau horaire disponible et remplir les informations nécessaires pour votre consultation.</p>
            </div>
            <div class="question">
                <div class="icone animate">
                    <img src="{{asset('images/horaires.png')}}" alt="services">
                    <h3>Quels sont vos horaires d'ouverture ?</h3>
                </div>
            <p>Nos horaires d'ouverture sont du lundi au vendredi, de 8h00 à 18h00, et le samedi de 9h00 à 13h00. Nous sommes fermés le dimanche. Pour plus d'informations ou des horaires spécifiques pour les consultations, veuillez nous contacter directement.</p>
            </div>
            <div class="question">
                <div class="icone animate">
                    <img src="{{asset('images/asssurance.png')}}" alt="services">
                    <h3>Acceptez-vous les assurances santé et quelles sont-elles ?</h3>
                </div>
             <p>Oui, nous acceptons plusieurs assurances santé marocaines, telles que la CNSS, la CMR, ainsi que des assurances privées comme RMA Watanya, Wafa Assurance, et Allianz Maroc. Pour plus de détails sur les couvertures, veuillez contacter votre assurance.</p>
            </div>
        </div>
    </section>
    <section>

    </section>
    <!-- Image des médecins et description -->
    <section class="team-section animate" id="docteurs">
        <div class="team-description">
            <h2 id="team-id">Notre Équipe et Notre Travail</h2>
            <p>Notre équipe est composée de professionnels compétents et engagés qui travaillent ensemble pour offrir les meilleurs soins possibles à nos patients. Chaque membre de notre équipe apporte une expertise unique et complémentaire, garantissant une prise en charge complète et de haute qualité.

                Nos médecins, spécialisés dans divers domaines, sont à la pointe des dernières avancées médicales. Ils collaborent étroitement pour établir des diagnostics précis et des plans de traitement adaptés à chaque patient. Leur expérience et leur dévouement assurent des soins efficaces et personnalisés.
                
                Le personnel infirmier et administratif joue également un rôle essentiel dans le quotidien de nos patients. Leur attention aux détails et leur approche bienveillante contribuent à créer un environnement de soins chaleureux et sécurisé.</p>
        </div>
        <div class="team-image">
            <img src="{{ asset('images/team.jpg') }}" alt="Équipe médicale">
        </div>
    </section>


    <!-- Section Contact -->
    <section class="contact animate" id="contact">
        <div class="headform">
            <img src="{{asset('images/logo.png')}}" alt="">
            <h1>Contactez nous </h1>
        </div>
        <form action="#" method="post">
            @csrf
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Sujet:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Envoyer le Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-logo animate">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Medical">
            <span class="logo-name">Ma médecine</span>
        </div>
        <div class="footer-content">
        <div class="info">
            <div class="hospital-info">
                <i class="fa-solid fa-location-dot"></i>
                <p>123 Rue de l'Hôpital Fes, Maroc</p>
                <i class="fa-solid fa-envelope"></i>
                <p>Email: contact@votrehopital.com</p>
                <i class="fa-solid fa-phone"></i>
                <p>Téléphone: +1234567890</p>
            </div>
            <div class="hospital-other">
                <ul>
                    <li><a href="#acceuil">Acceuil</a></li>
                    <li><a href="">More information</a></li>
                    <li><a href="">Documents utiles</a></li>
                    <li><a href="">Prendre un rendez vous facile</a></li>
                </ul>
            </div>
            <div class="hospital-other">
                <ul>
                    <li><a href="#acceuil">Acceuil</a></li>
                    <li><a href="">More information</a></li>
                    <li><a href="">Documents utiles</a></li>
                    <li><a href="">Prendre un rendez vous facile</a></li>
                </ul>
            </div>
            <div class="hospital-other">
                <ul>
                    <li><a href="#acceuil">Acceuil</a></li>
                    <li><a href="">More information</a></li>
                    <li><a href="">Documents utiles</a></li>
                    <li><a href="">Prendre un rendez vous facile</a></li>
                </ul>
            </div>

        </div>
            <div class="social-links">
                <h3>Retrouvez-nous sur les Réseaux Sociaux</h3>
                <div class="social-icons">
                    <a href="https://facebook.com/votrepage" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/votrepage" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://linkedin.com/votrepage" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://instagram.com/votrepage" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <p>&copy; 2024 Votre Hôpital. Tous droits réservés.</p>
            <a href="https://www.google.com/maps/search/localisation+centre+el+ghassani+fes+maroc/@34.0409533,-5.0045955,15.02z?entry=ttu">Trouvez-nous sur la carte de Localisation</a> <!-- Lien vers votre carte de position -->
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-c5h5voUjQk0a1q74b5vW6vKs3vWPOdN8TAr2G6fl6cNg1C0eZrGGSoN1dCDGQWVNScc6z7Qw4B2C1BYUZt2c7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const observerOptions = {
                root: null,
                rootMargin: "0px",
                threshold: 0.1
            };

            function handleIntersect(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                        observer.unobserve(entry.target);
                    }
                });
            }

            const observer = new IntersectionObserver(handleIntersect, observerOptions);

            document.querySelectorAll('.animate').forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>
</html>