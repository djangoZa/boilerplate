#!/usr/bin/env bash

#UPDATE APT REPO
apt-get update
apt-get dist-upgrade

#INSTALL SERVICES
apt-get install -y apache2 php5

#RESTART APACHE
service apache2 restart