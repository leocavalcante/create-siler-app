FROM leocavalcante/dwoole:prod
ADD . /app
ENV ENTRY_POINT_FILE /app/srv/swoole.php
EXPOSE 9501
