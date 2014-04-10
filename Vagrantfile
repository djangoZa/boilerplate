VAGRANTFILE_API_VERSION = "2"
Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "precise64"
  config.vm.provision "shell", :path => "Vagrantfile.sh", :args => ENV['APPLICATION_ENV']
  config.vm.network "forwarded_port", host: 4567, guest: 80
end
