module.exports = function(grunt) {
  grunt.initConfig({
    concat: {
      options: {
        separator: ";",
      },
      dist: {
        src: ["js/pair.js", "js/bjr.js"],
        dest: "dist/js/built.js",
      },
    },
    uglify: {
      options: {
        separator: ";",
      },
      dist: {
				src: ["js/pair.js", "js/bjr.js"],
        dest: "dist/js/built.js",
      },
    },
    watch: {
      scripts: {
        files: 'js/*.js',
        tasks: ["concat:dist", "uglify:dist"]
      }
    }
  });

  grunt.loadNpmTasks("grunt-contrib-concat");
	grunt.loadNpmTasks("grunt-contrib-uglify");
	grunt.loadNpmTasks("grunt-contrib-watch");

  grunt.registerTask("default", ["dev", "dist", "watch"]);
	grunt.registerTask("dev", ["concat:dist"]);
	grunt.registerTask("dist", ["uglify:dist"]);
};
