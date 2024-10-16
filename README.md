# Staff Management System 

[Project Link](https://github.com/CherukuriRoopaChowdary/Staff-Management-System)

## Project Description
The Staff Management System is a platform developed using Node.js and REST APIs, streamlining the scheduling process for dining staff. The system automates staff assignment, reducing manual scheduling efforts and conflicts. Deployed on AWS with Docker and Elastic Beanstalk, it ensures high availability and reliable performance through auto-scaling and load balancing. It also incorporates a secure MySQL database via AWS RDS, protecting user profiles through OAuth2 and role-based access control.

## Installation
1. Clone the repository:
    ```bash
    git clone https://github.com/CherukuriRoopaChowdary/Staff-Management-System.git
    ```
2. Move the project files to the XAMPP `htdocs/Staff-Management-System/` directory.
3. Start Node.js server and ensure MySQL is running.

## Usage
1. Access the Manager view:
    ```
    http://localhost/Staff-Management-System/frontend/pages/
    ```
2. Access the Staff login:
    ```
    http://localhost/Staff-Management-System/frontend/pages/stafflogin
    ```

## Features
- User authentication and role-based access control.
- Automated shift assignment based on availability and staff skills.
- Task and shift management with the ability to request shift changes.
- Staff management: add, edit, or delete employee records.
- Real-time announcements via email.