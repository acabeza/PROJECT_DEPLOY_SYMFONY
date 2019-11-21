pipeline {
    agent { docker { image 'composer:latest' } }
    stages{
        stage('Prepare build') {
          steps{
              sh 'cd PROJECT_DEPLOY_SYMFONY'
              sh 'composer install'
              sh 'echo final build proyect'
          } 
           
        }

        stage('Prepare Test'){
            steps{
                sh 'echo init test proyect'
                sh 'php bin/phpunit'
                sh 'echo final test proyect'
            }
        }
    }
}