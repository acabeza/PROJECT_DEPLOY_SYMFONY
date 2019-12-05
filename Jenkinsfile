pipeline {
     agent
    {
         docker {
             image 'mysql:latest'
             args '--name mysql2 -e MYSQL_ROOT_PASSWORD=root -p 3306:3306'
         }
     }
    stages{
        stage("build proyect, create database, exec test"){
            steps{
                sh 'composer install'
                sh 'php bin/console doctrine:database:create'
                sh 'php bin/console doctrine:migrations:migrate'
                sh 'php bin/phpunit --filter CrudTest'
            }

        }
    }
}