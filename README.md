# Plan

### OS

-   Ubuntu
-   CentOS

### Website

-   Frontend: Svelte
-   Backend:
    -   Nginx + php:
        -   NodeJS
    -   Certbot

### Options

-   SQL, .sqli, NoSQL or JSON
-   PHP or NodeJS
-   JWT or Session
-   Bcrypt or Argon2
-   2FA
-   E2EE

### Server Setup

```bash
# Build docker image from Dockerfile
docker build -t ubuntu-server-custom .

# Run docker image in container
docker -iPt ubuntu-server-custom:latest
docker run -d --name server -e TZ=UTC -P ubuntu-server-custom:latest
```
