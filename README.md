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
|       Name             |  ID |
|:----------------------:|:---:|
| Taha Ahmed             |58744|
| Lecky-Thompson William |58412|
| Vivace F               |54490|  
| Ibrahim Tahiri         |54563|
| Scott Kula Kula        |55284|
| Ilias Mehdi            |55727|
| Arthur Nanson          |56035|
| Rida Belkhiri          |58063|
| Nader Hadj Youssef     |54685|
| Imad El Harrouti       |58132|
| Zeki Ozkara            |58143|
| Imad El Harrouti       |58132|
| Ismael El Yasidi       |54420|
| Yahya Ouamar           |54915|
  
## Project Skeleton
- Backend           : Laravel
- FrontEnd          : Laravel (Blade)
- Database          : SQL
- Authentication    : Socialite and Jetstream

## How to contribute
If you want to contribute to this project, here's a step-by-step guide to get yoy started :
1. **Clone the repository :**
   - `git clone https://git.esi-bru.be/2023-2024/prjg5/pbteam.git`

1. **Install the dependencies :**
   - `composer install`
   - `npm install`
   - `composer require barryvdh/laravel-dompdf`

1. **Build UI files:**
   - `npm run build`

1. **Set up the `.env` file:**
   - Set up the `.env` file with your Mysql database information.

1. **Migrate to the database:**
   - `php artisan migrate`

1. **Add some data to the database:**
   - `php artisan db:seed`

1. **Run the project :**
   - `php artisan serve`

1. **You're good to go!**

Website Url : [Medifiches](https://gestproj2.alwaysdata.net/)

## Development State
The project is currently under development following the AGILE development pattern (Scrum).

## Extra instructions for the PDF
   
1. **Configuring the `php.ini`located in the php folder **
   - Uncomment the extention which start with: `;extension= gd`

1. **Downloading the PDF:**
   - Use the download method to download the generated PDF.
   

- Sprint 1 (16/10 - 26/10)
- Sprint 2 (06/11 - 16/11)
- Sprint 3 (20/11 - 30/11)
- Sprint 4 (04/12 - 14/12)
