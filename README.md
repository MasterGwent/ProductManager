## Prerequisite
- ```docker```
- ```docker-compose```

## Installation guide
- ```git clone https://github.com/MasterGwent/ProductManager.git``` or ```git clone git@github.com:MasterGwent/ProductManager.git```
- ```cd .\ProductManager```
- ```docker-compose up --build```

## Sending email
- ```docker exec app php artisan queue:work```
