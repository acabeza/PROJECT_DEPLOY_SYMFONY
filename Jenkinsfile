pipeline {
    agent { 
            docker { {image 'composer:latest'} } 
    stages{
        stage('Prepare build') {
          steps{
              sh 'init build proyect'
              composer install
              sh 'final build proyect'
          } 
           
        }

        stage('Prepare Test'){
            steps{
                sh 'init test proyect'
                php bin/phpunit
                sh 'final test proyect'
            }
        }
    }
}