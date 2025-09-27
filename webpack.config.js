const path = require('path');

module.exports = {
  entry: {
    main: './assets/js/src/main.js',
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, 'assets/js'),
    clean: true,
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
    splitChunks: {
      chunks: 'all',
    },
  },
};
