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

    concurrent: {
      start: [
        'less',
        'open',
        'watch'
      ],
      options: {
        logConcurrentOutput: true
      }
    },

    less: {
      default: {
        files: {
          'style.css': 'styles/main.less'
        }
      }
    },

    watch: {
      options: {
        livereload: true
      },
      php: {
        files: ['**/*.php'],
        tasks: []
      },
      less: {
        files: ['styles/**/*.less'],
        tasks: ['less']
      }
    },

    copy: {
      dist: {
        files: [{
          expand: true,
          src: ['*', '!Gruntfile.js', '!bower.json', '!package.json'],
          dest: 'dist/',
          filter: 'isFile'
        }]
      }
    },

    clean: {
      dist: ['dist']
    }
  });

  grunt.registerTask('build', ['less', 'clean', 'copy']);
  grunt.registerTask('default', ['php', 'concurrent']);
};