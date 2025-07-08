# 🧠 Humber Vibe Coding Challenge – Assignment 1

This project showcases registered students for the Vibe Coding Challenge at Humber using PHP, MySQL, and CSS.

## 📁 Project Structure

- `index.php` – Displays participant cards with data from MySQL
- `connect.php` – Database connection file
- `style.css` – Responsive card layout styling
- `images/` – Folder for profile pictures
- `README.md` – Project details and instructions

## 🛠 Database Setup

1. Create a MySQL database: `assignment1`
2. Create a table: `vibe_coding`

```sql
CREATE TABLE vibe_coding (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(100),
  program VARCHAR(100),
  github_username VARCHAR(100),
  photo_url VARCHAR(255),
  registered_at DATE
);