module.exports = function(grunt)
{

	grunt.initConfig({

		concat: {

		},


		compass: {
			app_sass : {
				options: {
					sassDir : 'dev/sass/',
					cssDir : 'dev/css/app/'
				}
			}
		},

		clean: {
			app_css: {
				src: ['dev/css/app/']
			}
		},

		autoprefixer: {
			app_css: {
				options: {
					browsers : ['last 2 versions'],
					cascade : true
				},
				src: ['!dev/css/vendors','dev/css/app/**/*.css']
			}
		},

		watch: {
			periods_sass: {
				files: ['dev/sass/**/*.scss'],
				tasks: ['clean:app_css','compass:app_sass', 'autoprefixer:app_css'],
			}
		}

	});



	// grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-watch');
	// grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-autoprefixer');

	grunt.registerTask('init', ['clean:app_css','compass:app_sass', 'autoprefixer:app_css']);

};