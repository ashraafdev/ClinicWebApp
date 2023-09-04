<p align="center"><img src="https://www.pngmart.com/files/21/Hospital-Vector-PNG-Transparent.png" width="400" alt="Laravel Logo"></p>

## Clinic Web App Developed By Achraf Hebboul - WorldSkills 2024

This app is my solution proposal to manage daily basis operations in an hospital

## Used Technologies

As we were trainees at the OFPPT, we learnt <a href="https://laravel.com/">Laravel</a> as a full-stack framework to create modern web applications, so i decide to pick Laravel as main framework

Also i have used <a href="https://laravel-livewire.com/">Laravel Livewire</a> benefiting from dynamic interfaces to make the cycle of developement more easy and faster

In addition that this app is linked with a payment system, this payment system is <a href="https://stripe.com/">Stripe</a>

## Instructions to benefit from this solution: Installation Steps

- clone this repo: `git clone https://github.com/ashraafdev/ClinicWebApp.git`

- rename environement file: `mv .env.example .env`

- make a copy example of environement file : `cp .env .env.example`
> Laravel require it later!

- install php's required dependecies: `composer install`
> somtimes some errors occurs when type `composer install` or `composer update`, this is because of the difference between php's version between machines, please follow instructions that poping in the console

- migrate database : `php artisan migrate`

- seed required models :
  ```
    php artisan db:seed --class=RoleSeeder
    php artisan db:seed --class=DepSerSeeder
    php artisan db:seed
  ```

- install node js packages:    `npm install`

- build the app:    `npm run build`

- generate app key:    `php artisan key:generate`

- launch the backend of the app with (you need two console tabs):
   ```
    php artisan serve
    npm run dev
  ```

## App is launched with success NOW!

- app is launched, now you can login to clinic app as an administrator:
  ```
    email: administrator@clinic.com
    password: 1234567890
  ```
