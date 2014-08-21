module.exports = function (grunt) {

    'use strict';

    grunt.config('shell', {
        install: {
            command: [
                'bower install',
                'composer install'
            ].join('&&')
        },
        update: {
            command: [
                'npm-check-updates -u',
                'npm update',
                'npm update caniuse-db',
                'npm prune',
                'bower update',
                'bower prune',
                'composer update'
            ].join('&&')
        }
    });

};