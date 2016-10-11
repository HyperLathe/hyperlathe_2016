module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'css/custom/styles.css': 'css/custom/styles.scss',
                }
            } 
        },
        concat: {
            headjs: {
                src: [
                    'js/customHeadSrc/uikit.min.js',
                    'js/customHeadSrc/sticky.js',
                    'js/customHeadSrc/parallax.js'
                ],
                dest: 'js/headSrc/global-head.js',
            },
            footjs: {
                src: [
                    'js/customFootSrc/*.js',
                ],
                dest: 'js/footSrc/global-foot.js',
            },
            css: {
                src: [
                    'css/uikit.min.css',
                    'css/custom/*.css'
                ],
                dest: 'css/styles.css',
            }
        },
        uglify: {
            build: {
                files: {
                    "js/footSrc/global-foot.min.js": ["js/footSrc/global-foot.js"],
                    "js/headSrc/global-head.min.js": ["js/headSrc/global-head.js"]
                }
            }
        },
        watch: {
            scripts: {
                files: ['js/customHeadSrc/*.js', 'js/customFootSrc/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                    livereload: true
                },
            },
            css: {
                files: ['css/custom/styles.scss'],
                tasks: ['sass', "concat:css"],
                options: {
                    spawn: false,
                    livereload: true
                }
            },
            php: {
                files: [
                    '*.php'
                ],
                options: {
                    spawn: false,
                    livereload: true
                }
            } 
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['sass', 'concat', 'uglify', 'watch']);

};