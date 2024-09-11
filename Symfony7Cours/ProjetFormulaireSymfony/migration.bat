echo coucou
@REM this batch is a way of erasing all old versions and then migrating the version in which we are working to the versions (migrations files)
@REM effacer les fichiers de migration (versions)
del migrations\Version*

@REM effacer la BD
symfony console doctrine:database:drop --force --no-interaction

@REM creer la BD
symfony console doctrine:database:create

@REM creer une migration de nos données courantes
symfony console make:migration --no-interaction

@REM lancer la migration
symfony console doctrine:migrations:migrate --no-interaction

@REM lancer les fixtures
symfony console doctrine:fixtures:load