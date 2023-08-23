<?php

if($_POST["message"]) {
    mail("toniasmith528@gmail.com", "Here is the subject line",
    $_POST["Thank you for filling the form!"]. "From: alexandraoshili@gmail.com");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T.A.W registration form </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <h1>
        <p> T.A.W. REGISTRATION FORM </p>
    </h1>
    <p>
    <h2> Welcome to the Tonia Alexis World <b> (T.A.W.) recruitment portal! </b> <br>
    </h2>
    </p>
    <h3> Estimated time: <b> 3-5 minutes.</b> <br>
        <br>
        Your time is very important and we want to provide you with the best opportunity to introduce yourself.
    </h3>
    <h4> Input your details </h4>


    <form method="POST" action="/submit-form.php" class="form-example">
        <div class="form-example">
            <label class="details" for="name"> First Name : </label>
            <input class="details" type="text" name="First Name" id="name" required> <button> Save </button>
        </div> <br>
        <div class="form-example">
            <label class="details" for="name"> Last Name : </label>
            <input class="details" type="text" id="name" required> <button> Save </button>
        </div><br>
        <div class="form-example">
            <label class="details" for="name"> Email : </label>
            <input class="details" type="email" placeholder="Email address" required><button>Save</button>
        </div><br>
        <div class="form-example">
            <label classs="details" for="name"> Phone no. : </label>
            <input class="details" type="number" name="Phone number" id="name" required> <button> Save </button>
        </div> <br>
        <div class="form example">
            <input class="details1" type="radio" name="gender" id="Female">
            <label for="Female"> Female</label><br>
            <input class="details1" type="radio" name="gender" id="Male">
            <label for="Male"> Male</label> <br>
            <input class="details1" type="radio" name="gender" id="Other">
            <label for="gender"> Other</label><br> <button>Save </button>
        </div> <br>
        <div class="form example">
            <label for="age" name="Age"> Age : </label><br>
            <input type="number" name="Age" placeholder="Enter your Age"> <button> Save </button>
        </div> <br>
        <div class="form example">
            <label for="Country" name="Country"> Country :</label> <br>
            <select name="Country">
                <option value="nigeria">Nigeria
                </option>
                <option value="germany">Germany</option>
                <option value="canada">Canada</option>
                <option value="china">China</option>
            </select> <button> Save </button>
        </div> <br>
        <div class="form-example">
            <label for="resume" name="CV"> Upload your CV : </label> <br>
            <input type="file"> <br>
            <button> Save</button>
        </div><br>
        <div class="form example">
            <label for="password"> Password:</label><br>
            <input type="password"> <button> Save </button>
        </div> <br>
        <p> <a href="terms-and-conditions.html"> T.A.W. Terms and Conditions </a> </p>

        <fieldset>
            <legend> Do you agree to the terms? </legend>
            <label> <input type="radio" name="radio" value="yes"> Yes</label>
            <label> <input type="radio" name="radio" value="no"> No</label>
        </fieldset> <br>
        <input type="submit">
    </form><i class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true"></i>
    <span class="sr-only">Saving. Hang tight!</span>
    <br>
    <footer>
        <small>
            © 2023 Anthonia-Alexis Inc. </small>
    </footer>
    <script id="ratufa_loader" src="https://www.ratufa.io/c/ld.js?f=w3alpp11&n=n1.ratufa.io"> </script>
</body>

</html>