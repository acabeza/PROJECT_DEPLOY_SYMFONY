pipeline {
    agent { 
            docker {
                image 'composer:latest'} 
            } 
    stages{
        stage('Prepare build') {
           echo 'init build proyect'
           composer install
           echo 'final build proyect'
        }

        stage('Prepare Test'){
            echo 'init test proyect'
            php bin/phpunit
            echo 'final test proyect'
        }
    }
}