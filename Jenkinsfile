pipeline {
    agent { 
        docker {
             image 'mysql:latest'
             args '--name mysql-jenkins -e MYSQL_ROOT_PASSWORD=root -p 3306:3306'
                 }}
    stages{
        stage("Prepare Build"){
            steps{
                sh 'composer install'
            }
        }
    }
}