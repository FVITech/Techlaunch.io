# Webpack Setup for a Static Website

Webpack has been configured in the webpack.config.js file. It will bundle all JavaScript files
that are 'required' into the index.js file into a single 'bundle.js' file. ES6 JavaScript syntax
will be compiled into ES5 syntax (not including ES6 modules, i.e. 'import' and 'export').

The index.js file is the root of all things webpack--if a file is not included in this file,
Webpack won't touch it.

The index.scss file has been required into the index.js file so that Webpack can compile ```.scss``` files
into a 'bundle.css' file before prefixing it with autoprefixer.

### Usage

```npm run start``` will bundle the ```.js``` and ```.scss``` files, and watch them for changes,
recompiling and refreshing the browser every time you save a ```.js``` or ```.scss``` file.

*Note:* Webpack will not refresh the browser on any ```.html``` changes, since no ```.html``` files
have been required into the index.js file.


```npm run prod``` will remove unused code and will minify the bundle.js and bundle.css files.
