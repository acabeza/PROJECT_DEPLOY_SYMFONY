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
                sh 'php bin/console doctrine:database:create   '
            }
        }
    }
}