# Lumen-App

1. open cmd in /path/to/lumen-app   
2. remember to add in \drivers\etc\hosts file the following line  `192.168.10.10  homestead.app`
3. run vagrant up to start the lumen app with homestead   
4. connect to homestead with `vagrant ssh`    
5. change directory in the virtual machine console to Code   
6. migrate the tables using `php artisan migrate`   
7. seed the tables using `php artisan db:seed --class=UserTableSeeder` and `php artisan db:seed --class=FlightsTableSeeder`    
8. access the app through a web browser using the following address `http://homestead.app`
