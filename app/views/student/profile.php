<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Jerome Zapata | Student Profile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f7;
            margin: 0;
            padding: 0;
        }

        .profile-card {
            width: 80%;
            max-width: 700px;
            margin: 50px auto;
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.12);
        }

        h1 {
            text-align: center;
            color: #222;
            margin-bottom: 30px;
        }

        .info {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            color: #444;
        }

        .label {
            font-weight: bold;
            color: #222;
        }

        nav {
            text-align: center;
            margin-top: 30px;
        }

        nav a {
            display: inline-block;
            padding: 12px 20px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 8px;
        }

        nav a:hover {
            background: #1d4ed8;
        }
    </style>
</head>

<body>

<div class="profile-card">

    <h1>Student Profile</h1>

    <div class="info">
        <span class="label">Student ID:</span>
        <?= $student_id ?>
    </div>

    <div class="info">
        <span class="label">Name:</span>
        <?= $name ?>
    </div>

    <div class="info">
        <span class="label">Course:</span>
        <?= $course ?>
    </div>

    <div class="info">
        <span class="label">Year Level:</span>
        <?= $year_level ?>
    </div>

    <div class="info">
        <span class="label">Section:</span>
        <?= $section ?>
    </div>

    <div class="info">
        <span class="label">Email:</span>
        <?= $email ?>
    </div>

    <div class="info">
    <span class="label">Skills:</span>
    <?= $skills ?>
</div>

<div class="info">
    <span class="label">Hobbies:</span>
    <?= $hobbies ?>
</div>

    <nav>
        <a href="<?= site_url('student'); ?>">
            ← Back to Student Home
        </a>
    </nav>

</div>

</body>
</html>