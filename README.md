# Mock Law Firm Dynamic Website

## Overview
MockLawFirm-DynamicWebsite is a comprehensive web application designed to simulate the functionalities of a dynamic law firm website.

## Features
- **Dynamic Attorney Profiles**: Showcase detailed profiles of attorneys, including their expertise, achievements, and contact details.
- **Appointment Booking System**: Allows clients to book appointments with specific attorneys based on their availability.
- **Feedback System**: Clients can provide feedback, ensuring continuous improvement in services.
- **Admin Dashboard**: A robust admin panel to manage appointments, attorney profiles, and client feedback.
- **Responsive Design**: The website is designed to be mobile-friendly, ensuring a seamless experience across devices.
- **Gallery**: Display images from past events, office premises, or any other relevant content.
- **Contact Form**: Clients can easily get in touch through a built-in contact form.
- **Testimonials**: Showcase reviews and testimonials from satisfied clients.
- **FAQ Section**: Address common queries and concerns of clients.

## Program Functionality
- **Client Interface**: Allows clients to view attorney profiles, book appointments, and send feedback.
- **Admin Interface**: Enables administrators to manage attorney profiles, view appointments, and handle feedback.
- **Dynamic Content**: The website adjusts its content based on the database, ensuring up-to-date information is always presented.

## Software Setup
1. **Clone the Repository**: 
   ```
   git clone https://github.com/saisanwariya/MockLawFirm-DynamicWebsite.git
   ```
2. **Database Setup**: Import the `psl.sql` file into your MySQL database to set up the required tables and initial data.
3. **Configuration**: Navigate to the `psl/admin/config.php` file and adjust the database connection parameters to match your setup.
4. **Dependencies**: Ensure you have PHP and MySQL installed on your server.

## Running the Program
1. Start your local server (e.g., XAMPP, WAMP, or MAMP).
2. Navigate to the root directory of the cloned repository in your browser.
3. Explore the website! For admin functionalities, navigate to the `admin` directory.

## Notes
- Ensure your server is configured to handle PHP sessions as they are essential for the admin functionalities.
- Regularly backup your database to prevent data loss.
- For security reasons, it's recommended to change the default admin credentials after the initial setup.

---

**Copyright © 2023 Sai Sanwariya Narayan. All rights reserved.**

**Warning**: Unauthorized copying, modification, distribution, or performance of this software, and the resultant output, is prohibited. Legal actions will be taken against those found in violation of this copyright.
