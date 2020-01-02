# Template to develop/build a Symfony project

## Introduction

Two docker containers:
  - api-php : PHP 7.3 / Symfony 5.X
  - api-nginx : NGINX 1.17
  

## Test

Adding the `docker-compose.test.yaml` you can run the tests 
via a [codeception](https://codeception.com/) container named `api-test` 

```bash
make run-tests-all
```

### Run the unitary tests

```bash
make run-tests-unit
(or make run-tests-unit-coverage)
```

### Run the api tests

```bash
make run-tests-api
(or make run-tests-api-coverage)
```

### Run the acceptance tests

```bash
make run-tests-acceptance
```

## Build

Use a `Makefile` to run commands

```bash
➜ make help                  

Usage:
  make COMMAND [c=<name>]

Commands:
  list                 List the service names availbale in the docker-compose files
  build                Build all or c=<name> images
  up                   Start all or c=<name> containers in foreground
  stop                 Stop all or c=<name> containers
  restart              Restart all or c=<name> containers
  status               Show status of containers
  ps                   Alias of status
  shell                Start a shell session in the c=<name> container
  exec                 Execute a cmd=<command> on a c=<name> container
  logs                 Show logs for all or c=<name> containers
  clean                Clean the docker services
  clean-all            Remove the docker images (docker services, network and volumes)
  run-tests-all        Run the tests (unit, api, acceptance)
  run-tests-unit       Run the unitary tests
  run-tests-unit-coverage Run the unitary tests and generated the code coverage
  run-tests-api        Run the api tests
  run-tests-api-coverage Run the api tests and generated the code coverage
  run-tests-acceptance Run the acceptance tests
```

### Run the project 

Build and run the containers

```bash
make build
make up
```

Liveness probe

```bash
➜ curl -i http://127.0.0.1:8881/ping
HTTP/1.1 200 OK
Server: nginx/1.17.6
Content-Type: text/plain; charset=UTF-8
Transfer-Encoding: chunked
Connection: keep-alive
X-Powered-By: PHP/7.3.13
Cache-Control: no-cache, private
Date: Thu, 02 Jan 2020 12:52:13 GMT
X-Robots-Tag: noindex

pong
```



