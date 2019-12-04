pipeline {
    agent {
        docker {
            alwaysPull true
            image 'composer:latest'
        }}
    stages{
        stage("build"){
            steps{
                    sh 'composer install'
             }
        }
        stage("database"){
            agent{
            docker {
                    args '-e  MYSQL_ROOT_PASSWORD: root -p 3306:3306  -p  8080'
                    image 'mysql:latest'
                 }
            }
            steps{
                sh 'php bin/console doctrine:database:create'
            }
        }
    }
}