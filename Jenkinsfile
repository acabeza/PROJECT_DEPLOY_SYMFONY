pipeline {
    agent any
    stages{
        stage("Prepare composer"){
            steps{
                withDockerContainer('composer:latest') {
                    // some block
                }

                sh 'composer --version'
             }
        }
    }
}