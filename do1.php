<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Information</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-transform: capitalize;
            transition: all .2s linear;
        }

        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: relative;
        }

        .video-bg {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 25px;
            min-height: 100vh;
            background-color: rgba(255, 255, 255, 0.8); /* Adjust background opacity */
        }

        /* Rest of your CSS styles... */

    </style>
</head>
<body>

<div class="container">
    <video autoplay loop muted plays-inline class="video-bg">
        <source src="spotter.mp4" type="video/mp4">
    </video>

    <form action="" method="post">
        <!-- Your form content goes here, as per your previous code -->
    </form>
</div>

</body>
</html>
In this updated code:

The video is placed within the .container div, making it the background of the form container.

The video is set to cover the entire form container by using CSS properties.

Now, the video will be in the background of your form. You can place your form elements within the <form> tag as per your previous code.






