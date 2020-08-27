# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://vagrantcloud.com/search.
  config.vm.box = "ubuntu/xenial64"

  ## Front end web server.
  config.vm.define "webserver" do |webserver|
    webserver.vm.hostname = "webserver"
    webserver.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
    webserver.vm.network "private_network", ip: "192.168.2.11"
    webserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]

    webserver.vm.provision "shell", inline: <<-SHELL
      echo "Starting webserver"
      apt-get update
      apt-get install -y apache2 php libapache2-mod-php php-mysql
            
      # Change VM's webserver's configuration to use shared folder.
      # (Look inside test-website.conf for specifics.)
      cp /vagrant/client.conf /etc/apache2/sites-available/
      # activate our website configuration ...
      a2ensite client-server
      # ... and disable the default website provided with Apache
      a2dissite 000-default
      # Reload the webserver configuration, to pick up our changes
      service apache2 reload
    SHELL
  end

  ## Used to store products, administrator login credentials and orders.
  config.vm.define "dbserver" do |dbserver|
    dbserver.vm.hostname = "dbserver"
    dbserver.vm.network "private_network", ip: "192.168.2.12"
    dbserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
    
    dbserver.vm.provision "shell", inline: <<-SHELL
      # Update Ubuntu software packages.
      apt-get update
      
      # We create a shell variable MYSQL_PWD that contains the MySQL root password
      export MYSQL_PWD='insecure_mysqlroot_pw'

      echo "mysql-server mysql-server/root_password password $MYSQL_PWD" | debconf-set-selections 
      echo "mysql-server mysql-server/root_password_again password $MYSQL_PWD" | debconf-set-selections

      apt-get -y install mysql-server

      echo "CREATE DATABASE fvision;" | mysql

      echo "CREATE USER 'webuser'@'%' IDENTIFIED BY 'insecure_db_pw';" | mysql

      echo "GRANT ALL PRIVILEGES ON fvision.* TO 'webuser'@'%'" | mysql
      export MYSQL_PWD='insecure_db_pw'

      sed -i'' -e '/bind-address/s/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf
      service mysql restart
    SHELL
  end

  ## Used by webserver administrator to track orders / modify products.
  config.vm.define "adminserver" do |adminserver|
    adminserver.vm.hostname = "webserver"
    adminserver.vm.network "forwarded_port", guest: 80, host: 8081, host_ip: "127.0.0.1"
    adminserver.vm.network "private_network", ip: "192.168.2.13"
    adminserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]

    adminserver.vm.provision "shell", inline: <<-SHELL
      echo "Starting admin server"
      apt-get update
      apt-get install -y apache2 php libapache2-mod-php php-mysql
            
      # Change VM's webserver's configuration to use shared folder.
      # (Look inside test-website.conf for specifics.)
      cp /vagrant/admin.conf /etc/apache2/sites-available/
      # activate our website configuration ...
      a2ensite admin-server
      # ... and disable the default website provided with Apache
      a2dissite 000-default
      # Reload the webserver configuration, to pick up our changes
      service apache2 reload
    SHELL
  end
end
