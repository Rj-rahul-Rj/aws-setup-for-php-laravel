<!-- command used in aws -->

sudo apt update
sudo apt upgrade –y

<!-- all step in this url ,open the url and run all command -->
https://usefulangle.com/post/324/aws-ec2-install-linux-apache-mysql-php-phpmyadmin-lamp-stack-ubuntu-20-04

sudo a2enmod rewrite
sudo service apache2 restart 
sudo systemctl stop apache2.service  
 
sudo systemctl stop apache2.service
[05-08 02:26 pm] Manish Kumre
sudo nano /etc/mysql/debian.cnf

sudo apt-get install zip unzip

sudo nano /etc/apache2/sites-available/your-laravel-project.conf

<VirtualHost *:80>
    ServerAdmin admin@your-domain.com
    DocumentRoot /var/www/html/your-laravel-project/public
    ServerName your-domain.com
    ServerAlias www.your-domain.com

    <Directory /var/www/html/your-laravel-project>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    <Directory /var/www/html/your-laravel-project/public>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

sudo chmod -R 775 storage
sudo chmod -R 775 bootstrap/cache

<!-- for laravel use this  -->
https://www.digitalocean.com/community/questions/why-do-my-laravel-routes-not-work

https://dev.to/sureshramani/how-to-deploy-laravel-project-with-apache-on-ubuntu-36p3

https://usefulangle.com/post/324/aws-ec2-install-linux-apache-mysql-php-phpmyadmin-lamp-stack-ubuntu-20-04 sudo apt-get update sudo apt-get install apache2 


sudo apt-get install mysql-server
 sudo mysql_secure_installation if getting error then new terminal open and change mysqlroot password ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'SetRootPasswordHere'; exit 
 sudo service apache2 restart 
 sudo apt-get install phpmyadmin