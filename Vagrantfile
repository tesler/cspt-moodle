# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

<<<<<<< HEAD
    config.vm.box = "scotch/box"
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.hostname = "scotchbox.local"
    config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]
    config.vm.provision :shell, path: "bootstrap.sh"
    
    # Optional NFS. Make sure to remove other synced_folder line too
    #config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }

end
=======
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

>>>>>>> 70fc112dc7769b2d619d3fbfa46e807aa6af3030
