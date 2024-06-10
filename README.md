This app is just a concept, it is very simple and doesn't have features that would be needed in a bigger one, like pagination and better filtering for User list, robust form validation or user roles/permissions management.

It uses Laravel Breeze for authentication, spatie laravel-permission package for permissions - that is also very simple here - using just 2 user roles.

The users aren't created, they have to register with name and e-mail, the e-mail address has to be confirmed before the user can access the Users list and other functions. When registered 
(by default with 'user' role = not allowed to update or delete users), they can change their profile info and can have their info changed by admin users (admin role is first given in db table now,
then an admin user can change another user's role to admin).

I tested the app in docker containers and used mailtrap for easy emails testing. It was meant to have czech localization, so some messages and other texts are primarily in czech and would need to be translated into other langs. 
