pipeline {
    agent {
        docker {
            alwaysPull true
            image 'composer:latest'
        }}
    stages{
        stage("Prepare composer"){
            steps{
                    sh 'docker run --name mysql-jenkins -e MYSQL_ROOT_PASSWORD=root -p 3306:3306 mysql:lastest'
             }
        }
    }
}