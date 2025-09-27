module.exports = function(grunt) {
  // Project configuration
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    
    // Clean build directory
    clean: {
      build: ['build/'],
      local: ['/Users/fathanfisabililah/Local Sites/inscub/app/public/wp-content/themes/maju/build/']
    },
    
    
    // Build Tailwind CSS
    exec: {
      buildCSS: {
        cmd: 'npx tailwindcss -i ./assets/css/src/tailwind.css -o ./build/assets/css/tailwind.min.css --minify'
      },
      buildJS: {
        cmd: 'npx webpack --mode=production'
      }
    },
    
    // Copy theme files to build directory (excluding source files)
    copy: {
      theme: {
        files: [
          {
            expand: true,
            src: [
              '**/*',
              '!node_modules/**',
              '!build/**',
              '!Gruntfile.js',
              '!package.json',
              '!package-lock.json',
              '!.git/**',
              '!.gitignore',
              '!webpack.config.js',
              '!postcss.config.js',
              '!tailwind.config.js',
              '!.eslintrc.js',
              '!.stylelintrc',
              '!.prettierrc',
              '!scripts/**',
              '!test-grunt.js',
              '!assets/css/src/**',
              '!assets/js/src/**',
              '!assets/css/tailwind.css',
              '!assets/js/main.js'
            ],
            dest: 'build/'
          }
        ]
      },
      local: {
        files: [
          {
            expand: true,
            cwd: 'build/',
            src: ['**/*'],
            dest: '/Users/fathanfisabililah/Local Sites/inscub/app/public/wp-content/themes/maju/'
          }
        ]
      }
    },
    
    // Create zip file
    compress: {
      main: {
        options: {
          archive: 'maju.zip'
        },
        files: [
          {
            expand: true,
            cwd: 'build/',
            src: ['**/*'],
            dest: 'maju/'
          }
        ]
      }
    },
    
    // Watch for changes
    watch: {
      css: {
        files: ['assets/css/src/**/*.css'],
        tasks: ['exec:buildCSS', 'copy:local']
      },
      js: {
        files: ['assets/js/src/**/*.js'],
        tasks: ['exec:buildJS', 'copy:local']
      },
      php: {
        files: ['**/*.php'],
        tasks: ['copy:theme', 'copy:local']
      }
    }
  });

  // Load plugins
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-exec');
  grunt.loadNpmTasks('grunt-contrib-compress');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Register tasks
  grunt.registerTask('build', [
    'clean:build',
    'exec:buildCSS',
    'exec:buildJS',
    'copy:theme'
  ]);

  grunt.registerTask('build:local', [
    'build',
    'copy:local'
  ]);

  grunt.registerTask('build:zip', [
    'build',
    'compress'
  ]);

  grunt.registerTask('dev', ['watch']);
};