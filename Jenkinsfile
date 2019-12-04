pipeline {
     agent any
    //{
    //     docker {
    //         image 'composer:latest'
    //     }
    // }
    stages{
        stage("stop container"){
            steps{
                sh 'docker stop mysql'
            }
           }
        stage("remove container"){
            steps{
                sh 'docker rm mysql'
            }
           }
        stage("build container"){
            steps{
                    sh 'docker run --name mysql -d -e  MYSQL_ROOT_PASSWORD=root -p 3306:3306  -p  8080 mysql:latest'
             }
        }
        stage("wait"){
            steps{
            sleep(60)
            }
        }
        stage("build proyect"){
            agent{
                docker {
                    image 'composer:latest'
                }
            }
            steps{
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