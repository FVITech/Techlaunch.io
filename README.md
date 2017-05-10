# Webpack Setup for a Static Website

Webpack has been configured in the webpack.config.js file to bundle all JavaScript files
that are 'required' into the index.js file into a single 'bundle.js' file. Webpack will use
Babel to compile ES6 JavaScript syntax into ES5 syntax.

The index.js file is the root of all things webpack--if a file is not included in this file,
Webpack won't touch it.

The index.scss file has been required into the index.js file. Webpack will compile SCSS files
into a 'bundle.css' file before prefixing it with autoprefixer.

### Usage

```npm run start``` will bundle the ```.js``` and ```.scss``` files, and watch them for changes,
recompiling and refreshing the browser every time you save a ```.js``` or ```.scss``` file.

```npm run prod``` will remove unused code and will minify the bundle.js and bundle.css files.
