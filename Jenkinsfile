pipeline {
    agent {
        docker {
            alwaysPull true
            image 'composer:latest'
        }}
    stages{
        stage("Prepare composer"){
            steps{
                    dockerNode(image: 'mysql:latest', sideContainers: ['-e MYSQL_ROOT_PASSWORD=root -p 3306:3306']) {
                        // some block
                    }
             }
        }
    }
}