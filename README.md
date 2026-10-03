# IT0049 Technical Formative Assessment 1

## From Zero to Four Pages: Your First CodeIgniter Application

This small CodeIgniter 4 project introduces a basic POS idea through four pages. Customer and staff records are fictional examples stored in PHP arrays. There is no database, login, or transaction system.

## Requirements and setup

This workspace contains CodeIgniter **4.7.4**. Use PHP **8.2 or newer**, Composer **2**, and the PHP `intl` and `mbstring` extensions. The framework's Composer dependencies also include `laminas/laminas-escaper` and `psr/log`.

1. From the project root, run `composer install` to install dependencies.
2. Copy `.env.example` to `.env` (`Copy-Item .env.example .env` in PowerShell, or `cp .env.example .env` on macOS/Linux).
3. In `.env`, set `app.baseURL` to the local address, with a trailing slash. For the command below, use `app.baseURL = 'http://localhost:8080/'`.
4. Run `php spark serve` from the project root and open `http://localhost:8080/`.

Serve the `public/` directory if using another web server. The `.env` file is ignored by Git and should not contain committed secrets. This exercise needs no database settings.

## Pages and how they work

| Route | Controller method | View |
| --- | --- | --- |
| `/` | `Pages::index` | `app/Views/pages/home.php` |
| `/about` | `Pages::about` | `app/Views/pages/about.php` |
| `/customers` | `Customers::index` | `app/Views/customers/index.php` |
| `/users` | `Users::index` | `app/Views/users/index.php` |

`app/Config/Routes.php` connects each URL to a controller method. The controller prepares data and loads a view, which builds the HTML. `Customers::index` and `Users::index` each define five records in a hardcoded PHP array and pass that array to their listing view. The views use `foreach` to make the table rows. The shared header supplies navigation, and `public/css/style.css` provides basic styling.

## Submission

Submit both a [GitHub repository link](https://github.com/weseemahmed11-tech/TA1) and a link to the working hosted application. Add the hosted URL after deployment.

The activity says no database is involved, but its submission section also asks for a database export. Confirm with the instructor whether that item is waived for this assessment. There is no database or SQL export in this project.
