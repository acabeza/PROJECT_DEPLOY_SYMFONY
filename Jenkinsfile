pipeline {
    agent { 
        docker {
             image 'mysql:lastest'
             args '--name mysql -e MYSQL_ROOT_PASSWORD=root -p 3306:3306'
                 }}
    stages{
        stage("Prepare Build"){
            agent{
              docker { image 'composer:latest' }
            }
            steps{
                sh 'echo Hola'
            }
        }
    }
}