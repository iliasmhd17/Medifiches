# Project MediFiches

## Table of content :
- [Project MediFiches](#project-medifiches)
  - [Table of content :](#table-of-content-)
  - [Meet the development Team](#meet-the-development-team)
  - [Project Skeleton](#project-skeleton)
  - [How to contribute](#how-to-contribute)
  - [Development State](#development-state)


This project consists on creating a website for animators and parents to see, modify and create medical reports for their children. It will help animators create and organise activites for their registered children.


## Meet the development Team

The team behind this project, PBTeam, is made of the following members :
|       Name            |  ID |
|:---------------------:|:---:|
|Taha Ahmed             |58744|
|Lecky-Thompson William |58412|
|Vivace F               |54490|  
| Ibrahim Tahiri        |54563|
| Scott Kula Kula       |55284|
| Ilias Mehdi           |55727|
| Arthur Nanson         |56035|
| Rida Belkhiri         |58063|
| Imad El Harrouti      |58132|
| Zeki Ozkara           |58143|
| Imad El Harrouti      |58132|
| Ismael El Yasidi      |54420|
| Nader Hadj Youssef    |58685|
| Yahya Ouamar          |54915|
  
## Project Skeleton
- Backend           : Laravel
- FrontEnd          : Laravel (Blade)
- Database          : SQL
- Authentication    : Socialite and Jetstream

## How to contribute
If you want to contribute to this project, here's a step-by-step guide to get yoy started :
1. Clone the repository :
`git clone https://git.esi-bru.be/2023-2024/prjg5/pbteam.git`
1. Install the dependencies :
`composer install`
`npm install`
1. Build ui files:
`npm run build`
1. Set up the `.env` file with your postgresql database information
1. Migrate to database :
`php artisan migrate`
1. Run the project : 
`php artisan serve`
1. You're good to go!
## Development State
The project is currently under development following the AGILE development pattern (Scrum).

## Instruction for the pdf
Installing the Library:
Use Composer to add the "barryvdh/laravel-dompdf" library to the Laravel project by running the command composer require barryvdh/laravel-dompdf.

Configuring the Service Provider:
Add the service provider Barryvdh\DomPDF\ServiceProvider to the config/app.php file in the providers array.

Configuring the Alias:
Add the PDF facade to the config/app.php file in the aliases array.

Using in Code:
Use the library to generate PDF files from pdf.blade.php by using PDF::loadView('pdf') to load the view into a PDF.

Downloading the PDF:
Use the download method to download the generated PDF.

The code is also documented.
- Sprint 1 (16/10 - 26/10)
- Sprint 2 (06/11 - 16/11)
- Sprint 3 (20/11 - 30/11)
- Sprint 4 (04/12 - 14/12)
