<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Medical Services Project</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #8a2be2;
        background-image: url('M77.jpg');
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
    }
    .overlay {
        background-color: rgba(138, 43, 226, 0.7);
        padding: 20px;
    }
    .container {
        max-width: 800px;
        margin: 50px auto;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        text-align: center;
        padding: 20px;
    }
    h1 {
        font-size: 36px;
        color: #333;
        margin-bottom: 20px;
    }
    p {
        font-size: 18px;
        color: #555;
        margin-bottom: 30px;
    }
    .section {
        margin-bottom: 40px;
        padding: 0 20px;
        text-align: left;
    }
    .section h2 {
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
        text-transform: uppercase;
    }
    .section p {
        font-size: 16px;
        color: #555;
        line-height: 1.6;
    }
    .team-members ul {
        list-style-type: none;
        padding: 0;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .team-members li {
        font-size: 18px;
        color: #333;
        margin: 5px 10px;
    }
    .register-link a {
        color: #fff;
        text-decoration: none;
        background-color: #6c3082;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        display: inline-block;
    }
    .register-link a:hover {
        background-color: #5a2671;
    }
</style>
</head>
<body>
<div class="container">
    <div class="overlay">
        <h1>Welcome to the Medical Services Project</h1>
        <p>This website provides medical services to elderly people at their homes by booking appointments with doctors.</p>
    </div>
    <div class="section">
        <h2>About the Project</h2>
        <p>The goal of this project is to make healthcare more accessible and convenient for elderly people who may have difficulty visiting traditional healthcare facilities. By allowing them to book appointments with doctors who can visit their homes, we aim to improve their overall quality of life.</p>
    </div>
    <div class="section">
        <h2>Meet the Team</h2>
        <ul class="team-members">
            <li>Nawaf</li>
            <li>Ibrahim</li>
            <li>Abdulrahman</li>
        </ul>
    </div>
    <h1>It was developed by Muhammad</h1>
    <div class="register-link">
        <a href="register.php">Register Now</a>
    </div>
</div>
</body>
</html>
