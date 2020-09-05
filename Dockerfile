FROM leocavalcante/dwoole:prod
WORKDIR /app

ADD composer.json .
ADD composer.lock .
RUN composer install --prefer-dist --no-dev --no-progress --no-suggest --optimize-autoloader

ADD . .
ENV ENTRY_POINT_FILE /app/srv/swoole.php
EXPOSE 9501
