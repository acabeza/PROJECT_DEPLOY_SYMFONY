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
            steps{
                sql connection: 'database'
                sh 'php bin/console doctrine:database:create   '
            }
        }
    }
}