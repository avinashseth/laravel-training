{{-- @servers(['localhost' => '127.0.0.1'])

@task('avinash-seth', ['on' => 'localhost'])
    php artisan dusk
@endtask --}}

{{-- @servers(['localhost' => '127.0.0.1'])

@task('avinash-seth', ['on' => 'localhost'])
    php artisan make:migration {{ $name }}
@endtask --}}

{{-- @servers(['localhost' => '127.0.0.1'])

@story('deploy')
    migrate
    clear-cache
@endstory
 
@task('migrate')
    php artisan migrate:fresh
@endtask
 
@task('clear-cache')
    php artisan config:cache
@endtask --}}

{{-- @servers(['localhost' => '127.0.0.1', 'production'=>'1.2.3.4'])

@story('deploy')
    migrate
    clear-cache
@endstory
 
@task('migrate', ['on'=>'production', 'confirm' => true])
    php artisan migrate:fresh
@endtask
 
@task('clear-cache', ['on'=>'localhost'])
    php artisan config:cache
@endtask --}}

{{-- @servers(['localhost'=>'127.0.0.1'])

@task('clear-cache', ['on'=>'localhost'])
    php artisan config:cache
@endtask --}}

@servers(['localhost'=>'127.0.0.1'])

@story('first-run')
    composer-install
    migrate
@endstory

@task('composer-install')
    composer install
@endtask

@task('migrate')
    php artisan migrate
@endtask