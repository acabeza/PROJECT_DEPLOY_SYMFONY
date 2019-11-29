pipeline {
    agent {
        docker {
            alwaysPull true
            image 'composer:latest'
        }}
    stages{
        stage("Prepare composer"){
            steps{
                    dockerNode(image: 'mysql:latest') {
                        // some block
                    }
             }
        }
    }
}