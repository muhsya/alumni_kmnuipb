<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'alumni_kmnuipb');

// Project repository
set('repository', 'git@domain.com:username/repository.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);

// Shared files/dirs between deploys
add('shared_files', ['.env']);
add('shared_dirs', ['public', 'storage']);

// Writable dirs by web server
add('writable_dirs', ['storage']);


// Hosts

host('alumni.kmnuipb.or.id')
    ->set('deploy_path', '~/web/alumni.kmnuipb.or.id/public_html');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

after
// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

