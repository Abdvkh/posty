# Laravel base web application for writing comments
## Used technologies
- PHP
- Laravel
- MySQL
- mailtrap.io
- TailwindCSS

##Hot to run
1. ```git clone https://github.com/Abdvkh/posty```
2. Enter you credentials in .env file
    - Database info
    ```
   ...
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=posty
    DB_USERNAME=postgres
    DB_PASSWORD=
   ...
    ```
    - Mailtrap info
    ```
   ...
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=1544c4523b1d39
    MAIL_PASSWORD=6fd2decb449fa6
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=abubakr@posty.com
    MAIL_FROM_NAME="${APP_NAME}"
   ...
    ```

## What's made
- Registration
- Authorization/Authentication
- View posts
  View user's posts
- Post component
- Liking/Unliking/Deleting posts
- Send an email when post is liked

## Screenshots

###Homepage
![](https://hosty.xxx/i/ebc33bfd9e429fe823a418f1cc8890b03813e765.jpg)

###Login
![](https://hosty.xxx/i/e5dbeb7f2fb544c67438a8aa45c7269c181c3b54.jpg)

###Registration
![](https://hosty.xxx/i/90e62776616f4cdae993e7aebac65369848495bc.jpg)

###Posts without authorization
![](https://hosty.xxx/i/7f95d4118c07c8cd900c98424c3020e2fe331d99.jpg)

###Posts after authorization
![](https://hosty.xxx/i/94db81b6e3249631be38e93951493c1fb5f1c4b4.jpg)

###Added new post
![](https://hosty.xxx/i/87f6520347ae7b29ae51e5d52fd5ce4fd01a2b0d.jpg)

###User posts
![](https://hosty.xxx/i/d3fbd50f1589494a554f518d71610d237176cfa0.jpg)

###Sent email
![](https://hosty.xxx/i/b1ec52d726eb4df9b7e15f52446cf9ed1800a3fe.jpg)
