# PHP Forum

A feature-rich web forum built with PHP, MySQL, and Bootstrap. Users can register, log in, create threads, and participate in discussions.

---

## 📦 Features

- User registration and login system
- Create and view discussion threads
- Post replies to threads
- Category-based thread organization
- Bootstrap 5 responsive UI
- Modular code using PHP includes
- Secure password handling

---

## 🚀 Getting Started

### Prerequisites

- PHP >= 7.4
- MySQL Server
- Apache or Nginx (or Laragon/XAMPP)
- Git (for cloning the repository)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/imranashrafai/forum.git
   cd forum
   ```

2. **Create a MySQL Database**
   - Name it e.g., `php_forum`
   - Import the SQL schema (if provided)

3. **Configure the database connection**
   - Open `partials/_dbconnect.php`
   - Set your database host, username, password, and database name

4. **Run the application**
   - Place the folder in your web server’s root directory (`htdocs` for XAMPP or `www` for Laragon)
   - Access via browser:
     ```
     http://localhost/forum/
     ```

---

## 🧩 Project Structure

```
/
├── assets/
│   ├── css/
│   ├── js/
│   └── bootstrap-5.2.2/
├── partials/
│   ├── _dbconnect.php
│   ├── _header.php
│   ├── _footer.php
│   ├── _loginModal.php
│   ├── _signUp.php
│   └── images/
├── index.php
├── thread.php
├── threadlist.php
└── README.md
```

---

## 💡 Usage

- Register a new user account
- Log in to access full forum functionality
- Select a category and view or create threads
- Post replies to existing threads
- Log out securely when finished

---

## 🔐 Security Features

- Passwords stored using `password_hash()`
- Basic input sanitization via `mysqli_real_escape_string()`
- PHP sessions for user authentication

---

## 🚧 Future Improvements

- Edit/delete functionality for posts and threads
- Admin dashboard for managing users and content
- Rich-text editor integration
- Advanced security using prepared statements and CSRF tokens
- Email verification during registration

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).

---

## 👥 Author

**Imran Ashraf**  
[GitHub Profile](https://github.com/imranashrafai)

---

## 🙏 Acknowledgments

- [Bootstrap 5](https://getbootstrap.com/)
- PHP & MySQL Community Resources
