# create-siler-app
🧱 Set up a modern [Siler](https://github.com/leocavalcante/siler) app by running one command.

```bash
composer create-project siler/app
```

## Scripts

### `composer test`
Runs [Pest](https://pestphp.com/) testing framework.

### `composer start`
Runs [CLI SAPI built-in web server ](https://www.php.net/manual/en/features.commandline.webserver.php) on port 8080.

### `composer swoole`
Runs [Swoole web server](https://www.swoole.co.uk/) on port 9501.

#### `docker-compose up`
Runs [Docker](https://www.docker.com/) using [Dwoole](https://github.com/leocavalcante/dwoole) on port 9501 as well.
