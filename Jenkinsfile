pipeline {
    agent {
        docker {
            alwaysPull true
            image 'composer:latest'
        }}
    stages{
        stage("Prepare composer"){
            steps{
                    withDockerContainer(args: ' -e MYSQL_ROOT_PASSWORD=root -p 3306:3306', image: 'mysql:latest') {
                        sh 'composer --version'
                    }
             }
        }
    }
}