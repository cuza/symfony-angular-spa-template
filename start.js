const express = require('express');
const {createProxyMiddleware} = require('http-proxy-middleware');

// proxy middleware options
const symfonyOptions = {
  target: 'http://localhost:8000/',
  changeOrigin: true,
  pathRewrite: {'^/api': ''}
};

const angularOptions = {
  target: 'http://localhost:4200/',
  ws: true, // proxy websockets
  changeOrigin: true
}

// create the proxy (without context)
const symfonyProxy = createProxyMiddleware(symfonyOptions);
const angularProxy = createProxyMiddleware(angularOptions);

// mount `Proxies` in web server
const app = express();
app.use('/', angularProxy);
app.use('/api', symfonyProxy);
app.listen(3000);
