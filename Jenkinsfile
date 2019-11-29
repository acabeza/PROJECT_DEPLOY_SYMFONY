pipeline {
    agent {
        docker {
            alwaysPull true
            image 'composer:latest'
        }}
    stages{
        stage("Dios salveme"){
            steps{
                    step([$class: 'DockerBuilderPublisher', cleanImages: false, cleanupWithJenkinsJobDelete: false, cloud: '', dockerFileDirectory: '', fromRegistry: [], pull: true, pushCredentialsId: '92b5cf58-0208-4e9d-9b2f-3db7a2aa452e', pushOnSuccess: false, tagsString: 'composer'])
             }
        }
    }
}