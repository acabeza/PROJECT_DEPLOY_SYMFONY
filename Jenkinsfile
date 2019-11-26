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