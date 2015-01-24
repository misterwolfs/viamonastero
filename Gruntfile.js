module.exports = function(grunt) {

      // load all grunt tasks
      require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

      grunt.initConfig({

            uglify: {
                  options: {
                        beautify: true
                  },
                  my_target: {
                        files: {
                              'wp-content/themes/roots-master/assets/js/scripts.min.js': [
                                    'src/js/*js',
                                    'src/js/dir/*.js'

                              ]
                        }
                  }
            },

            less: {
                  development: {
                        options: {
                              compress: true,
                              yuicompress: true,
                              optimization: 2
                        },
                        files: {
                              // target.css file: source.less file
                              "wp-content/themes/roots-master/assets/css/main.min.css": "src/css/dir/application.less"
                        }
                  }
            },

            watch: {
                  styles: {
                        files: ['src/css/dir/*.less'], // which files to watch
                        tasks: ['less'],
                        options: {
                              nospawn: true,
                              compress: true
                        }
                  },
                  /* watch and see if our javascript files change, or new packages are installed */
                  js: {
                        files: ['src/js/dir/*.js'],
                        tasks: ['uglify']
                  }
            }

      });

      grunt.registerTask('default', ['watch']);

}