FROM nginx

RUN mkdir -p /var/www/woodytoys.seldric.be/html

COPY src/portal/* /var/www/woodytoys.seldric.be/html/
COPY conf/portal/* /etc/nginx/sites-available/

RUN ln -s /etc/nginx/sites-available/woodytoys.seldric.be /etc/nginx/sites-enabled/
