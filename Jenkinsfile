pipeline {
            agent {
                docker {
                    image 'php:latest'
                }
        }
    stages{
        stage("build proyect, create database, exec test"){
            steps{
                sh label: '', script: 'composer install'
                sh 'php bin/console doctrine:database:create'
                sh 'php bin/console doctrine:migrations:migrate'
                sh 'php bin/phpunit --filter CrudTest'
            }

        }
    }
}