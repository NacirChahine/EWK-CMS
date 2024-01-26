# EWK CMS (Ebreh W Kheit Content Management System)

Welcome to EWK CMS, a content management system for a sewing business developed using Yii2 framework.

## Getting Started

These instructions will help you set up the project on your local machine.

### Prerequisites

Make sure you have the following software installed:

- PHP (>=7.4)
- Composer
- XAMPP or any other PHP development environment

### Installation

1. Clone the repository to your local machine:

   ```bash
      git clone https://github.com/NacirChahine/EWK-CMS.git
   ```
2. Navigate to the project directory:
   ```bash
   cd ewk-cms
   ```
3. Install dependencies:
   ```bash
   composer install
   ```
4. Create a MySQL database for the project.
5. Open config/db.php and update the database connection settings with your MySQL credentials.
6. Run database migrations:
   ```bash
   php yii migrate
   ```
7. Start the development server:
   ```bash
   php yii serve
   ```

Access the application at http://localhost:8080 in your browser.

### Features
Clients: Manage registered clients.
Services: Add and edit available services.
Orders: Create and track customer orders.
Staffs: Manage staff members with order percentages.
Dashboard: View quick statistics about the system.

### Contributing
Feel free to contribute to the project by opening issues or submitting pull requests.