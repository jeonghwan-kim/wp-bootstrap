module.exports = function (grunt) {

  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
    php: {
      dev: {
        options: {
          port: 9002,
          hostname: 'localhost',
          base: '../../../'
        }
      }
    },

    open: {
      dev: {
        url: 'http://localhost:9002',
        app: 'Google Chrome'
      }
    },

    watch: {
      options: {
        livereload: true
      },
      php: {
        files: ['**/*.php', '**/*.css', '**/*.html'],
        taskes: []
      }
    },

    concurrent: {
      start: [
        'open',
        'watch'
      ],
      options: {
        logConcurrentOutput: true
      }
    }
  });

  grunt.registerTask('default', ['php', 'concurrent']);
};