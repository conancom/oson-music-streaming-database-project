<?php
    session_start();
    print($_SESSION['id-listener']);
?>
<!DOCTYPE html>

<html>

<head>
    <link rel="Stylesheet" href="Listener-Main-Page-Styling.css">
    <title>Oson Music Streaming</title>
    <!--Bootstrap-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--Icons-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

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
                    <div class="RecentsContainer">
                        <h3 style="color: white; padding: 20px; font-size: 35px;">
                            Recently Played
                        </h3>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="row Artist-Pic">
                                    <img src="Images/IU.jpeg" alt="IU Profile Picture">
                                </div>
                                <div class="row Artist-Name">
                                    <h3 style="text-align: center;">IU</h3>
                                </div>
                                <div class="row Artist-Type">
                                    <p style="text-align: center;">Artists</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="row Artist-Pic">
                                    <img src="Images/Lisa.jfif" alt="Lisa Profile Picture">
                                </div>
                                <div class="row Artist-Name">
                                    <h3 style="text-align: center;">LISA</h3>
                                </div>
                                <div class="row Artist-Type">
                                    <p style="text-align: center;">Artists</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="row Artist-Pic">
                                    <img src="Images/PEOPLE.JPG" alt="Code Kunst Profile Picture">
                                </div>
                                <div class="row Artist-Name">
                                    <h3 style="text-align: center;">Code Kunst</h3>
                                </div>
                                <div class="row Artist-Type">
                                    <p style="text-align: center;">Artists</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="row Artist-Pic">
                                    <img src="Images/Lil-Beethoven-Playlist.JPG" alt="Lil Beethoven Profile Picture">
                                </div>
                                <div class="row Artist-Name">
                                    <h3 style="text-align: center;">Lil Beethoven</h3>
                                </div>
                                <div class="row Artist-Type">
                                    <p style="text-align: center;">Artists</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="Albums">
                        <div class="AlbumsContainer">
                            <h3 style="color: white; padding: 20px; font-size: 35px;">
                                Albums you might love
                            </h3>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row Album-Pic">
                                        <img src="Images/Ticket-To-Downfall-Playlist.JPG" alt="MGK Ablum Picture">
                                    </div>
                                    <div class="row Album-Name">
                                        <h3 style="text-align: center;">Tickets To My Downfall</h3>
                                    </div>
                                    <div class="row Album-Type">
                                        <p style="text-align: center;">Album</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row Album-Pic">
                                        <img src="Images/Ticket-To-Downfall-Playlist.JPG" alt="MGK Ablum Picture">
                                    </div>
                                    <div class="row Album-Name">
                                        <h3 style="text-align: center;">Tickets To My Downfall</h3>
                                    </div>
                                    <div class="row Album-Type">
                                        <p style="text-align: center;">Album</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row Album-Pic">
                                        <img src="Images/Ticket-To-Downfall-Playlist.JPG" alt="MGK Ablum Picture">
                                    </div>
                                    <div class="row Album-Name">
                                        <h3 style="text-align: center;">Tickets To My Downfall</h3>
                                    </div>
                                    <div class="row Album-Type">
                                        <p style="text-align: center;">Album</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row Album-Pic">
                                        <img src="Images/Ticket-To-Downfall-Playlist.JPG" alt="MGK Ablum Picture">
                                    </div>
                                    <div class="row Album-Name">
                                        <h3 style="text-align: center;">Tickets To My Downfall</h3>
                                    </div>
                                    <div class="row Album-Type">
                                        <p style="text-align: center;">Album</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="Artists-Suggest">
                        <div class="ArtistsSuggestContainer">
                            <h3 style="color: white; padding: 20px; font-size: 35px;">
                                Artists you might love
                            </h3>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row ArtistSuggest-Pic">
                                        <img src="Images/Scorpion.JPG" alt="Suggest Profile Picture">
                                    </div>
                                    <div class="row ArtistSuggest-Name">
                                        <h3 style="text-align: center;">Drake</h3>
                                    </div>
                                    <div class="row ArtistSuggest-Type">
                                        <p style="text-align: center;">Artist</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row ArtistSuggest-Pic">
                                        <img src="Images/Scorpion.JPG" alt="Suggest Profile Picture">
                                    </div>
                                    <div class="row ArtistSuggest-Name">
                                        <h3 style="text-align: center;">Drake</h3>
                                    </div>
                                    <div class="row ArtistSuggest-Type">
                                        <p style="text-align: center;">Artist</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="row ArtistSuggest-Pic">
                                        <img src="Images/Scorpion.JPG" alt="Suggest Profile Picture">
                                    </div>
                                    <div class="row ArtistSuggest-Name">
                                        <h3 style="text-align: center;">Drake</h3>
                                    </div>
                                    <div class="row ArtistSuggest-Type">
                                        <p style="text-align: center;">Artist</p>
                                    </div>
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

</html>

<!--


-->