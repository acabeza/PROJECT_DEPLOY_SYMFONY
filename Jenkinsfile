pipeline {
    agent {
        docker {
            image 'composer:latest'
        }
    }
        stages {

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
                bat 'symfony.exe -d server:start'
                sh 'echo Server iniciado'
                }
            }

            stage('Prepare Test'){
                agent {
                        docker {
                            image 'mysql:latest'
                            args '-e MYSQL_ROOT_PASSWORD=root -e MYSQL_ROOT_USER=root'
                        }
                    }
                steps{
                    sh 'echo Preparando Test de CRUD'
                    sh 'php bin/phpunit --filter CrudTest'
                    sh 'echo Finalización de Test de CRUD'
                }
            }

            stage('Stop Server'){
                steps{
                    sh 'echo Parando Server'
                    bat 'symfony.exe server:stop'
                    sh 'echo Server Parado'
                }
            }
    }
}