pipeline {
     agent any
    //{
    //     docker {
    //         image 'composer:latest'
    //     }
    // }
    stages{
        stage("remove container"){
                sh 'docker rm mysql'
                // sh 'docker rm composer'
           }
        stage("build"){
            steps{
                    sh 'docker run --name mysql -d -e  MYSQL_ROOT_PASSWORD=root -p 3306:3306  -p  8080 mysql:latest'
                    sh 'docker run --name composer composer:latest'
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