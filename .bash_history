clear
exit
ls -la
touch ~/.hushlogin
exit
cat ~/.hushlogin 
sudo add-apt-repository ppa:ondrej/php
curl -sL https://deb.nodesource.com/setup_18.x | sudo bash -
curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list
sudo apt update
sudo apt upgrade -y
sudo apt install -y php8.2-fpm php8.2-mbstring php8.2-curl php8.2-bz2 php8.2-zip php8.2-xml php8.2-gd php8.2-mysql php8.2-intl php8.2-sqlite3 php8.2-soap php8.2-bcmath php8.2-memcached php8.2-redis php8.2-xmlrpc php8.2-imagick apt-transport-https nginx mysql-client mysql-server
php -v
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
composer -v
sudo mv composer.phar /usr/local/bin/composer
composer
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/master/install.sh | bash
command -v nmv
exi
exit
command -v nmv
command -v nvm
nvm install --lts
node -v
npm -v
exit
ls -la
composer
php -v
npm -v
node -v
exit
curl
sudo apt update
sudo cp /etc/apt/trusted.gpg /etc/apt/trusted.gpg.d
sudo apt update
clear
sudo apt install mysql-server
sudo apt update
sudo apt install mysql-server
clear
sudo apt install mysql-server
mysql --version
systemctl status mysql
sudo mysql
mkdir test
code test/
php -v
php -v
composer
php -v
composer
pwd
composer create-project laravel/laravel agus-app
install unzip
composer create-project --prefer-dist laravel/laravel agusss
code submission/
