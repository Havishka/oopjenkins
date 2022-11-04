pipeline{
    agent any
    enviorment{
        staging_server="129.151.149.10"
    }

    stages{
       stage('Deploy to Remote'){
          steps{
             sh 'scp ${WORKSPACE}/* root@${staging_server}:/var/www/html/'
          }
       }
    }
}