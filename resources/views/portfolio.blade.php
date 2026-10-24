
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio personnel de Jean Wilfried, développeur web.">
    <title>Jean Wilfried | Portfolio</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>

    <header class="header" id="haut">
        <a href="#accueil" class="logo">Mon<span>Portfolio</span></a>

        <button class="menu-toggle" id="menu-toggle"
                aria-label="Ouvrir le menu"
                aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="navigation" id="navigation">
            <a href="#accueil" class="nav-link active">Accueil</a>
            <a href="#apropos" class="nav-link">À propos</a>
            <a href="#competences" class="nav-link">Compétences</a>
            <a href="#projets" class="nav-link">Projets</a>
            <a href="#contact" class="nav-link">Contact</a>
        </nav>

        <div class="header-actions">
            <button class="theme-toggle" id="theme-toggle"
                    aria-label="Changer de thème">☾</button>
            <a href="#contact" class="btn btn-small">Me contacter</a>
        </div>
    </header>

    <main>
        <!-- ACCUEIL -->
        <section class="hero section" id="accueil">
            <div class="hero-content reveal">
                <p class="eyebrow">Bonjour, je suis</p>

                <h1>Jean <span>Wilfried</span></h1>
                <h2>Développeur Web</h2>

                <p class="hero-description">
                    Passionné par le développement web, je conçois
                    des interfaces modernes, rapides et adaptées
                    aux besoins des utilisateurs.
                </p>

                <div class="hero-buttons">
                    <a href="#contact" class="btn">✉ Me contacter</a>
                    <a href="#projets" class="btn btn-outline">
                        ◉ Voir mes projets
                    </a>
                </div>

                <div class="social-links">
                    <a href="https://github.com/" target="_blank"
                       rel="noopener noreferrer" aria-label="GitHub">GH</a>
                    <a href="https://www.linkedin.com/" target="_blank"
                       rel="noopener noreferrer" aria-label="LinkedIn">in</a>
                </div>
            </div>

            <div class="hero-image reveal">
                <div class="image-glow"></div>
                <div class="image-frame">
                    <img src="{{ asset('images/ma-photo.jpg') }}"
                         alt="Portrait de Jean Wilfried">
                </div>
                <span class="floating-dot dot-one"></span>
                <span class="floating-dot dot-two"></span>
            </div>
        </section>

        <!-- À PROPOS -->
        <section class="about section light-section" id="apropos">
            <div class="section-heading reveal">
                <p class="eyebrow">À propos de moi</p>
                <h2>Qui suis-je ?</h2>
                <span class="heading-line"></span>
            </div>

            <div class="about-grid">
                <div class="about-text reveal">
                    <p>
                        Je suis passionné par la création de sites web
                        et d'applications modernes. J'apprends à utiliser
                        HTML, CSS, JavaScript et Laravel pour transformer
                        des idées en projets concrets.
                    </p>

                    <p>
                        Mon objectif est de développer mes compétences,
                        de réaliser des projets utiles et de progresser
                        chaque jour dans le développement web.
                    </p>

                    <div class="personal-info">
                        <span>⌖ Yamoussoukro, Côte d'Ivoire</span>
                        <span>⌘ Développement web</span>
                    </div>
                </div>

                <div class="objectives reveal">
                    <h3>⌘ Mes objectifs</h3>
                    <ul>
                        <li>Développer des projets utiles et innovants</li>
                        <li>Maîtriser Laravel et les bonnes pratiques</li>
                        <li>Créer des interfaces modernes et accessibles</li>
                        <li>Construire un portfolio professionnel</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- COMPÉTENCES -->
        <section class="skills section" id="competences">
            <div class="section-heading reveal">
                <p class="eyebrow">Mes compétences</p>
                <h2>Technologies & outils</h2>
                <span class="heading-line"></span>
            </div>

            <div class="skills-grid">
                <article class="skill-card reveal">
                    <div class="skill-icon html-icon">5</div>
                    <h3>HTML5</h3>
                    <p>Structure des pages</p>
                </article>

                <article class="skill-card reveal">
                    <div class="skill-icon css-icon">3</div>
                    <h3>CSS3</h3>
                    <p>Design et responsive</p>
                </article>

                <article class="skill-card reveal">
                    <div class="skill-icon js-icon">JS</div>
                    <h3>JavaScript</h3>
                    <p>Interactions web</p>
                </article>

                <article class="skill-card reveal">
                    <div class="skill-icon laravel-icon">L</div>
                    <h3>Laravel</h3>
                    <p>Applications serveur</p>
                </article>

                <article class="skill-card reveal">
                    <div class="skill-icon git-icon">◆</div>
                    <h3>Git</h3>
                    <p>Gestion de versions</p>
                </article>

                <article class="skill-card reveal">
                    <div class="skill-icon sql-icon">DB</div>
                    <h3>MySQL</h3>
                    <p>Base de données</p>
                </article>
            </div>
        </section>

        <!-- PROJETS -->
        <section class="projects section dark-section" id="projets">
            <div class="section-heading reveal">
                <p class="eyebrow">Mes réalisations</p>
                <h2>Quelques projets</h2>
                <span class="heading-line"></span>
            </div>

            <div class="projects-grid">
                <article class="project-card reveal">
                    <div class="project-preview preview-portfolio">
                        <span>MonPortfolio</span>
                        <div class="preview-lines"></div>
                    </div>
                    <div class="project-content">
                        <h3>Portfolio personnel</h3>
                        <p>Un site pour présenter mon parcours et mes compétences.</p>
                        <div class="tags">
                            <span>HTML</span><span>CSS</span><span>JS</span>
                        </div>
                    </div>
                </article>

                <article class="project-card reveal">
                    <div class="project-preview preview-shop">
                        <span>Ma Boutique</span>
                        <div class="preview-lines"></div>
                    </div>
                    <div class="project-content">
                        <h3>Boutique en ligne</h3>
                        <p>Projet d'apprentissage pour présenter des produits.</p>
                        <div class="tags">
                            <span>Laravel</span><span>MySQL</span>
                        </div>
                    </div>
                </article>

                <article class="project-card reveal">
                    <div class="project-preview preview-tasks">
                        <span>Mes tâches</span>
                        <div class="preview-lines"></div>
                    </div>
                    <div class="project-content">
                        <h3>Gestion des tâches</h3>
                        <p>Une interface pour organiser les tâches quotidiennes.</p>
                        <div class="tags">
                            <span>JavaScript</span><span>Laravel</span>
                        </div>
                    </div>
                </article>
            </div>

            <p class="projects-note">
                Ces cartes sont des exemples de présentation. Remplace-les
                par tes réalisations lorsque tes projets seront prêts.
            </p>
        </section>

        
