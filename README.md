# Symfony Angular SPA Template
This template is heavily inspired in [Microsoft SPA templates for ASP.NET Core](https://docs.microsoft.com/en-us/aspnet/core/client-side/spa/angular)

## Requirements
This template assumes that you have installed the following tools and they are available in your $PATH:

- [node](https://nodejs.org/en/download/)
- [npm](https://www.npmjs.com/)
- [php](https://www.php.net/)
- [symfony](https://symfony.com/download/)
- [composer](https://getcomposer.org/download/)

## Dependencies

### Client Side
Run to install all client side dependencies run:
```shell script
npm install
```

### Server Side
Run to install all server side dependencies run:
```shell script
npm run dependencies:serverapp
```

## Development server
To run the project run ` npm run serve` and go to http://localhost:3000. Symfony API will be available at http://localhost:3000/api

## Docker
There's a production ready-ish [Dockerfile](Dockerfile) using multistage builds for smaller image size.
