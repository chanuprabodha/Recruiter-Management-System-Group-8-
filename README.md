# Recruitment Management System

A **Recruitment Management System** is a web-based platform designed to connect job seekers with recruiters, helping streamline the hiring process. It allows recruiters to post job listings, manage candidates, and enables candidates to easily find and apply for job opportunities.

## Table of Contents
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
  - [Recruiter](#recruiter)
  - [Candidate](#candidate)
- [Folder Structure](#folder-structure)
- [License](#license)

## Features
- **Responsive Design**: Fully responsive across different devices and screen sizes.
- **User Roles**:
  - **Recruiters** can register, post job listings, and manage candidate applications.
  - **Candidates** can sign up, search for jobs, and apply for listings.
- **How to Register**: A guided page for new users (recruiters/candidates) to register on the platform.
- **Learn More**: A detailed page providing an overview of the platform's features.
- **UI/UX**: Sleek design with gradient headers, hover animations, and modern buttons for a smooth user experience.

## Technologies Used
- **Frontend**:
  - HTML5
  - CSS3 (with hover animations and transitions)
  - JavaScript
- **Backend**:
  - PHP (handles user interactions and backend processing)
  - MySQL (for storing users and job data, if a database is set up)
- **Version Control**:
  - Git (for tracking changes and versioning)

## Getting Started

### Prerequisites
Before you begin, ensure you have met the following requirements:
- PHP version 7.3+ installed on your machine
- A web server like Apache or Nginx
- (Optional) MySQL for database functionality (if implementing backend data storage)

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/recruitment-management-system.git
   cd recruitment-management-system
   ```

2. **Set up a local server**:
   - If using **XAMPP** or **MAMP**, move the project to the `htdocs` folder (XAMPP) or equivalent.

3. **Start the local server**:
   - For XAMPP: Run `apache` and `mysql` services.

4. **Open the project**:
   Open your browser and go to:
   ```url
   http://localhost/recruitment-management-system/index.php
   ```

5. **(Optional) Configure MySQL**:
   If you're implementing a backend database:
   - Set up a MySQL database and create tables for users (candidates, recruiters) and job listings.
   - Update your PHP files to connect to the database.

## Usage

### Recruiter
- **Sign Up**: Recruiters can sign up on the **Recruiter Sign Up** page by providing their company information.
- **Post Jobs**: Once signed up, recruiters can post job listings and manage candidates who apply.

### Candidate
- **Sign Up**: Candidates can sign up on the **Candidate Sign Up** page.
- **Apply for Jobs**: Candidates can search through available job listings and apply for jobs.

## Folder Structure

```
recruitment-management-system/
├── css/
│   └── styles.css         # Main CSS file
├── img/
│   └── logo.png           # Images used in the project
├── js/
│   └── main.js            # Main JavaScript file
├── how_to_register.php     # How to Register page
├── about_us.php            # Learn More page
├── recruiter_register.php  # Recruiter registration page
├── candidate_register.php  # Candidate registration page
├── index.php               # Main homepage (hero section)
└── README.md               # Documentation
```

## License
This project is open source and available under the [MIT License]