<!-- CONTACT -->
<section class="contact section light-section" id="contact">
    <div class="section-heading reveal">
        <p class="eyebrow">Entrons en contact</p>
        <h2>Parlons de ton projet</h2>
        <span class="heading-line"></span>
    </div>

    <p class="contact-description reveal">
        Tu as une idée ou un projet ? Envoie-moi un message.
    </p>

    @if (session('success'))
        <div class="form-success" role="status">
            {{ session('success') }}
        </div>
    @endif

    <form
        class="contact-form reveal"
        id="contact-form"
        action="{{ route('contact.store') }}"
        method="POST"
    >
        @csrf

        <label for="nom">Ton nom</label>
        <input
            type="text"
            id="nom"
            name="nom"
            value="{{ old('nom') }}"
            placeholder="Ex. : Amadou"
            maxlength="100"
            autocomplete="name"
            class="@error('nom') is-invalid @enderror"
            required
        >
        @error('nom')
            <p class="field-error">{{ $message }}</p>
        @enderror
        @error('nom') is-invalid @enderror

        <label for="email">Ton adresse e-mail</label>
        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="exemple@email.com"
            maxlength="255"
            autocomplete="email"
            class="@error('nom') is-invalid @enderror"
            required
        >
        @error('email')
            <p class="field-error">{{ $message }}</p>
        @enderror
         @error('nom') is-invalid @enderror

        <label for="message">Ton message</label>
        <textarea
            id="message"
            name="message"
            rows="5"
            minlength="10"
            maxlength="5000"
            placeholder="Écris ton message..."
            class="@error('nom') is-invalid @enderror"
            required
        >{{ old('message') }}</textarea>
        @error('message')
            <p class="field-error">{{ $message }}</p>
        @enderror
         @error('nom') is-invalid @enderror

        <button type="submit" class="btn">
            Envoyer le message
        </button>
    </form>
</section>

    </main>

    <footer class="footer">
        <p>© <span id="year"></span> Jean Wilfried — Portfolio personnel</p>
        <a href="#haut">Retour en haut ↑</a>
    </footer>

</body>
</html>
