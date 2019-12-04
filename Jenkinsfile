pipeline {
     agent any
    //{
    //     docker {
    //         image 'composer:latest'
    //     }
    // }
    stages{
        stage("build"){
            steps{
                    sh 'docker run -e  MYSQL_ROOT_PASSWORD: root -p 3306:3306  -p  8080 mysql:latest'
                    sh 'composer install'
             }
        }
        stage("database"){
            steps{
                sh 'php bin/console doctrine:database:create'
            }
        }
    }
}