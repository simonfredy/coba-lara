<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="POST">
        @csrf
        <label for="Fnama">First Name:</label><br><br>
        <input type="text" name="Fname" id="Fname"><br><br>
        <label for="Lnama"></label>Last Name:<br><br>
        <input type="text" name="Lname" id="Lnama"><br><br>

        <label>Gender:</label><br><br>
        <input type="radio" name="gender" value="0" id="male"> <label for="male">Male</label> <br>
        <input type="radio" name="gender" value="1" id="female"> <label for="female">Female</label> <br>
        <input type="radio" name="gender" value="2" id="other"> <label for="other">Other</label> <br><br>

        <label>Nationality:</label> <br><br>
            <select>
                <option value="indonesian">Indonesian</option>
                <option value="singaporean">Singaporean</option>
                <option value="malayasian">Malaysian</option>
                <option value="australian">Australian</option>
            </select> <br><br>

        <label>Language Spoken:</label> <br><br>
        <input type="checkbox" value="0" id="bIndo"> <label for="bIndo">Bahasa Indonesia</label> <br>
        <input type="checkbox" value="1" id="english"> <label for="english">English</label> <br>
        <input type="checkbox" value="2" id="others"> <label for="others">Other</label> <br><br>

        <label for="txBio">Bio:</label> <br><br>
        <textarea name="txtBio" id="txBio" cols="30" rows="10"></textarea><br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>