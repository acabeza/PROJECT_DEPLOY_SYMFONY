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
        stage('Run Test Server'){
            steps{
                sh 'echo Iniciando Server Local'
                sh 'php bin/console server:run'
            }
        }
        stage('Prepare Test'){
            steps{
                sh 'echo Preparando Test de CRUD'
                sh 'php bin/phpunit'
                sh 'echo Finalización de Test de CRUD'
            }
        }
        stage('Stop Test Server'){
            steps{
                sh 'echo Parando Servidor Local'
                sh 'php bin/console server:stop'
                sh 'echo Finalizando Servidor'
            }
        }
    }
}