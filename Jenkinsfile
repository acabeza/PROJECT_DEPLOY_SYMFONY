pipeline {
     agent any
    //{
    //     docker {
    //         image 'composer:latest'
    //     }
    // }
    stages{
        // stage("stop container"){
        //     steps{
        //         sh 'docker stop mysql'
        //     }
        //    }
        // stage("remove container"){
        //     steps{
        //         sh 'docker rm mysql'
        //     }
        // }
        stage("php?"){
            steps{
             sh 'php -version'
             }
        }
        stage("build container"){
            steps{
                    sh 'docker run tag mysql -e MYSQL_ROOT_PASSWORD=root -p 3306:3306 -d mysql:latest'
             }
        }
        stage("wait"){
            steps{
            sleep(60)
            }
        }
        stage("build proyect, create database, exec test"){
            agent{
                docker {
                    image 'composer:latest'
                }
            }
            steps{
                sh 'composer install'
                sh 'php bin/console doctrine:database:create'
                sh 'php bin/console doctrine:migrations:migrate'
                sh 'php bin/phpunit --filter CrudTest'
            }

        }
    }
}