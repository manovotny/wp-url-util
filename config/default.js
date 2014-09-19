module.exports = (function () {

    'use strict';

    return {
        author: {
            email: 'manovotny@gmail.com',
            name: 'Michael Novotny',
            url: 'http://manovotny.com',
            username: 'manovotny'
        },
        files: {
            browserify: 'bundle'
        },
        paths: {
            curl: 'curl_downloads',
            source: 'src',
            translations: 'lang'
        },
        project: {
            composer: 'manovotny/wp-url-util',
            description: 'A url utility for WordPress.',
            git: 'git://github.com/manovotny/wp-url-util.git',
            name: 'WP Url Util',
            slug: 'wp-url-util',
            type: 'plugin', // Should be `plugin` or `theme`.
            url: 'https://github.com/manovotny/wp-url-util',
            version: '0.3.0'
        }
    };

}());
