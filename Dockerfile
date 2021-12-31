FROM webdevops/php-nginx:7.3
COPY ./src /app # copys content to the containers web root folder
# RUN composer1 install -d /app # only if required
