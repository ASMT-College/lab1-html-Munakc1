<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google</title>
    <style>
        /* Basic reset and centering */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 1rem;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            padding: 2rem;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
        }

        input[type="text"] {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            outline: none;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        input[type="submit"] {
            padding: 0.8rem 2rem;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="www.google.com/search" method="get">
        <!-- Displaying the Google logo -->
        <img src="data:image/webp;base64,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" alt="Google Logo">

        <!-- Search bar -->
        <input type="text" name="q" placeholder="Search Google or type a URL" required>
        
        <!-- Submit button -->
        <input type="submit">
    <!--me -->
   

    </form>
</body>
</html>
