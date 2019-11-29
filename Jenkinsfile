pipeline {
    agent any
    stages{
        stage("Prepare composer"){
            steps([$class: 'DockerComposeBuilder', dockerComposeFile: 'docker-compose.yml',
             option: [$class: 'StartAllServices'], useCustomDockerComposeFile: true])
        }
    }
}