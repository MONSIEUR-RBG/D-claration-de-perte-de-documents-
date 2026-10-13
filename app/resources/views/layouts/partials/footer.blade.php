<footer class="bg-white bottom-0" style="left: 0; right: 0; clear: both;">
    <div class="container footer-top">
        <div class="footer-main">
            <div class="footer-brand">
                <img alt="Logo" class="footer-logo" src="{{ asset('images/logo.png') }}"/>
            </div>

            <div class="footer-section">
                <h6 class="footer-title">Navigation</h6>
                <ul class="footer-nav">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="{{ route('documents-trouves.search') }}">Recherche</a></li>
                    <li><a href="{{ route('help.public') }}">Aide</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h6 class="footer-title">Informations</h6>
                <ul class="footer-nav">
                    <li><a href="{{ route('help.public') }}">À propos</a></li>
                    <li><a href="{{ route('help.public') }}">FAQ</a></li>
                    <li><a href="#">Annuaire</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h6 class="footer-title">Liens pratiques</h6>
                <ul class="footer-nav">
                    <li><a href="#">Informations juridiques</a></li>
                    <li>
                        <div class="social-links mt-2">
                            <a href="https://www.facebook.com/ServicepublicTG/" target="_blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://twitter.com/ServicepublicTG" target="_blank" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.instagram.com/servicepublictogo/" target="_blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/service-public-administration-togolaise" target="_blank" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="footer-actions">
                <a class="btn btn-primary fw-bold" href="{{ route('login') }}" style="text-decoration: none;">
                    <i class="bi bi-person-fill me-2"></i>Se connecter
                </a>
                <a class="btn btn-secondary fw-bold" href="{{ route('help.public') }}" style="text-decoration: none;">
                    Une question ?
                </a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-row">
                <p>Service Public<br/>de l'administration togolaise</p>
                <p class="text-uppercase mb-0">© Service Public de l'administration togolaise <span class="current-year">{{ now()->year }}</span></p>
            </div>
        </div>
    </div>
</footer>

<style>
    footer {
        background: #ffffff;
        color: #1f2937;
        margin-top: 4rem;
        box-shadow: 0 -6px 24px rgba(15, 23, 42, 0.04);
    }

    .footer-top {
        padding: 4rem 0 2.5rem;
    }

    .footer-main {
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
        justify-content: center;
        gap: 2.5rem;
        padding-left: 6rem;
        padding-right: 6rem;
    }

    .footer-brand,
    .footer-section,
    .footer-actions {
        flex: 1 1 180px;
        min-width: 180px;
    }

    .footer-brand {
        display: flex;
        justify-content: center;
    }

    .footer-logo {
        max-width: 120px;
        width: 100%;
        height: auto;
    }

    .footer-title {
        margin-bottom: 0.8rem;
        font-size: 0.82rem;
        letter-spacing: 0.08em;
        color: #111827;
        font-weight: 700;
        text-transform: uppercase;
    }

    .footer-nav {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-nav li + li {
        margin-top: 0.45rem;
    }

    .footer-nav a {
        color: #4b5563;
        font-size: 0.95rem;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .footer-nav a:hover {
        color: var(--primary);
    }

    .social-links {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border: 1px solid #d1d5db;
        border-radius: 50%;
        color: #4b5563;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .social-links a:hover {
        color: var(--primary);
        border-color: var(--primary);
    }

    .footer-actions {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        align-items: flex-end;
    }

    .footer-actions .btn-primary,
    .footer-actions .btn-secondary {
        width: 175px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 999px;
        padding: 0.8rem 1rem;
        font-weight: 700;
        text-decoration: none;
    }

    .footer-actions .btn-primary {
        background: var(--primary);
        color: #fff;
        border: none;
    }

    .footer-actions .btn-secondary {
        background: #e5e7eb;
        color: #374151;
        border: none;
    }

    .footer-bottom {
        padding: 1.25rem 0;
        border-top: 1px solid #e5e7eb;
        background: #f8fafc;
        text-align: center;
    }

    .footer-bottom-row {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem 2rem;
    }

    .footer-bottom p {
        margin: 0;
        font-size: 0.9rem;
        color: #6b7280;
    }

    .footer-bottom .current-year {
        color: var(--primary);
        font-weight: 700;
    }

    @media (max-width: 991px) {
        .footer-top {
            padding: 3rem 0 2rem;
        }

        .footer-main {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .footer-actions {
            align-items: center;
        }
    }
</style>
