pipeline {
    agent docker {}
    stages{
        stage('Prepare build compose') {
          steps{
              sh 'docker-compose up'
              sh 'echo final build compose'
            }    
        }

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