# Take-Home Assignment: Junior WordPress Developer
Live Site Preview:- https://mrsnyderhard.github.io/wordpress/
## Assignment Overview
This repository contains my submission for the Junior WordPress Developer take-home assignment. Below are the instructions, setup details, and explanations for each part of the task.

---

## Part 1: WordPress Setup and Customization

### 1. Setting up WordPress
- **Tools Used**: XAMPP for local WordPress installation.
- **Steps to Install WordPress Locally**:
  1. Download and install [XAMPP](https://www.apachefriends.org/).
  2. Start the Apache and MySQL modules from the XAMPP Control Panel.
  3. Download the latest version of WordPress from [wordpress.org](https://wordpress.org/).
  4. Extract WordPress files into the `htdocs` directory of XAMPP.
  5. Open phpMyAdmin (`http://localhost/phpmyadmin`) and create a new database.
  6. Visit `http://localhost/wordpress` in your browser to complete the WordPress setup wizard.

### 2. Customizing the Home Page
- **Page Builder Used**: Oxygen Builder (or a free alternative like Elementor).
- **Design Features**:
  1. **Hero Section**:
     - Displays the firm's name: *Law Solutions LLP*.
     - Tagline: *"Your Trusted Legal Partners."*
     - Call-to-action button: *"Schedule a Consultation"* linked to the appointment booking form.
  2. **Key Services Section**:
     - Highlighted services: Legal Advice, Case Management, Court Representation.
  3. **Testimonial Slider**:
     - Includes 3 sample reviews with a smooth sliding effect.
  4. **Contact Form**:
     - Fields: Name, Email, Phone Number, Message.
     - Submitted data stored in the database.

### 3. Responsive Design
- Ensured the website is fully responsive using:
  - CSS media queries.
  - Built-in responsive settings of the page builder.
  - Testing on multiple screen sizes (desktop, tablet, and mobile).

---

## Part 2: Integration of Advanced Features

### 1. Form Integration
- **Newsletter Subscription**:
  - Integrated Mailchimp using a free plugin like *MC4WP: Mailchimp for WordPress*.
  - Configured the form to collect Name and Email.

### 2. Appointment Booking
- **Plugin Used**: *WP Simple Booking Calendar* or an equivalent free plugin.
- **Setup Details**:
  - Configured a service named *Legal Consultation*.
  - Time slots available: Monday to Friday, 10 AM - 5 PM.
  - Booking confirmations sent via email.

---

## Part 3: Database and Server Management

### 1. Database Optimization
- **Table Created**: `client_leads`.
  - **Columns**:
    - `id` (Primary Key, Auto Increment)
    - `name` (VARCHAR)
    - `email` (VARCHAR)
    - `phone` (VARCHAR)
    - `message` (TEXT)
  - **Sample Data Inserted**:

    ```sql
    INSERT INTO client_leads (name, email, phone, message) VALUES
    ('John Doe', 'john@example.com', '1234567890', 'Looking for more details.'),
    ('Jane Smith', 'jane@example.com', '9876543210', 'Interested in your services.');
    ```

- **PHP Script to Retrieve Data**:

    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "your_database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM client_leads";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . " - Phone: " . $row["phone"] . " - Message: " . $row["message"] . "<br>";
        }
    } else {
        echo "No results found.";
    }

    $conn->close();
    ?>
    ```

### 2. Server Knowledge
- **Steps to Move the Site to a Live Server**:
  1. **Backup the Local Site**:
     - Export the database via phpMyAdmin.
     - Copy all WordPress files.
  2. **Set Up the Live Server**:
     - Create a new database on the server.
     - Import the local database backup.
     - Upload WordPress files to the `public_html` directory via FTP or cPanel.
  3. **Update `wp-config.php`**:
     - Modify database credentials to match the live server.
  4. **Update Site URLs**:
     - Use phpMyAdmin to update the `siteurl` and `home` fields in the `wp_options` table.
  5. **Test the Site**:
     - Verify functionality and fix broken links using a search-and-replace plugin if necessary.

---

## Bonus Points
- Custom CSS and JavaScript were used to enhance design and responsiveness.
- Configured Yoast SEO for the homepage to improve search engine visibility.
- Created reusable components within the page builder for efficient design updates.

---

## How to Replicate Locally

1. Clone this repository:
   ```bash
   git clone https://github.com/MrSnyderhard/wordpress/
   ```
2. Set up a local WordPress environment (see Part 1 for detailed steps).
3. Import the database from the `backup.sql` file included in this repository.
4. Place the repository contents in the WordPress `wp-content/themes` folder.
5. Activate the theme from the WordPress admin dashboard.

---

## Submission Details
- **GitHub Repository**: https://github.com/MrSnyderhard/wordpress/
- Ensure all instructions in this README are followed for a seamless setup.
