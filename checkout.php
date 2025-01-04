<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap');

    *{
        font-family: 'Protest Guerrilla', sans-serif;
    }
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    h2 {
      margin-top: 0;
      color:orange;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: #fff;
      color: black;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
    }
    input[type="submit"]:hover {
      background-color: orange;
      color: white;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Checkout</h2>
  <form action="checkout.php" method="POST">
    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone Number:</label>
    <input type="text" id="phone" name="phone" required>

    <label for="product">Select Memberships:</label>
    <select id="product" name="product" required>
      <option value="">Select Plans</option>
      <optgroup label="Memberships">
        <option value="Basic Membership">Basic Membership: $59.99/year </option>
        <option value="Standard Membership">Standard Membership: $119.98/year </option>
        <option value="Premium Membership">Premium Membership - $179.97/year</option>
      </optgroup>

</select>



    <label for="course">Courses:</label>
    <select id="course" name="course" required>
      <option value="">Select Courses</option>
      <option value="Cross-Fit Training">Cross-Fit Training - $59.99</option>
      <option value="Functionality Training">Functionality Training - $65</option>
      <option value="Strength Exercise">Strength Exercise - $59.99</option>
    </select>

    <input type="submit" value="Proceed to Checkout">
  </form>
</div>

</body>
</html>
