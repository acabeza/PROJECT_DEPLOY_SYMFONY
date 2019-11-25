pipeline {
    agent { 
            docker {
                sh 'cd composer'
                sh 'docker-compose up'
                sh 'cd ..'
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
                sh 'php bin/phpunit --filter CrudTest'
                sh 'echo Finalización de Test de CRUD'
            }
        }
    }
}