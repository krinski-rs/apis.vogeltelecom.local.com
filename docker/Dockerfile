FROM centos:7

RUN yum install -y epel-release

# Repositórios
RUN rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm

# Ferramentas
RUN yum install -y supervisor tcpdump patch wget htop vim net-tools

# PHP
RUN yum install -y curl curl-devel git-all
RUN yum install -y php71w-cli php71w-fpm php71w-opcache php71w-common
RUN yum install -y php71w-mysql php71w-pgsql php71w-xml php71w-soap php71w-xmlrpc
RUN yum install -y php71w-mbstring php71w-json php71w-gd php71w-mcrypt

# HTTP Web Server
RUN yum install -y nginx

################################################################################

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"

ADD ./nginx/nginx.conf /etc/nginx/
ADD ./nginx/sites/apis.conf /etc/nginx/sites-available/
ADD ./nginx/sites/apis.conf /etc/nginx/sites-enabled/

COPY ./supervisord.conf /etc/supervisord.conf
COPY ./start-container.sh /opt/bin/start-container.sh

RUN echo 'date.timezone = America/Sao_Paulo' >> /etc/php.ini

EXPOSE 80
ENTRYPOINT ["/usr/bin/supervisord"]
WORKDIR /var/www/html