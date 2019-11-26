pipeline {
        agent any 
        stages {

            stage('Prepare build') {
                agent {
                    docker {
                        image 'composer:latest'
                    }
                }
                steps{
                    sh 'echo Costruyendo Proyecto'
                    sh 'composer install'
                    sh 'echo Proyecto Construido'
                    }    
            }

            // stage('Run Server Test'){
            //     steps{
            //         sh 'echo Iniciando Server'
            //         sh 'symfony -d server:start'
            //         sh 'echo Server iniciado'
            //     }
            // }

            stage('Prepare Test'){
                agent {
                        docker {
                            image 'mysql:latest'
                            args '--name mysql -e MYSQL_ROOT_PASSWORD=root -d'
                        }
                    }
                steps{
                    sh 'echo Preparando Test de CRUD'
                    sh 'php bin/phpunit --filter CrudTest'
                    sh 'echo Finalización de Test de CRUD'
                }
            }

            // stage('Stop Server'){
            //     steps{
            //         sh 'echo Parando Server'
            //         sh 'symfony server:stop'
            //         sh 'echo Server Parado'
            //     }
            // }
    }
}