pipeline {
            agent {
                docker {
                    args '--name mysql2 -e MYSQL_ROOT_PASSWORD=root -p 3306:3306'
                    image 'mysql:latest'
                }
        }
    stages{
        stage("build proyect, create database, exec test"){
            steps{
                 'composer install'
                sh 'php bin/console doctrine:database:create'
                sh 'php bin/console doctrine:migrations:migrate'
                sh 'php bin/phpunit --filter CrudTest'
            }

        }
    }
}