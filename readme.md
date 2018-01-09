A Laravel 5.5 invitations demo-project that extends basic `php artisan make:auth` functionality by adding invitation-based registration system.

## How it works

1. Users cannot register - they only request invitation to register

![Laravel invitations 01](http://webcoderpro.com/laravel-invitations-01.png)

2. Administrator logs in (admin@admin.com - admin) and sees invitation requests and automatically generated links. They can be sent outside of this system - via email/Slack etc.

![Laravel invitations 02](http://webcoderpro.com/laravel-invitations-02.png)

3. Clicking the invitation link approves the invitation and allows person to go to registration form with e-mail pre-filled.

![Laravel invitations 03](http://webcoderpro.com/laravel-invitations-03.png)

## License

Basically, use and re-use however you want.