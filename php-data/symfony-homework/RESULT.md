# Выполняю миграции

tsyrzhima@tsyrzhima-BRN-FXXC:~/PhpstormProjects/em-homework/php-data/symfony-homework$ php bin/console doctrine:migrations:migrate

WARNING! You are about to execute a migration in database "symfony_db" that could result in schema changes and data loss. Are you sure you wish to continue? (yes/no) [yes]:
> yes

[notice] Migrating up to DoctrineMigrations\Version20250611070418
[notice] finished in 178.5ms, used 12M memory, 1 migrations executed, 3 sql queries

[OK] Successfully migrated to version: DoctrineMigrations\Version20250611070418                                        

#  Загружаем тестовые данные (fixtures)

tsyrzhima@tsyrzhima-BRN-FXXC:~/PhpstormProjects/em-homework/php-data/symfony-homework$ php bin/console doctrine:fixtures:load

Careful, database "symfony_db" will be purged. Do you want to continue? (yes/no) [no]:
> yes

> purging database
> loading App\DataFixtures\AppFixtures
> loading App\DataFixtures\UserFixtures


