module.exports = function (grunt) {

    'use strict';

    grunt.config('shell', {
        install: {
            command: [
                'bower install',
                'composer install'
            ].join('&&')
        },
        release: {
            command: 'composer dump-autoload --optimize'
        },
        update: {
            command: [
                'npm prune',
                'npm-check-updates -u',
                'npm update',
                'npm update caniuse-db',
                'bower prune',
                'bower update',
                'composer update'
            ].join('&&')
        }
    });

};