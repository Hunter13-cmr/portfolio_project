# ChatApp

## Overview
ChatApp is a real-time chat application that allows users to communicate seamlessly with one another. It is designed with user authentication, password recovery, and responsive UI, ensuring a smooth and secure experience. Built with PHP, MySQL, JavaScript, and CSS, ChatApp combines functionality and style.

## Features
- **User Authentication:** Secure login and registration system.
- **Forgot Password:** Users can reset their passwords via email.
- **Real-Time Chat:** Instant messaging between users.
- **Responsive Design:** Optimized for both desktop and mobile devices.
- **Secure Data Handling:** All sensitive information, including passwords, is securely encrypted.

## Project Structure
Here is an overview of the key files and their functionalities:

### Files:
1. **[forgot-password.php](https://github.com/Hunter13-cmr/portfolio_project/blob/main/ChatApp/forgot-password.php):**
   Handles password reset requests, including generating and verifying reset tokens.

2. **[login.php](https://github.com/Hunter13-cmr/portfolio_project/blob/main/ChatApp/login.php):**
   Manages user login with email and password validation.

3. **[register.php](https://github.com/Hunter13-cmr/portfolio_project/blob/main/ChatApp/index.php):**
   Handles new user registrations, ensuring secure input handling and validation.

4. **[reset-password.php](https://github.com/Hunter13-cmr/portfolio_project/blob/main/ChatApp/reset-password.php):**
   Allows users to securely reset their password using a valid reset token.

5. **[chat.php](https://github.com/Hunter13-cmr/portfolio_project/blob/main/ChatApp/chat.php):**
   The core chat functionality, enabling users to send and receive real-time messages.

6. **[config.php](https://github.com/Hunter13-cmr/portfolio_project/blob/main/ChatApp/config.php):**
   Contains database connection settings and application constants.

7. **[javascript/](https://github.com/Hunter13-cmr/portfolio_project/tree/main/ChatApp/javascript):**
   Contains JavaScript files for interactivity, such as toggling password visibility and handling form validations.

8. **[css/](https://github.com/Hunter13-cmr/portfolio_project/tree/main/ChatApp/css):**
   Includes CSS files for styling the application.

## Installation
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
   - Import the provided SQL file (`chatapp.sql`) to set up the necessary tables.

4. **Update Configuration:**
   - Modify the database connection details in `config.php`.

5. **Run Locally:**
   - Use a local server environment like XAMPP or WAMP.
   - Place the project folder in the server’s root directory (e.g., `htdocs`).
   - Access the app at `http://localhost/ChatApp`.

## Deployment
Deploy the ChatApp to a live server or hosting platform:
1. Use **Netlify** or **GitHub Pages** for static files (CSS, JavaScript).
2. Deploy the PHP backend on platforms like **Heroku**, **Vercel**, or **cPanel**.
3. Update configurations to connect to the live database.

## Contributing
Contributions are welcome! To contribute:
1. Fork the repository.
2. Create a new branch: `git checkout -b feature/YourFeature`.
3. Commit changes: `git commit -m 'Add feature'`.
4. Push to your branch: `git push origin feature/YourFeature`.
5. Open a pull request.

## License
This project is licensed under the [MIT License](LICENSE).

## Contact
For feedback or inquiries, please reach out via GitHub Issues or through the repository contact details.

---

