# Laravel Backed Plastic Surgery Website

> It's a plastic surgeon website created with Laravel, Alpine.Js and, Blade. 

## Built With

-   HTML, CSS, PHP, JavaScript, MySQL
-   Laravel, Alpine.js, Tailwind CSS

## Features

- **Small CMS for his services**: It has an admin panel which site owner can CRUD operations on Services using CKEditor. 
- **Multi-Language**: It is a multi-language website (tr, en). But it is coded like implementing a new language easily. 
- **Photo Gallery**: It has a photo gallery that can be filtered by services. Photos and Services have many to many relations. Admin can add multiple photos associated with multiple images at a single time.
- **Seo optimization**: Seo optimized. Thanks to Artesaos/Seotools package.
- **Online Appointment System**: It has a simple online appointment system that notifies admins both on the admin panel and via email.
- **Custom dynamic accordion on services**: It has an accordion option on service for FAQs implemented by alpine and tailwind.
- **Custom design**: Custom design pages created with Tailwind.
- **Image Optimization**: Thanks to Intervention/Image package.

## Requirements

- First of all, I created this project for a doctor, MD. Requirements are:
- A good desing.
- A simple solution for online appointment.
- Seo optimized, fast website
- An image gallery
- A simple CMS where site owner can do CRUD operations.

## Process and What I learned

- After thinking about the design spec, I focused on getting all the essentials working, like the backend, database design, routing, multilanguage implementation, and parsing the data. From there, I worked on file structure to make the blade components reusable and easier to maintain. And finally, there were several rounds of component coding, styling, and refactoring.
- It's the first project I used alpine. I think Alpine is a good option that is lightweight and also easing JavaScript implementation. 
- Customer wanted three embedded youtube videos on his home page. First, I directly embed youtube videos. But it killed webpage speed. After that, I tried lazy loading javascript packages for videos.  Because the videos are too close to the top of the page, It didn't work. Then I created a popup page for youtube videos for dynamically load videos after clicking a thumbnail with JS. I think It's the best solution other than a CDN option.
- Creating an accordion is very easy with using Alpine and Tailwind.  
- I learned how to implement CK editor and style its content.
- I like this project. The next thing I'll focus on is Jamstack.   

## Live Demo

[Live Demo Link](https://www.hayatikale.com/)

## Getting Started

Follow the steps below in order to run the project.

1. Run the following commands from the terminal.

`git clone https://github.com/emirsagit/plastic-surgery.git `

`cd plastic-surgery`

`composer install`

`npm install`

`php artisan key:generate`

`cp .env.exemple .env`

2. Open the .env file. Enter your database information correctly.

3. Run `php artisan migrate --seed`.

4. Run `php artisan serve`.

5. Go to config/admin.php and add your email to admins array.

6. Go to /register page and register yourself according to admin email settings.

7. Go to /admin page and add manage your site.

## Authors

👤 **Emir Sağıt**

-   GitHub: [@emirsagit](https://github.com/emirsagit)
-   Twitter: [@emirsagit](https://twitter.com/emirsagit)
-   LinkedIn: [Emir Sağıt](https://www.linkedin.com/in/emir-sa%C4%9F%C4%B1t-633035188/)

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

Feel free to check the [issues page](../../issues/).

## Show your support

Give a ⭐️ if you like this project!

## 📝 License

This project is [MIT](./MIT.md) licensed.
