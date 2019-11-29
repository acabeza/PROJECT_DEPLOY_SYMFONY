pipeline {
    agent any
    stages{
        stage("Prepare composer"){
            steps{
                withDockerContainer('composer:latest') {
                    withDockerContainer(args: ' -e MYSQL_ROOT_PASSWORD=root -p 3306:3306\'', image: 'mysql:latest') {
                        sh 'composer --version'
                    }
                }

                
             }
        }
    }
}