FROM nickgerman/yii2:latest

COPY ./system/apache/nestt.lan.conf /etc/apache2/sites-available/nestt.lan.conf
RUN a2ensite nestt.lan.conf
RUN a2dissite 000-default.conf
RUN a2enmod env
RUN a2enmod headers
RUN a2enmod rewrite
RUN a2enmod headers
RUN update-rc.d -f  apache2 remove
COPY ./system/apache/.htaccess /www/sites/nestt.lan/.htaccess
COPY ./system/apache/root-index.php /www/sites/nestt.lan/index.php
COPY ./system/scripts/update_wp_content_dir.sh /scripts/init.sh
RUN chmod +x /scripts/init.sh
ENTRYPOINT ["apache2ctl", "-D", "FOREGROUND"]
#CMD ["bash"]
