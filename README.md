<p align="center"><img src="https://www.pngmart.com/files/21/Hospital-Vector-PNG-Transparent.png" width="400" alt="Laravel Logo"></p>

## Clinic Web App Developed By Achraf Hebboul - WorldSkills 2024

This app is my solution proposal to manage daily basis operations in an hospital

## Used Technologies

As we were trainees at the OFPPT, we learnt <a href="https://laravel.com/">Laravel</a> as a full-stack framework to create modern web applications, so i decide to pick Laravel as main framework

Also i have used <a href="https://laravel-livewire.com/">Laravel Livewire</a> benefiting from dynamic interfaces to make the cycle of developement more easy and faster

In addition that this app is linked with a payment system, this payment system is <a href="https://stripe.com/">Stripe</a>

## Instructions to benefit from this solution: Installation Steps

- clone this repo: <b>git clone https://github.com/ashraafdev/ClinicWebApp.git</b>

- rename environement file: <b>mv .env.example .env</b>

- make a copy example of environement file: <b>cp .env .env.example</b>

- install php's required dependecies: <b>composer install</b>
> somtimes some errors occurs when type <b>composer install</b> or <b>composer update</b>, this is because of the difference between php's version between machines, please follow instructions that poping in the console

- install jetstream 'a login template for laravel' : <b>php artisan jetstream:install livewire</b>

- migrate database : <b>php artisan migrate</b>

- publish required class for spatie/laravel-permission : <b>php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"</b>

- seed required models : <b>php artisan db:seed</b>
