#!/bin/sh

# migration sequence

php artisan migrate --path=modules/UserModule/Database/Migrations/2024_07_18_213655_create_users_table.php
php artisan migrate --path=modules/UserModule/Database/Migrations/2024_07_18_214342_create_users_profile_table.php
php artisan migrate --path=modules/UserModule/Database/Migrations/2024_07_18_214243_create_users_credentials_table.php
php artisan migrate --path=modules/UserModule/Database/Migrations/2024_07_18_214640_create_users_role_table.php
php artisan migrate --path=modules/UserModule/Database/Migrations/2024_07_18_214743_create_users_role_detail_table.php
php artisan migrate --path=modules/UserModule/Database/Migrations/2024_07_18_214433_create_users_roles_table.php
php artisan migrate --path=modules/UserModule/Database/Migrations/2024_07_18_214525_create_users_roles_access_limit_table.php