# QuickPOS Deployment Guide

## Prerequisites
- PHP 7.4 or higher
- Apache Server (XAMPP/MAMP) or PHP Built-in Server

## Localhost Deployment
1. Open a terminal in the project root.
2. Run the command: `php -S localhost:8000`
3. Open browser to: `http://localhost:8000`

## Production Deployment
1. Upload all files to `public_html`.
2. Ensure `backend/` directory has write permissions.
3. Verify `.htaccess` is active for security.