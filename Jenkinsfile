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
                    sh 'docker run --name mysql -e  MYSQL_ROOT_PASSWORD=root -p 3306:3306  -p  8080 mysql:latest'
                    sh 'docker run composer:latest'
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