const path = require('path');
const fs = require('fs');

// Main JavaScript source file path
const mainJsPath = './assets/js/src/main.js';

module.exports = {
  entry: {
    main: mainJsPath,
  },
  output: {
    filename: '[name].min.js',
    path: path.resolve(__dirname, 'build/assets/js'),
    clean: false,
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
    ],
  },
  resolve: {
    extensions: ['.js'],
  },
  devtool: process.env.NODE_ENV === 'development' ? 'source-map' : false,
  optimization: {
    splitChunks: false,
  },
};
