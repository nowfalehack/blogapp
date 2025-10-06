# 📝 Laravel 10 Material Design Blog App

A full-stack **Laravel 10** web app that allows users to:

- Register and login using custom authentication
- Create, view, edit, and delete blog posts
- See all posts on a dashboard (only authors can edit/delete their posts)
- Access posts via API endpoint `/api/posts` in JSON format

---

## 🚀 Features

- 🔐 **User authentication** (Register / Login / Logout)  
- 📝 **CRUD operations** for blog posts (title and content)  
- 🛡️ **Author-based access control**  
- 📋 **Form validation** (`title`: required, min 3 characters; `content`: required)  
- 🎨 **Material Design UI** using MaterializeCSS  
- 🌐 **API endpoint** `/api/posts` returns all posts with author info  

---

## 🧰 Tech Stack

- PHP 8.2+  
- Laravel 10  
- MySQL / MariaDB  
- MaterializeCSS for UI  
- Composer (dependency manager)  
- Blade templates  
    

---

## 🛠️ Full Setup Instructions

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/your-username/blogapp.git
cd blogapp

2️⃣ Install PHP Dependencies
composer install

3️⃣ Create Environment File
cp .env.example .env

4️⃣ Configure Database in .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blogapp
DB_USERNAME=root
DB_PASSWORD=

5️⃣ Run Migrations
php artisan migrate

6️⃣ Serve the App
php artisan serve


Visit: http://127.0.0.1:8000



📤 Git Push Commands
git add .
git commit -m "Initial commit with Laravel  Blog App"
git remote add origin https://github.com/your-username/blogapp.git
git branch -M main
git push -u origin 


📽️ Demo Workflow
Watch the Demo video : Check the folder Demo video 

🙋 Author

Nowfal Nazar
GitHub: @nowfalehack
