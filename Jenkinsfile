pipeline {
    agent { 
            docker {
                image 'composer:latest'
                args "--volume /tmp:/app --volume /etc/passwd:/etc/passwd:ro --volume /etc/group:/etc/group:ro -u 1000"
                    } 
            } 
    stages{
        stage('Prepare build') {
          steps{
              sh 'composer install'
              sh 'echo final build proyect'
          } 
           
        }

        stage('Prepare Test'){
            steps{
                sh 'echo init test proyect'
                sh 'php bin/phpunit'
                sh 'echo final test proyect'
            }
        }
    }
}