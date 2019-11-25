pipeline {
    agent { 
            docker {
                image 'composer:latest'
                    } 
            } 
    stages{
        stage('Prepare build') {
          steps{
              sh 'composer install'
              sh 'echo final build proyect'
            }    
        }
        stage('Prepare Test'){
            steps{
                sh 'echo Preparando Test de CRUD'
                sh 'php bin/phpunit'
                sh 'echo Finalización de Test de CRUD'
            }
        }
    }
}