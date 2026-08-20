<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jerome Zapata | Student Portal</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f7;
            margin: 0;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 70px auto;
            background: white;
            padding: 40px;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
            text-align: center;
        }

        h1 {
            margin-bottom: 10px;
        }

        p {
            color: #555;
        }

        .profile-button {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 25px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .profile-button:hover {
            background: #1d4ed8;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Welcome to My Student Portal</h1>

    <p>
        Welcome, <?= $name ?>!
    </p>

    <p>
        This page serves as the student home page.
    </p>

    <a class="profile-button"
       href="<?= site_url('student/profile'); ?>">
        View Student Profile
    </a>

</div>

</body>
</html>