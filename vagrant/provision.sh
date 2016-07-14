composer self-update

if [ -d /home/vagrant/share ]; then
    composer config --file=/home/vagrant/.composer/config.json vendor-dir /home/vagrant/share/vendor
    composer config --global vendor-dir /home/vagrant/share/vendor
    if [ ! -d /vagrant/vendor ]; then
        ln -s /home/vagrant/share/vendor /vagrant/vendor
    fi
fi

cd /vagrant
composer install
chown -R vagrant:vagrant /home/vagrant/share/vendor
php bin/console cache:warmup
php bin/console assets:install --symlink web
