# Symfony Angular SPA Template
This template is heavily inspired in [Microsoft SPA templates for ASP.NET Core](https://docs.microsoft.com/en-us/aspnet/core/client-side/spa/angular). It's an Agular project with a Symfony project inside the [ServerApp](ServerApp) directory

## Requirements
This template assumes that you have installed the following tools and they are available in your $PATH:

- [node](https://nodejs.org/en/download/) >=10 !=13
- [npm](https://www.npmjs.com/)
- [php](https://www.php.net/) >=7.2.5
- [symfony](https://symfony.com/download/)
- [composer](https://getcomposer.org/download/)

## Dependencies

### Client Side
To install all client side dependencies run:
```shell script
npm install
```

### Server Side
To install all server side dependencies run:
```shell script
npm run dependencies:serverapp
```

## Development server
To run the project run ` npm run serve` and go to http://localhost:3000. Symfony API will be available at http://localhost:3000/api

## Build
The ` npm run build` script will generate a ready to deploy code with both client side and server side apps. Upload the generated /dist directory to your apache webserver and make sure that your server root directory is /public.

## Docker
There's a production ready-ish [Dockerfile](Dockerfile) using multistage builds for smaller image size.

## Other SPA templates
You can check this other Symfony SPA templates

- [React with Redux](../../../symfony-react-redux-spa-template)
