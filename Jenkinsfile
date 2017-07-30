pipeline {
	agent{
		docker 'richarvey/nginx-php-fpm:latest'
	}
	stages{
		stage("composer_install") {
			steps{
			sh 'composer install'
			}
			// Run `composer update` as a shell script

		}
		stage("build_artifacts"){
			steps{
				sh 'npm install'
                sh 'npm build production'
			}
		}
		stage("phpunit") {
			steps{
				sh 'vendor/bin/phpunit'
			}
			// Run PHPUnit
		}
	}
}