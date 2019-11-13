pipeline {
    agent { 
            docker {
                image 'composer:latest'
                args "--volume /tmp:/app --volume /etc/passwd:/etc/passwd:ro --volume /etc/group:/etc/group:ro -u 1000"
                    } 
            } 
    stages{
        stage('Prepare') {
           
        }
    }
}