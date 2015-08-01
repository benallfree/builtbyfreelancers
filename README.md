# [BuiltByFreelancers](https://builtbyfreelancers.com/)

Built By Freelancers (BBF) is an open platform and open marketplace ecosystem that matches freealncers with employers.


## Development

### MAMP on OS X

The easiest way to get going. Create a new site and aim MAMP at `/site/web` in this repo. Make sure PHP version 5.5.6 is selected.

### Vagrant

Experimental support for ansible and vagrant is happening.

#### Requirements

Seriously, verify these dependencies first.

* Ansible >= 1.9.2 - [Install](http://docs.ansible.com/intro_installation.html) • [Docs](http://docs.ansible.com/) • [Windows wiki](https://github.com/roots/trellis/wiki/Windows)
* Virtualbox >= 4.3.10 - [Install](https://www.virtualbox.org/wiki/Downloads)
* Vagrant >= 1.5.4 - [Install](http://www.vagrantup.com/downloads.html) • [Docs](https://docs.vagrantup.com/v2/)
* vagrant-bindfs >= 0.3.1 - [Install](https://github.com/gael-ian/vagrant-bindfs#installation) • [Docs](https://github.com/gael-ian/vagrant-bindfs) (Windows users may skip this)
* vagrant-hostsupdater - [Install](https://github.com/cogitatio/vagrant-hostsupdater#installation) • [Docs](https://github.com/cogitatio/vagrant-hostsupdater)

#### Getting up and running
```
cd ansible
ansible-galaxy install -r requirements.yml
gem install nokogiri -v '1.6.6.2'
vagrant box update
vagrant plugin install vagrant-bindfs
vagrant plugin install vagrant-hostsupdater
vagrant up

```