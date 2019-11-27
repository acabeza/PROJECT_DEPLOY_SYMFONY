pipeline {
        agent {
            docker { image 'composer:latest'}
        } 
        stages {

            stage('Prepare build') {
                steps{
                    sh 'echo Costruyendo Proyecto'
                    sh 'composer install'
                    sh 'echo Proyecto Construido'
                    }    
            }
            stage('Prepare Database'){
                steps{
                    sh 'echo Construyendo la Base de datos'
                    sh 'php bin/console doctrine:database:create'
                    sh 'echo Creando Entidades en Base de datos'
                    sh 'php bin/console doctrine:migrations:migrate'
                    sh 'echo Creando datos de en las Base de datos '
                    sh 'php bin/console doctrine:database:import db_symfony.sql'
                    sh 'echo Fin de la Construcción de la Base de datos'

                }
            }
            stage('Prepare Test'){
                steps{
                    //sh 'php bin/console doctrine:database:import bd/db_symfony.sql'
                    sh 'echo Preparando Test de CRUD'
                    sh 'php bin/phpunit --filter CrudTest'
                    sh 'echo Finalización de Test de CRUD'
                }
            }
    }
}