

# User Matching Program

## Overview

This program is designed to match users with each other for meetings. The purpose is to facilitate connections and networking opportunities among users. Whether for professional networking, socializing, or collaborative projects, this program helps users find suitable matches based on their preferences and interests.

## Features

- **User Registration**: Users can create profiles with their details and preferences.
- **Matchmaking Algorithm**: The program uses an algorithm to match users based on compatibility.
- **Messaging System**: Users can communicate with their matches through an integrated messaging system.
- **Meeting Scheduler**: A built-in scheduler helps users arrange and manage their meetings.
- **Profile Management**: Users can update their profiles and preferences at any time.

## Getting Started

### Prerequisites

- PHP 7.4 or higher
- MySQL
- Composer

### Installation

1. **Clone the repository:**

    ```sh
    git clone github.com/joshdei/finder.git
    cd finder
    ```

2. **Install dependencies:**

    ```sh
    composer install
    ```

3. **Set up the database:**

    - Create a MySQL database for the program.
    - Import the provided `database.sql` file to set up the necessary tables.

4. **Configure the application:**

    - Rename `.env.example` to `.env`.
    - Update the `.env` file with your database credentials and other configuration settings.

5. **Run the application:**

    ```sh
    php artisan serve
    ```

    The application will be accessible at `http://localhost:8000`.

## Usage

1. **Register an Account:**
   - Visit the registration page and create a user profile with your details and preferences.

2. **Find Matches:**
   - Use the matchmaking feature to find other users who match your preferences.

3. **Communicate:**
   - Send and receive messages with your matches through the integrated messaging system.

4. **Schedule Meetings:**
   - Use the meeting scheduler to arrange and manage meetings with your matches.

## Contributing

We welcome contributions from the community! If you'd like to contribute, please fork the repository and submit a pull request.

## License

This project is licensed under the MIT License. See the `LICENSE` file for more details.

## Contact

For any questions or issues, please contact:

- Name: Joshua Deinne
- Email: joshuadeinne@gmail.com


