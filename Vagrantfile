# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "ubuntu/xenial64"
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.hostname = "cspt-moodle.dev"
    
    config.vm.synced_folder ".", "/var/www", 
        mount_options: ["dmode=777,fmode=777"]

    config.vm.provision :shell, path: "provision.sh"

    config.vm.provider "virtualbox" do |v|
        v.name = "cspt-moodle"
        v.memory = 1024
        v.cpus = 2
    end

end

