<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Terms and Conditions</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        /* Stylish Checkbox */
        .styled-checkbox {
            display: inline-block;
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            cursor: pointer;
        }

        .styled-checkbox input[type="checkbox"] {
            opacity: 0;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #eee;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        .styled-checkbox input[type="checkbox"]:checked + .checkmark:after {
            content: "\2713";
            font-size: 16px;
            color: #007bff;
            position: absolute;
            top: 1px;
            left: 5px;
        }

        /* Fetchers Content Styling */
        .fetchers-container {
            margin-top: 20px;
            padding: 20px;
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .fetchers-heading {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .fetchers-list {
            list-style: none;
            padding: 0;
        }

        .fetchers-list-item {
            font-size: 18px;
            margin-bottom: 10px;
        }

        /* Proceed Button */
        .proceed-button {
            display: block;
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
        }

        .proceed-button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Terms and Conditions</h1>
        <div class="styled-checkbox">
            <input type="checkbox" id="agreeCheckbox" required>
            <label for="agreeCheckbox">I have read and agree to the terms and conditions below.</label>
            <div class="checkmark"></div>
        </div>

        <div class="fetchers-container">
            <h2 class="fetchers-heading">Fetchers Content</h2>
            <ul class="fetchers-list">
                <li class="fetchers-list-item">Placeholder Fetchers Item 1</li>
                <li class="fetchers-list-item">Placeholder Fetchers Item 2</li>
                <li class="fetchers-list-item">Placeholder Fetchers Item 3</li>
                <!-- Add more fetchers items as needed -->
            </ul>
        </div>

        <a href="application.html" class="proceed-button" id="proceedButton" disabled>Proceed to Application</a>
    </div>

    <script>
        // Enable the "Proceed" button when the checkbox is checked
        const agreeCheckbox = document.getElementById('agreeCheckbox');
        const proceedButton = document.getElementById('proceedButton');

        agreeCheckbox.addEventListener('change', () => {
            proceedButton.disabled = !agreeCheckbox.checked;
        });
    </script>
</body>
</html>
