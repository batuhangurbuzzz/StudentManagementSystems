# Student Registration System / Öğrenci Kayıt Sistemi

## About The Project

This project is a simple **Student Registration System** developed to
manage student records through a modern web application.

The system allows users to log in and access the student management page
through the `/students` route. After authentication, users can perform
operations such as listing, adding, editing, and deleting student
records.

The project is built using a modern **Laravel + Vue + Inertia.js**
stack, providing a smooth Single Page Application (SPA) experience.

------------------------------------------------------------------------

## Features

-   User authentication (Login system)
-   Student listing
-   Add new student
-   Edit student information
-   Delete student records
-   SPA experience using Inertia.js
-   Clean and simple interface

------------------------------------------------------------------------

## Technologies Used

-   **Backend:** Laravel
-   **Frontend:** Vue.js
-   **SPA Bridge:** Inertia.js
-   **Language:** PHP, JavaScript
-   **Database:** MySQL

------------------------------------------------------------------------

## Installation

Clone the repository

``` bash
git clone https://github.com/yourusername/student-registration-system.git
```

Go to the project directory

``` bash
cd student-registration-system
```

Install PHP dependencies

``` bash
composer install
```

Install frontend dependencies

``` bash
npm install
```

Create environment file

``` bash
cp .env.example .env
```

Generate application key

``` bash
php artisan key:generate
```

Run database migrations

``` bash
php artisan migrate
```

Compile frontend assets

``` bash
npm run dev
```

Start the development server

``` bash
php artisan serve
```

------------------------------------------------------------------------

## Usage

After starting the server, open your browser and visit:

    http://localhost:8000

Login to the system and navigate to:

    /students

From there, you can manage student records.

------------------------------------------------------------------------

## Proje Hakkında

Bu proje, öğrencilerin kayıtlarını yönetmek amacıyla geliştirilmiş
**basit bir Öğrenci Kayıt Sistemi**dir.

Kullanıcılar sisteme giriş yaptıktan sonra `/students` adresine giderek
öğrenci yönetim sayfasına ulaşabilirler. Bu sayfada öğrencileri
listeleyebilir, yeni öğrenci ekleyebilir, mevcut kayıtları
düzenleyebilir veya silebilirler.

Proje modern bir **Laravel + Vue + Inertia.js** yapısı kullanılarak
geliştirilmiştir ve kullanıcıya akıcı bir **Single Page Application
(SPA)** deneyimi sunar.

------------------------------------------------------------------------

## Özellikler

-   Kullanıcı giriş sistemi
-   Öğrenci listeleme
-   Yeni öğrenci ekleme
-   Öğrenci bilgilerini düzenleme
-   Öğrenci silme
-   Inertia.js ile SPA deneyimi
-   Basit ve temiz arayüz

------------------------------------------------------------------------

## Kullanılan Teknolojiler

-   **Backend:** Laravel
-   **Frontend:** Vue.js
-   **SPA Bağlantısı:** Inertia.js
-   **Programlama Dilleri:** PHP, JavaScript
-   **Veritabanı:** MySQL

------------------------------------------------------------------------

## Kurulum

Projeyi klonlayın

``` bash
git clone https://github.com/kullaniciadi/student-registration-system.git
```

Proje klasörüne gidin

``` bash
cd student-registration-system
```

PHP bağımlılıklarını yükleyin

``` bash
composer install
```

Frontend paketlerini yükleyin

``` bash
npm install
```

.env dosyasını oluşturun

``` bash
cp .env.example .env
```

Uygulama anahtarını oluşturun

``` bash
php artisan key:generate
```

Veritabanı tablolarını oluşturun

``` bash
php artisan migrate
```

Frontend dosyalarını derleyin

``` bash
npm run dev
```

Geliştirme sunucusunu başlatın

``` bash
php artisan serve
```

------------------------------------------------------------------------

## Kullanım

Sunucu çalıştıktan sonra tarayıcıdan aşağıdaki adresi açın:

    http://localhost:8000

Sisteme giriş yaptıktan sonra aşağıdaki adrese giderek öğrenci
yönetimini gerçekleştirebilirsiniz:

    /students
