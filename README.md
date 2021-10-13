<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Faire copie du .env.example à .env (.env.example est configuré)
   ```
   cp .env.example .env
   ```
   
## Création environnement
   ```
   docker-compose up -d
   ```

## Installer les dépendances
   ```
   composer install 
   (si composer est installé sur machine)
   ou
   docker-compose exec app composer install
   ```

## Création de la base

   ```
   php artisan migrate
   ```

## Remplissage de la base par des données de test

   ```
   php artisan db:seed
   ```

## Pour accéder aux différents environnements

### Mini adminisatration
    ```  
    url : http://172.20.1.1/ ou http://localhost:2548
    ```
###  phpmyadmin :
    ```  
    url : http://172.20.1.3 or http://localhost:4259
   
    login : root
    pwd : wg2bAQhd36aJ
    ```
