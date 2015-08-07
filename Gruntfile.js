path = require('path');


module.exports = function(grunt){
  grunt.initConfig({
    stylus: {
      compile: {
        options: {
          compress: false
        },
        files: {
          'assets/css/custom.css': 'stylus/index.styl',
        }
      }
    },
    watch: {
      stylus:{
        files:['stylus/*.styl','stylus/**/*.styl'],
        tasks: 'stylus'
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-stylus');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['stylus', 'watch']);
};