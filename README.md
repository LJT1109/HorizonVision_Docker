
# Web Development Project for XR Navigation Platform
[英文版](README.md)[中文版](README_Chinese.md)

## Introduction

This repository contains the code for the web-based management platform for an XR (Extended Reality) navigation system. The web platform allows planners to manage multiple scenes, with each scene containing multiple navigation nodes. 

## Features

### Frontend

1. **Login Page**
   - User authentication.
   - User login/logout options.

2. **Dashboard**
   - Displays a list of available scenes.
   - User settings (optional).

3. **Scene Management Page**
   - Option to create a new scene.
   - Edit the name and description of existing scenes.
   - Delete scenes.
   - Navigate to the node management page for specific scenes.

4. **Node Management Page**
   - Create new nodes within specific scenes.
   - Edit the name and description of nodes.
   - Delete nodes.
   - Manage multimedia content related to nodes.
   - Drag and drop interface for node ordering.

5. **Multimedia Management**
   - Upload multimedia content like images, videos, and audio.
   - Edit or delete uploaded multimedia content.

6. **Preview Interface**
   - Preview the nodes and multimedia content for specific scenes.

### Backend

1. **Authentication API**
   - Handles user login and logout.
   - Manages user permissions.

2. **Scene Management API**
   - CRUD (Create, Read, Update, Delete) operations for scenes.

3. **Node Management API**
   - CRUD operations for nodes within specific scenes.

4. **Multimedia Management API**
   - Handles the uploading and deletion of multimedia content.
   - Retrieves a list of uploaded multimedia content.

5. **Database Synchronization**
   - Synchronizes changes made in the frontend with the MySQL database.

## Tech Stack

- Frontend: Vue.js
- Backend: Django (Python)
- Database: MySQL

## Deployment

The application is containerized using Docker, ensuring that it runs consistently across different environments.

## Getting Started

1. Clone this repository.
2. Navigate to the project directory.
3. Run `docker-compose up` to start the development server.
4. Open your web browser and go to `http://localhost:8000/`.

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.
