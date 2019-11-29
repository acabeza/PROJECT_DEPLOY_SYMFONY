pipeline {
    agent any
    stages{
        stage("Prepare composer"){
            steps{
                step([$class: 'DockerComposeBuilder', dockerComposeFile: 'docker-compose.yml',
                option: [$class: 'StartService', scale: 1, service: 'compose'], useCustomDockerComposeFile: true])

                step(
                    sh 'composer --version'
                )
             }
        }
    }
}