1. **Clone the repository :**
   - `git clone https://git.esi-bru.be/2023-2024/prjg5/pbteam.git`

1. **Install the dependencies :**
   - `composer install`
   - `npm install`

1. **Build UI files:**
   - `npm run build`

1. **Set up the `.env` file:**
   - Set up the `.env` file with your Mysql database information.

1. **Migrate to the database:**
   - `php artisan migrate`

1. **Run the project :**
   - `php artisan serve`

1. **You're good to go!**

## Development State
The project is currently under development following the AGILE development pattern (Scrum).

## Instructions for the PDF
1. **Installing the Library:**
   - Use Composer to add the "barryvdh/laravel-dompdf" library to the Laravel project by running the command: `composer require barryvdh/laravel-dompdf`

2. **Configuring the Service Provider:**
   - Add the service provider `Barryvdh\DomPDF\ServiceProvider` to the `config/app.php` file in the providers array.

3. **Configuring the Alias:**
   - Add the PDF facade to the `config/app.php` file in the aliases array.

4. **Using in Code:**
   - Use the library to generate PDF files from `pdf.blade.php` by using `PDF::loadView('pdf')` to load the view into a PDF.

5. **Downloading the PDF:**
   - Use the download method to download the generated PDF.

The code is also documented.
- **Sprint 1 (16/10 - 26/10):**
  - Description of the tasks completed during Sprint 1.

- **Sprint 2 (06/11 - 16/11):**
  - Description of the tasks completed during Sprint 2.

- **Sprint 3 (20/11 - 30/11):**
  - Description of the tasks completed during Sprint 3.

- **Sprint 4 (04/12 - 14/12):**
  - Description of the tasks completed during Sprint 4.
