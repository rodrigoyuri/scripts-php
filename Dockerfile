FROM php:7.4-apache
RUN a2enmod rewrite
RUN useradd -ms /bin/bash dockuser
USER dockuser