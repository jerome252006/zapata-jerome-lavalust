<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle($next)
    {
         echo "StudentMiddleware is running!";
    exit;

    if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {

            echo '<!DOCTYPE html>';
            echo '<html lang="en">';
            echo '<head>';
            echo '<meta charset="UTF-8">';
            echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
            echo '<title>Unauthorized Access</title>';

            echo '<style>';

            echo 'body {
                margin: 0;
                font-family: Arial, sans-serif;
                background: #eef2f7;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }';

            echo '.warning-card {
                width: 90%;
                max-width: 500px;
                background: white;
                padding: 40px;
                text-align: center;
                border-radius: 18px;
                box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            }';

            echo '.icon {
                font-size: 60px;
                margin-bottom: 15px;
            }';

            echo 'h1 {
                color: #dc2626;
                margin-bottom: 10px;
            }';

            echo '.message {
                color: #555;
                line-height: 1.6;
            }';

            echo '.status {
                margin: 20px 0;
                padding: 12px;
                background: #fee2e2;
                color: #991b1b;
                border-radius: 8px;
                font-weight: bold;
            }';

            echo '.back-button {
                display: inline-block;
                margin-top: 10px;
                padding: 12px 25px;
                background: #2563eb;
                color: white;
                text-decoration: none;
                border-radius: 8px;
                font-weight: bold;
            }';

            echo '.back-button:hover {
                background: #1d4ed8;
            }';

            echo '</style>';
            echo '</head>';

            echo '<body>';

            echo '<div class="warning-card">';

            echo '<div class="icon">🔒</div>';

            echo '<h1>Unauthorized Access</h1>';

            echo '<p class="message">
                Access denied. You are not authorized to view the
                Student Profile page.
            </p>';

            echo '<div class="status">
                Access Status: DENIED<br>
                student_access = false
            </div>';

            echo '<a class="back-button"
                href="' . site_url('student') . '">
                ← Back to Student Home
            </a>';

            echo '</div>';

            echo '</body>';
            echo '</html>';

            exit;
        }

        return $next();
    }
}