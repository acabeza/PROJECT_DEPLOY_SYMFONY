pipeline {
    agent none {
        stages {
            stage("Back-end"){
                agent {
                    docker {
                        image 'mysql:latest'
                        args '-e MYSQL_ROOT_PASSWORD=root'
                    }
                }
            }
            stage("Composer install"){
                agent {
                    docker {
                        image 'composer:latest'
                    }
                }
            } 
        }
    }
    stages{
        stage('Prepare build') {
          steps{
              sh 'echo Costruyendo Proyecto'
              sh 'composer install'
              sh 'echo Proyecto Construido'
            }    
        }
        stage('Run Server Test'){
            steps{
            sh 'echo Iniciando Server'
            sh 'symfony -d server:start'
            sh 'echo Server iniciado'
            }
        }
        stage('Prepare Test'){
            steps{
                sh 'echo Preparando Test de CRUD'
                sh 'php bin/phpunit --filter CrudTest'
                sh 'echo Finalización de Test de CRUD'
            }
        }
        stage('Stop Server'){
            steps{
                sh 'echo Parando Server'
                sh 'symfony server:stop'
                sh 'echo Server Parado'
            }
        }
    }
}