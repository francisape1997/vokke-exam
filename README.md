## Environment
- PHP 8.1
- Laravel 9.48.0
- Vite

## Setup and Installation
- composer install && npm install
- I used docker and sail. So go to project root directory and execute command "./vendor/bin/sail up"
- Run the migrations "php artisan migrate"
- Then execute command "npm run dev"
- Lastly go to http://localhost

## Testing
- Create database named "testing" if not defined yet.
- Run the test: php artisan test

# API Specification
## Animals (Kangaroo) List - GET | api/animal
- Query strings:
- ?search = string
- ?sort = "{field},{direction}"
- ?filter = "{field},{value}"

- Sample:
````
api/animal?search=Kangaroo&sort=date_of_birth,asc&filter=friendliness,FRIENDLY
````

## Create Animal - POST | api/animal
- Sample payload:
````
{
  "name": "Kang",
  "nickname": "JD",
  "weight": 85.6,
  "height": 175,
  "gender": "FEMALE",
  "color": "green",
  "friendliness": "NOT_FRIENDLY",
  "date_of_birth": "1990-01-01"
}
````
## Update Animal - PUT | api/animal/{id}
- Sample payload:
````
{
  "name": "Kang",
  "nickname": "JD",
  "weight": 85.6,
  "height": 175,
  "gender": "FEMALE",
  "color": "green",
  "friendliness": "NOT_FRIENDLY",
  "date_of_birth": "1990-01-01"
}
````