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
          'style.css': 'styles/main.less',
          'editor-style.css': 'styles/editor-style.less'
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
          dot: true,
          cwd: './',
          dest: 'dist/',
          src: [
            '*.php',
            '*.css',
            'bower_components/**/*',
            'scripts/**/*'
          ]
        }]
      }
    },

    clean: {
      dist: ['dist']
    },

    rsync: {
      options: {
        args: ['-zvr', '--delete'],
        exclude: ['.git*', '*.scss', 'node_modules'],
        recursive: true
      },
      prod: {
        options: {
          src: './dist/*',
          dest: '/var/www/html/wp-content/themes/wp-bootstrap',
          host: 'ubuntu@54.64.213.117',
          delete: true
        }
      }
    }

  });

  grunt.registerTask('build', ['less', 'clean', 'copy']);
  grunt.registerTask('default', ['php', 'concurrent']);
};