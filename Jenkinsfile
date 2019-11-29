pipeline {
        agent{ 
         docker { image 'composer:latest'}
         docker { image 'mysql:lastest' args '--name mysql -e MYSQL_ROOT_PASSWORD=root -p 3306:3306'}}
        stages {
            stage('Prepare build') {
                steps{
                    sh 'echo Costruyendo Proyecto'
                    sh 'composer install'
                    sh 'echo Proyecto Construido'
                    }
            }

            //  stage('test env'){
            //      steps{
            //          sh 'ls'
            //          sh 'export $(cat .env | grep -v "#" | xargs) && composer install --optimize-autoloader'
            //      }
            //  }
            stage('Prepare Database'){
                // agent{ docker {image 'mysql:lastest' args '--name mysql -e MYSQL_ROOT_PASSWORD=root -p 3306:3306'} }
                steps{
                     sh 'echo Construyendo la Base de datos'
                     sh 'php bin/console doctrine:database:create --if-not-exists'
                     sh 'echo Creando Entidades en Base de datos'
                     sh 'php bin/console doctrine:migrations:migrate'
                     sh 'echo Creando datos de en las Base de datos '
                     sh 'php bin/console doctrine:database:import db_symfony.sql'
                     sh 'echo Fin de la Construcción de la Base de datos' }
                //  steps{
                //     //sh 'php bin/console doctrine:database:import bd/db_symfony.sql'
                //     sh 'echo Preparando Test de CRUD'
                //     sh 'php bin/phpunit --filter CrudTest'
                //     sh 'echo Finalización de Test de CRUD' }
            }
            // stage('Prepare Test'){
            //     steps{
            //         //sh 'php bin/console doctrine:database:import bd/db_symfony.sql'
            //         sh 'echo Preparando Test de CRUD'
            //         sh 'php bin/phpunit --filter CrudTest'
            //         sh 'echo Finalización de Test de CRUD'
            //     }
            // }
    }
}