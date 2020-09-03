# create-siler-app
🧱 Set up a modern [Siler](https://github.com/leocavalcante/siler) app by running one command.

```bash
composer create-project siler/app my-app
```

## Scripts

### `composer start`
Runs [CLI SAPI built-in web server ](https://www.php.net/manual/en/features.commandline.webserver.php) on port 8080.

### `composer swoole`
Runs [Swoole web server](https://www.swoole.co.uk/) on port 9501.

#### `docker-compose up`
Runs [Docker](https://www.docker.com/) using [Dwoole](https://github.com/leocavalcante/dwoole) on port 9501 as well.

## DevTools

It uses [`ramsey/devtools`](https://github.com/ramsey/devtools) with [Pest](https://pestphp.com/) override for `test:unit`.

```bash
analyze
  analyze:phpstan      Runs the PHPStan static analyzer.
  analyze:psalm        Runs the Psalm static analyzer.

build
  build:clean          Removes everything from the build directory that is not under version control.
  build:clear-cache    Removes everything from build/cache that is not under version control.

lint
  lint:fix             Checks source code for coding standards issues and fixes them, if possible.

test
  test:all             Runs linting, static analysis, and unit tests.
  test:coverage:ci     Runs the unit test suite and generates a Clover coverage report.
  test:coverage:html   Runs the unit test suite and generates an HTML coverage report.
  test:unit            Runs the unit test suite.
```

## How-to

### `bootstrap.php`
Is a good place to startup your application, things like database connections, dependency injection containers, setups etc.

### `index.php`
Is called on each request, is a good place for routes and things that depends on the current request.
