<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f5; /* Light background */
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #b2d8d8; /* Light blue background */
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border: 4px solid #ff9999; /* Pink border */
        }

        h1 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
        }

        .gender-group, .course-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .gender-group label,
        .course-group label {
            margin-right: 10px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        .register-btn {
            background-color: #28a745; /* Green background */
            color: white;
            padding: 15px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        .register-btn:hover {
            background-color: #218838; /* Darker green on hover */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Student Registration Form</h1>

    <form action="submit_form.php" method="POST">
        <!-- Name -->
        <label for="firstname">Firstname</label>
        <input type="text" id="name" name="name" placeholder="name" required>

        <!-- Reg. number-->
        <label for="regno">Reg number</label>
        <input type="text" id="regno" name="regno" placeholder="Registration number" required>

        <!-- Course -->
        <div class="course-group">
            <label for="course">Course:</label>
            <select id="course" name="course" required>
                <option value="">Course</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Engineering">Engineering</option>
            </select>
        </div>

        <!-- Gender -->
        <div class="gender-group">
            <label>Gender:</label>
            <label><input type="radio" name="gender" value="Male" required> Male</label>
            <label><input type="radio" name="gender" value="Female" required> Female</label>
            <label><input type="radio" name="gender" value="Other" required> Other</label>
        </div>

        <!-- Phone -->
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" placeholder="+91" required>

        <!-- Current Address -->
        <label for="address">Current Address:</label>
        <textarea id="address" name="address" rows="4" placeholder="Current Address" required></textarea>

        <!-- Email -->
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter Email" required>

        <!-- Password -->
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required>

        <!-- Register Button -->
        <input type="submit" value="Register" class="register-btn">
    </form>
</div>

</body>
</html>
