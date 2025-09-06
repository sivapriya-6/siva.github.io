<?php include("head2.html"); ?>
<body>

<div class="register">
    <form action="connect.php" method="post">

        <h2 style="text-align:center; color:#FF6600;">KTM Business Management Registration</h2>

        <label for="name">Full Name</label><br>
        <input type="text" name="n" id="name" size="40" placeholder="Enter your full name" required /><br><br>

        <label for="age">Age</label><br>
        <input type="number" name="a" id="age" required /><br><br>

        <label for="dob">Date of Birth</label><br>
        <input type="date" name="d" id="dob" required /><br><br>

        <label>Gender</label><br>
        <input type="radio" name="g" value="male" id="male" required />
        <label for="male">Male</label>
        <input type="radio" name="g" value="female" id="female" />
        <label for="female">Female</label><br><br>

        <label for="email">Email Address</label><br>
        <input type="email" name="e" id="email" size="40" placeholder="Enter your email" required /><br><br>

        <label for="pwd">Password</label><br>
        <input type="password" name="p" id="pwd" minlength="4" maxlength="8" placeholder="4-8 characters" required /><br><br>

        <label for="dept">Business Domain</label><br>
        <select name="s" id="dept" required>
            <option value="">-- Select Domain --</option>
            <option value="marketing">Marketing</option>
            <option value="sales">Sales</option>
            <option value="service">Customer Service</option>
            <option value="management">Dealership Management</option>
        </select>
        <br><br>

        <input type="submit" value="Register" />
        <input type="reset" value="Reset" />
    </form>
</div>

</body>
<?php include("footer1.html"); ?>
