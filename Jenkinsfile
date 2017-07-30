node {
    stage("composer_install") {
        // Run `composer update` as a shell script
        sh 'composer install'
    }
    stage("build_artifacts"){
    	sh 'npm install'
    	sh 'npm build production'
    }
    stage("phpunit") {
        // Run PHPUnit
        sh 'vendor/bin/phpunit'
    }
}