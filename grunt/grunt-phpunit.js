module.exports = function (grunt) {

    'use strict';

    var config = require('config');

    grunt.config('phpunit', {
        options: {
            bin: config.paths.phpunit,
            colors: true
        },
        classes: {
            coverage: true,
            dir: config.paths.tests
        }
    });

};