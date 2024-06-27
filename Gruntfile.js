module.exports = function(grunt) {

    // Configuración del proyecto
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        browserSync: {
            dev: {
                bsFiles: {
                    src: [
                        // 'dist/styles/*.css',
                        'dist/scripts/*.js',
                        '**/*.php'
                    ]
                },
                options: {
                    watchTask: true,
                    proxy: "localhost/wordpress/",
                    port: 3025,
                    serveStatic: ['assets/css'],
                    snippetOptions: {
                        rule: {
                            match: /<\/head>/i,
                            fn: function (snippet, match) {
                                return '<link rel="stylesheet" type="text/css" href="/escalaEstilos.css"/>' + snippet + match;
                            }
                        }
                    }
                }
            },
            server: {
                bsFiles: {
                    src: [
                        'dist/styles/*.css',
                        'dist/scripts/*.js',
                        '**/*.php'
                    ]
                },
                options: {
                    watchTask: true,
                    proxy: "https://escala.com/",
                    port: 3025,
                    https: true,
                    serveStatic: ['dist/styles'],
                    snippetOptions: {
                        rule: {
                            match: /<\/head>/i,
                            fn: function (snippet, match) {
                                return '<link rel="stylesheet" type="text/css" href="/escalaEstilos.css"/>' + snippet + match;
                            }
                        }
                    }
                }
            }
        },

        sass: {
            options: {
                implementation: require('sass'),
                sourceMap: true,
                outputStyle: 'compressed'
            },
            dist: {
                files: [{
                    expand: true,
                    cwd: 'resources/assets/styles',
                    src: ['**/*.sass'],
                    dest: 'dist/styles',
                    ext: '.css'
                }]
            }
        },

        uglify: {
            dist: {
                files: [{
                    expand: true,
                    cwd: 'resources/assets/scripts',
                    src: '**/*.js',
                    dest: 'dist/scripts',
                    ext: '.min.js'
                }]
            }
        },

        postcss: {
            options: {
                map: true,
                processors: [
                    require('autoprefixer')()
                ]
            },
            dist: {
                src: 'dist/styles/*.css'
            }
        },

        watch: {
            css: {
                files: 'resources/assets/styles/**/*.sass',
                tasks: ['sass', 'postcss'],
                options: {
                    spawn: false,
                    // livereload: true // Añadido para inyectar cambios de CSS
                }
            },
            js: {
                files: 'resources/assets/scripts/**/*.js',
                tasks: ['uglify'],
                options: {
                    spawn: false,
                }
            }
        }
    });

    // Carga los plugins
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-postcss');

    // Tareas por defecto
    grunt.registerTask('default', ['sass', 'uglify', 'postcss', 'browserSync:dev', 'watch']);
    grunt.registerTask('server', ['sass', 'uglify', 'postcss', 'browserSync:server', 'watch']);
};
