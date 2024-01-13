

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
        .nav-links a {
            color:#fff;
            text-decoration:none;
            margin:0px 4px;
        }
        
        .nav-links a:hover{
            color: green;
            text-decoration:underline !important;
        }

    </style>
</head>
<body>

    <header>
        <h1><?php echo "$site_title"; ?></h1>
        <div class="nav-links">
            <a href="<?php echo "$site_url".'index.php'; ?>">Home</a>
            <a href="<?php echo "$site_url".'about.php'; ?>">About</a>
            <a href="<?php echo "$site_url".'contact.php'; ?>">Contact</a>
        </div>
    </header>
    
 