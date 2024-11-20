## About Project

It is a project built with Laravel, Vue.js, and Tailwind that allows you to securely export a PDF file from input data, ensuring that the data is never saved, only downloaded.

## Requirements

- PHP >= 8.x
- Composer
- Node.js (which includes NPM)
- Laravel 10.x (or higher)
- Vue.js
- Tailwind
- Python 3.x (for sentiment analysis using TextBlob) 
  (If you don't have Python installed, you can download it from [python.org](https://www.python.org/downloads))
  
## Project Setup

To get started, follow these steps:

**1. Create the environment file:**
   - Copy the contents of `.env.example` to a new file named `.env`.
   - Update the database credentials in the `.env` file to match your MySQL setup:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

**2. Install dependencies:**
   - Run the following commands in your terminal:
     - `composer update`
     - `php artisan key:generate`
     - `npm install`
     - `python -m ensurepip --upgrade`
     - `pip install textblob`
     - `python -m textblob.download_corpora`
    
**3. Run migrations:**
   - Execute the migrations to set up the database tables:
     - `php artisan migrate`

**4. Run the project:**
   - Start the Laravel server by running:
     - `php artisan serve`
   - Start the development server for Vue.js by running:
     - `npm run dev`

**5. The project is now ready to use.**

## License

This project is licensed under the **Samuel Šteiner License**.

- **Free for personal and educational use.**
- **Not allowed for commercial use or redistribution as a part of any product.**
- **May not be used as a base for proprietary projects.**

If you'd like to contribute or use it for commercial purposes, please contact the author.

---

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
