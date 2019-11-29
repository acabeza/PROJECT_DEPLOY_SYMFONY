pipeline {
    agent any
    stages{
        stage("Prepare composer"){
            steps{
                step([$class: 'DockerBuilderPublisher', cleanImages: false, cleanupWithJenkinsJobDelete: false, cloud: '', dockerFileDirectory: '',
                 fromRegistry: [], pushCredentialsId: '', pushOnSuccess: true, tagsString: 'composer'])

                sh 'composer --version'
             }
        }
    }
}