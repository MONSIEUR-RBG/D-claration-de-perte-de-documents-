<header class="site-header">
    <div class="site-header-content">
        <div class="site-header-left">
            <button class="site-burger" id="siteBurgerMenu" aria-label="Ouvrir le menu" type="button">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <a href="{{ route('home') }}" class="site-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="site-header-logo">
                <div class="site-brand-text">
                    <span class="site-brand-title">Service publique</span>
                    <span class="site-brand-subtitle">de l'administration Togolaise</span>
                </div>
            </a>
        </div>

        <div class="site-header-menu" id="siteHeaderMenu">
            <button class="site-menu-close" id="siteMenuClose" aria-label="Fermer le menu" type="button">
                ×
            </button>
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('help.public') }}">Aide</a>
            <a href="#services">Services</a>
            <a href="#comment">Comment ça marche</a>
        </div>

        <div class="site-header-actions">
            <a href="{{ route('register') }}" class="site-btn site-btn-register">Créer un compte</a>
            <a href="{{ route('login') }}" class="site-btn site-btn-login">Se connecter</a>
        </div>
    </div>
</header>

<style>
    .site-header {
        background: linear-gradient(90deg, #006F89 0%, #316B53 100%);
        padding: 1rem 5%;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
    }

    .site-header-content {
        max-width: 1400px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .site-header-left {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        flex: 1 1 auto;
    }

    .site-burger {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 4px;
        width: 42px;
        height: 42px;
        border: none;
        background: rgba(255,255,255,0.16);
        border-radius: 10px;
        cursor: pointer;
        padding: 0 10px;
    }

    .site-burger span {
        display: block;
        height: 2px;
        background: #ffffff;
        border-radius: 999px;
    }

    .site-logo {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        text-decoration: none;
    }

    .site-header-logo {
        height: 46px;
        width: auto;
        object-fit: contain;
    }

    .site-brand-text {
        display: flex;
        flex-direction: column;
        color: #ffffff;
    }

    .site-brand-title {
        font-size: 1rem;
        font-weight: 800;
        line-height: 1.1;
    }

    .site-brand-subtitle {
        font-size: 0.72rem;
        font-weight: 500;
        opacity: 0.85;
    }

    .site-header-menu {
        position: fixed;
        top: 0;
        left: -320px;
        width: 280px;
        height: 100vh;
        background: linear-gradient(180deg, #0f4d5a 0%, #1f5c42 100%);
        box-shadow: 12px 0 28px rgba(0,0,0,0.25);
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
        padding: 5.5rem 1.25rem 1.25rem;
        transition: left 0.3s ease;
        z-index: 999;
    }

    .site-header-menu.active {
        left: 0;
    }

    .site-header-menu a {
        color: #ffffff;
        text-decoration: none;
        font-weight: 600;
        font-size: 1rem;
        width: 100%;
        padding: 0.75rem 0.9rem;
        border-radius: 10px;
        background: rgba(255,255,255,0.08);
    }

    .site-menu-close {
        position: absolute;
        top: 1rem;
        right: 1rem;
        border: none;
        background: rgba(255,255,255,0.15);
        color: #ffffff;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        font-size: 1.3rem;
        cursor: pointer;
    }

    .site-header-actions {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        flex-wrap: wrap;
    }

    .site-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.7rem 1.2rem;
        border-radius: 999px;
        font-weight: 700;
        text-decoration: none;
        font-size: 0.9rem;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .site-btn:hover {
        transform: translateY(-1px);
    }

    .site-btn-register {
        background: #ffffff;
        color: #316B53;
    }

    .site-btn-login {
        background: rgba(255, 255, 255, 0.16);
        color: #ffffff;
        border: 1px solid rgba(255, 255, 255, 0.35);
    }

    @media (max-width: 768px) {
        .site-header-content {
            align-items: flex-start;
        }

        .site-header-actions {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const burger = document.getElementById('siteBurgerMenu');
        const menu = document.getElementById('siteHeaderMenu');
        const closeBtn = document.getElementById('siteMenuClose');

        if (burger && menu) {
            burger.addEventListener('click', function () {
                menu.classList.add('active');
            });
        }

        if (closeBtn && menu) {
            closeBtn.addEventListener('click', function () {
                menu.classList.remove('active');
            });
        }
    });
</script>
