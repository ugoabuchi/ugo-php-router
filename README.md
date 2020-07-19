# ugo-php-router

This is simple php router to customize how your links look example: www.domain.com/home or www.domain.com/home.contact or www.domain.com/admin.dashboard
it all depends on you

# How to use
1. Create a .htaccess file in the root directory of your app and paste the following in it
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ ./index.php [L,QSA]


2. Copy the index.php file which was cloned from this repo to the root directory of your aapp

3. Edit the index.php routing file to suite your choice of linke and read cthe comments in it

# Please note that all your app protocols will pass through the index file

# For server requests such as POST, GET etc, below is an example
Assumingwe customized out admin login link to "admin.login" which points at login.php then to pass a request we simply send them to "admin.login"
i.e admin.log?params

For assistance and inquireies contact mathewfortune54@gmail.com or +2349083273485
