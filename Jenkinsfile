pipeline {
    agent any
    stages{
        stage("Prepare composer"){
            steps{
                step([$class: 'DockerComposeBuilder', dockerComposeFile: '',
                 option: [$class: 'StartAllServices'], useCustomDockerComposeFile: true])

                sh 'composer --version'
             }
        }
    }
}