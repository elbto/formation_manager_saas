# Formation Manager SaaS

> Plateforme SaaS Symfony 7 multitenant – gestion de formations, équipes, rôles, abonnements et bien plus.

## 🚀 Présentation

**Formation Manager SaaS** est une application web professionnelle construite avec Symfony 7, conçue pour gérer des formations en mode multi-tenant. Chaque organisation ("tenant") bénéficie de sa propre interface isolée, accessible via un slug d'URL unique.

Ce projet est en cours de développement avec les meilleures pratiques en environnement Docker, CI/CD, architecture évolutive, et administration via EasyAdmin.

---

## 🔧 Stack technique

-   **Symfony 7.3**
-   **PHP 8.3**
-   **Docker / Docker Compose**
-   **Nginx** (reverse proxy)
-   **PostgreSQL 16**
-   **Mailpit** (tests emails)
-   **EasyAdmin** (backend administration)
-   **Doctrine ORM**
-   **Routing multitenant via slug URL** (`/mon-tenant/`)
-   **Service Listener pour détection automatique de tenant**

---

## 📦 Installation rapide (en local)

```bash
git clone https://github.com/elbto/formation_manager_saas.git
cd formation_manager_saas
docker compose up -d --build
docker compose exec php bash
composer install
```
