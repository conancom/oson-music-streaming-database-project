<?php

?>

<!DOCTYPE html>

<html>

<head>
    <link rel="Stylesheet" href="Listener-Search-Page-Styling.css">
    <!--Bootstrap-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--Icons-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="search.js"></script>

    <style>
        a:hover {
            cursor: pointer;
            background-color: yellow;
        }
    </style>

</head>

<body>

    <body>
        <div class="row">
            <div class="columntest-side">
                <div class="Sidebar" style="position: fixed;">
                    <a href="#">
                        <p>
                            <ion-icon name="home-outline"></ion-icon>
                            Home
                        </p>
                    </a>
                    <a href="#">
                        <p>
                            <ion-icon name="search-outline"></ion-icon>
                            Search
                        </p>
                    </a>
                    <a href="#">
                        <p>
                            <ion-icon name="reorder-four-outline"></ion-icon>
                            Playlist
                        </p>
                    </a>
                    <a href="#">
                        <p>
                            <ion-icon name="search-outline"></ion-icon>
                            Album
                        </p>
                    </a>
                    <a href="#">
                        <p>
                            <ion-icon name="settings-outline"></ion-icon>
                            Settings
                        </p>
                    </a>
                </div>
            </div>

            <div class="columntest-artist">
                <div class="Main">
                    <div class="Recents">
                        <div class="PlaylistContainer">
                            <div class="row SearchRow">
                            <input type="text" id="search" placeholder="Search...">
                                <!-- <hr>
                                <br> -->
                                <div id="display" style="background-color: lightblue;"></divv>
                            </div>

                            <h3 style="color: white;">
                                Made by oson
                            </h3>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row Artist-Pic">
                                        <img src="Images/IU.jpeg" alt="IU Profile Picture" style="padding-bottom: 20px;">
                                    </div>
                                    <div class="row Artist-Name">
                                        <h3 style="text-align: center;">IU</h3>
                                    </div>
                                    <div class="row Playlist-Type">
                                        <p style="text-align: center;">Playlist</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row Artist-Pic">
                                        <img src="Images/Lisa.jfif" alt="Lisa Profile Picture" style="padding-bottom: 20px;">
                                    </div>
                                    <div class="row Artist-Name">
                                        <h3 style="text-align: center;">LISA</h3>
                                    </div>
                                    <div class="row Playlist-Type">
                                        <p style="text-align: center;">Playlist</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row Artist-Pic">
                                        <img src="Images/PEOPLE.JPG" alt="Code Kunst Profile Picture" style="padding-bottom: 20px;">
                                    </div>
                                    <div class="row Artist-Name">
                                        <h3 style="text-align: center;">Code Kunst</h3>
                                    </div>
                                    <div class="row Playlist-Type">
                                        <p style="text-align: center;">Playlist</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row Artist-Pic">
                                        <img src="Images/Lil-Beethoven-Playlist.JPG" alt="Lil Beethoven Profile Picture" style="padding-bottom: 20px;">
                                    </div>
                                    <div class="row Artist-Name">
                                        <h3 style="text-align: center;">Lil Beethoven</h3>
                                    </div>
                                    <div class="row Playlist-Type">
                                        <p style="text-align: center;">Playlist</p>
                                    </div>
                                </div>
                            </div>

                            <h3 style="color: white;">
                                Genre by oson
                            </h3>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row Artist-Pic">
                                        <img src="Images/IU.jpeg" alt="IU Profile Picture" style="padding-bottom: 20px;">
                                    </div>
                                    <div class="row Artist-Name">
                                        <h3 style="text-align: center;">IU</h3>
                                    </div>
                                    <div class="row Playlist-Type">
                                        <p style="text-align: center;">Playlist</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row Artist-Pic">
                                        <img src="Images/Lisa.jfif" alt="Lisa Profile Picture" style="padding-bottom: 20px;">
                                    </div>
                                    <div class="row Artist-Name">
                                        <h3 style="text-align: center;">LISA</h3>
                                    </div>
                                    <div class="row Playlist-Type">
                                        <p style="text-align: center;">Playlist</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row Artist-Pic">
                                        <img src="Images/PEOPLE.JPG" alt="Code Kunst Profile Picture" style="padding-bottom: 20px;">
                                    </div>
                                    <div class="row Artist-Name">
                                        <h3 style="text-align: center;">Code Kunst</h3>
                                    </div>
                                    <div class="row Playlist-Type">
                                        <p style="text-align: center;">Playlist</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row Artist-Pic">
                                        <img src="Images/Lil-Beethoven-Playlist.JPG" alt="Lil Beethoven Profile Picture" style="padding-bottom: 20px;">
                                    </div>
                                    <div class="row Artist-Name">
                                        <h3 style="text-align: center;">Lil Beethoven</h3>
                                    </div>
                                    <div class="row Playlist-Type">
                                        <p style="text-align: center;">Playlist</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="Trackbar" style="position: fixed;">
            <div class="row">
                <div class="col">
                    <div class="music-control">
                        <p>
                            <a href="#" style="text-decoration: none;">
                                <ion-icon name="play-skip-back-outline"></ion-icon>
                            </a>
                            <a href="#" style="text-decoration: none;">
                                <ion-icon name="play-outline"></ion-icon>
                            </a>
                            <a href="#" style="text-decoration: none;">
                                <ion-icon name="play-skip-forward-outline"></ion-icon>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-8">
                    <div class="row">
                        <div class="music-data">
                            <div>
                                <p class="Song-name">Lucid Dreams | Juice WRLD </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="music-progressbar">
                            <div class="bar">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="music-option">
                        <p>
                            <a href="#" style="text-decoration: none;">
                                <ion-icon name="shuffle-outline"></ion-icon>
                            </a>
                            <a href="#" style="text-decoration: none;">
                                <ion-icon name="swap-horizontal-outline"></ion-icon>
                            </a>
                            <a href="#" style="text-decoration: none;">
                                <ion-icon name="volume-high-outline"></ion-icon>
                            </a>
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </body>
</body>

</html>