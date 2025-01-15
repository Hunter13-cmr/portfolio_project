
# Portfolio Overview

This repository serves as a comprehensive showcase of my development projects, emphasizing full-stack skills and attention to detail. Below are the primary components and detailed features of each project.

## Projects

### ChatApp

#### Overview
ChatApp is a real-time chat application that allows users to communicate seamlessly with one another. It is designed with user authentication, password recovery, and responsive UI, ensuring a smooth and secure experience. Built with PHP, MySQL, JavaScript, and CSS, ChatApp combines functionality and style.

#### Features
- **User Authentication:** Secure login and registration system.
- **Forgot Password:** Users can reset their passwords via email.
- **Real-Time Chat:** Instant messaging between users.
- **Responsive Design:** Optimized for both desktop and mobile devices.
- **Secure Data Handling:** All sensitive information, including passwords, is securely encrypted.

#### Key Files and Links
1. [Forgot Password Handler](https://github.com/Hunter13-cmr/portfolio_project/blob/main/ChatApp/forgot-password.php): Handles password reset requests.
2. [Login System](https://github.com/Hunter13-cmr/portfolio_project/blob/main/ChatApp/login.php): Manages user login with email and password validation.
3. [User Registration](https://github.com/Hunter13-cmr/portfolio_project/blob/main/ChatApp/register.php): Handles new user registrations.
4. [Password Reset](https://github.com/Hunter13-cmr/portfolio_project/blob/main/ChatApp/reset-password.php): Allows secure password resets.
5. [Chat Functionality](https://github.com/Hunter13-cmr/portfolio_project/blob/main/ChatApp/chat.php): Core real-time chat feature.
6. [Configuration](https://github.com/Hunter13-cmr/portfolio_project/blob/main/ChatApp/config.php): Database connection settings.
7. [JavaScript Files](https://github.com/Hunter13-cmr/portfolio_project/tree/main/ChatApp/javascript): Interactivity scripts.
8. [CSS Files](https://github.com/Hunter13-cmr/portfolio_project/tree/main/ChatApp/css): Styling resources.

#### Installation
1. **Clone the Repository:**
   ```bash
   git clone https://github.com/Hunter13-cmr/portfolio_project.git
   ```
2. **Navigate to the ChatApp Directory:**
   ```bash
   cd portfolio_project/ChatApp
   ```
3. **Set Up the Database:**
   - Create a MySQL database.
   - Import the provided SQL files (`chatapp.sql` and `subscriptions.sql`) to set up the necessary tables.
4. **Update Configuration:**
   - Modify the database connection details in `config.php`.
5. **Run Locally:**
   - Use a local server environment like XAMPP or WAMP.
   - Place the project folder in the server’s root directory (e.g., `htdocs`).
   - Access the app at `http://localhost/ChatApp`.

#### Deployment
Deploy the ChatApp to a live server or hosting platform:
1. Use **Netlify** or **GitHub Pages** for static files (CSS, JavaScript).
2. Deploy the PHP backend on platforms like **Heroku**, **Vercel**, or **cPanel**.
3. Update configurations to connect to the live database.

---

### Portfolio Website

#### Overview
This project highlights a personal portfolio website with sections for an introduction, personal background, projects, and a contact form. It incorporates ChatApp as one of its primary features.

#### Features
- **Home Page:** Engaging introduction with a professional design.
- **About Section:** Detailed information about personal and professional background.
- **Projects Showcase:** Highlighting completed works with descriptions.
- **Contact Form:** Allows visitors to send inquiries using PHPMailer for email functionality.

#### Technologies Used
- HTML
- CSS
- JavaScript
- PHP
- MySQL
- PHPMailer

#### Deployment
- Frontend deployed via Netlify.
- Email functionality configured using PHPMailer with secure SMTP settings.

#### Repository Link
- [Portfolio Project Repository](https://github.com/Hunter13-cmr/portfolio_project)

---

### PHPMailer Integration

#### Overview
PHPMailer is used to enable secure and reliable email functionality for the contact form and password recovery system.

#### Setup
1. Install PHPMailer:
   ```bash
   composer require phpmailer/phpmailer
   ```
2. Configure SMTP settings in `mailer.php`:
   ```php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   require 'vendor/autoload.php';

   $mail = new PHPMailer(true);
   $mail->isSMTP();
   $mail->Host = 'smtp.example.com';
   $mail->SMTPAuth = true;
   $mail->Username = 'your_email@example.com';
   $mail->Password = 'your_app_password';
   $mail->SMTPSecure = 'tls';
   $mail->Port = 587;
   ```
### LEARN MORE ABOUT PHPMAILER
- [PHPMailer Documentation](https://github.com/PHPMailer/PHPMailer)

3. Use the configured file for email functionalities.

---

### Quality Standards

#### Code Quality
- Clean and well-documented code.
- Adherence to secure coding practices.
- Modular and reusable components.

#### Version Control
- Frequent commits with descriptive messages.
- Use of feature branches for isolated development.
- Pull requests with code reviews.

---

### Good Use of Version Control
To ensure high-quality version control practices, we have followed these best practices:

- **Frequent Commits:** Changes are committed **as often as possible** to keep track of development progress.
- **Descriptive Commit Messages:** Each commit includes a **clear and professional message** describing the changes made.
- **Branching Strategy:** Development is done using **feature branches** to separate different functionalities before merging into the main branch.
- **Pull Requests:** All changes go through a **pull request and code review process** before merging.

---

## Contact
For inquiries, feedback, or collaboration opportunities, please reach out via GitHub Issues or the contact form in the portfolio project.

---

## License
This repository is licensed under the [MIT License](https://opensource.org/licenses/MIT).
