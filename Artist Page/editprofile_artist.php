<!DOCTYPE html>
<html>

<head>
    <title>Album List</title>
    <link rel="stylesheet" href="lists_artist.css">
    <link rel="stylesheet" href="register.css">
</head>

<body>

    <section class="Header">
        <nav class="menu_head">
            <div class="menu_button_group">
                <a href="#home">Home</a>
                <a href="#songs">Songs</a>
                <a href="#albums">Albums</a>
                <a href="#settings">Settings</a>
            </div>
        </nav>

        <div class="wrapper_main ">
            <div class=" profilepic ">
            </div>
            <div id="menu_head " class="header_details ">
                <h1>Pale Waves - Account Settings</h1>
            </div>
        </div>
    </section>
    <div class="AccountForm">
        <div id="header_details" class="form">

            <form name="artist-registration" action="main-artist.php" method="post">
                <label style="margin-left: 15%; margin-right: 10%">Email Address</label>
                <input type="text" name="emailaddress"><br>

                <label style="margin-left: 15%; margin-right: 17%">Password</label>
                <input type="text" name="passoword"><br>

                <label style="margin-left: 15%;  margin-right: 2%">Change Password</label>
                <button type="button" class="button_orange" style="width: 75px;">Change</button><br>

                <label style="margin-left: 15%;  margin-right: 13%">Artist Name</label>
                <input type="text" name="aristname"><br>

                <label style="margin-left: 15%;  margin-right: 22%">Genre</label>
                <select name="genre">

            </select><br>

                <label style="margin-left: 15%;  margin-right: 22%">Name</label>
                <input type="text" name="name">
                <label style="margin-left: 15%;  margin-right: 18%">Surname</label>
                <input type="text" name="Surname"><br>

                <label style="margin-left: 15%;  margin-right: 18%">Country</label>
                <select name="country">

            </select><br>

                <label style="margin-left: 15%;  margin-right: 22%">Bank</label>
                <select name="bank">

            </select><br>

                <label style="margin-left: 15%;  margin-right: 9%">Bank Account </label>
                <input type="text" name="bankaccountnumber"><br>

                <div class="button">
                    <button type="submit" name="submit" value="Confirm Edit" style="margin-left: 32%; padding: 8px" class="button_orange">Confirm Edit</button><br>
                    <button type="button" class="button_dark" style="margin-left: 22%;"> Cancel </button>
                </div>
            </form>
        </div>
    </div>

    <div id="div_footer">

    </div>
</body>

</html>