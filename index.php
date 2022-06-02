<?php
include './includes/class-autoload.inc.php';
session_start();

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veilig Nederland (@veilignederland)</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?v=2.5">
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-light justify-content-center nav-bg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-md-4">
            <a class="navbar-brand" href="index.php">
                <img class="img-fluid" src="img/instagram.png" alt="instagram-logo">
            </a>
        </div>
        <div class="col-md-8">
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="col-md-6">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-md-6">
                    <ul class="navbar-nav right">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg aria-label="Home" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                                     role="img" viewBox="0 0 24 24" width="24">
                                    <path d="M9.005 16.545a2.997 2.997 0 012.997-2.997h0A2.997 2.997 0 0115 16.545V22h7V11.543L12 2 2 11.543V22h7.005z"
                                          fill="none" stroke="currentColor" stroke-linejoin="round"
                                          stroke-width="2"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg aria-label="Direct" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                                     role="img" viewBox="0 0 24 24" width="24">
                                    <line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                          x1="22" x2="9.218" y1="3" y2="10.083"></line>
                                    <polygon fill="none"
                                             points="11.698 20.334 22 3.001 2 3.001 9.218 10.084 11.698 20.334"
                                             stroke="currentColor" stroke-linejoin="round" stroke-width="2"></polygon>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg aria-label="New post" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                                     role="img" viewBox="0 0 24 24" width="24">
                                    <path d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552z"
                                          fill="none" stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="2"></path>
                                    <line fill="none" stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="2" x1="6.545" x2="17.455" y1="12.001"
                                          y2="12.001"></line>
                                    <line fill="none" stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="2" x1="12.003" x2="12.003" y1="6.545"
                                          y2="17.455"></line>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg aria-label="Find people" class="_8-yf5 " color="#262626" fill="#262626" height="24"
                                     role="img" viewBox="0 0 24 24" width="24">
                                    <polygon fill="none"
                                             points="13.941 13.953 7.581 16.424 10.06 10.056 16.42 7.585 13.941 13.953"
                                             stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                             stroke-width="2"></polygon>
                                    <polygon fill-rule="evenodd"
                                             points="10.06 10.056 13.949 13.945 7.581 16.424 10.06 10.056"></polygon>
                                    <circle cx="12.001" cy="12.005" fill="none" r="10.5" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg aria-label="Activity Feed" class="_8-yf5 " color="#262626" fill="#262626"
                                     height="24" role="img" viewBox="0 0 24 24" width="24">
                                    <path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="container margin-posts bg">
    <div class="row">
        <?php
        $conn = new Account;
        $account = $conn->profielInfo();
        foreach ($account as $acc) {

        ?>
        <div class="col-md-3">
            <img class="img-fluid1  profile-img" src="<?php echo $acc['profielFoto'] ?>" alt="profiel-foto"/>
        </div>
        <div class="col-md-4">
            <div class="profile-info">
                <h3><?php echo $acc['profielNaam'] ?> </h3>
                <div class=info>
                    <div class="volgers">
                        <?php
                        $conn = new Posts;
                        $post_numbers = $conn->countPosts();
                        foreach ($post_numbers as $post_number) {
                        ?>
                        <p><b><?php echo $post_number['postnumber']?></b> posts</p>
                        <?php 
                        }
                        ?>
                        <p><b>176</b> followers </p>
                        <p><b>44</b> following </p>
                    </div>
                    <p><strong><?php echo $acc['volledigeNaam'] ?></strong></p>
                    <p><?php echo nl2br($acc['profielBeschrijving']) ?> </p>
                    <p><?php echo $acc['mail'] ?> </p>
                    <a href=""><?php echo $acc['website'] ?></a></div>
            </div>
        </div>
        <div class="col-md-2">
            <?php
            if (isset($_SESSION['user_session'])){
            ?>
            <a href="edit.php?id=<?php echo $acc['idAccount'] ?>" class="btn btn-outline-dark link-bewerk">bewerk
                profiel</a> <br>
                <a href="logout.php?" class="btn btn-outline-dark link-bewerk">Uitloggen</a> <br>
            <?php }
            ?>
        </div>
    </div>
</div>

<?php
}
?>

<div class="container">
    <div class="row margin-posts posts">
        <?php
        $con = new Posts;
        $posts = $con->getPosts();
        foreach ($posts as $post) {
            ?>
            <!--Button-->
            <a class="img-link" data-bs-toggle="modal" href="#post<?php echo $post['idPosts'] ?>" role="button">
                <div class="img-dark"><img src="<?php echo $post['imgLocation'] ?>" class="img" alt="..."></div>
                <div class="hover">
                    <div class="hover-text">
                        <svg class="hover-like" width="24" height="23" viewBox="0 0 24 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.792 2.904C18.1064 2.97667 19.3389 3.5659 20.2207 4.5433C21.1026 5.5207 21.5624 6.80704 21.5 8.122C21.5 11.194 18.848 13.081 16.303 15.344C13.791 17.587 12.438 18.813 12 19.096C11.523 18.787 9.857 17.273 7.697 15.344C5.141 13.072 2.5 11.167 2.5 8.122C2.43757 6.80704 2.89739 5.5207 3.77926 4.5433C4.66113 3.5659 5.89357 2.97667 7.208 2.904C7.93615 2.88193 8.65756 3.04918 9.30171 3.3894C9.94587 3.72962 10.4907 4.23116 10.883 4.845C11.723 6.02 11.863 6.608 12.003 6.608C12.143 6.608 12.281 6.02 13.113 4.842C13.5031 4.22532 14.0481 3.72179 14.6937 3.38171C15.3393 3.04163 16.0628 2.87691 16.792 2.904V2.904ZM16.792 0.904C15.8839 0.874927 14.981 1.05108 14.1505 1.41935C13.3199 1.78762 12.5831 2.33851 11.995 3.031C11.4074 2.34053 10.6721 1.79091 9.84355 1.42275C9.01498 1.0546 8.11428 0.877313 7.208 0.904C5.36287 0.976152 3.62138 1.77598 2.36434 3.12859C1.1073 4.48121 0.436994 6.27654 0.5 8.122C0.5 11.732 3.05 13.949 5.515 16.092C5.798 16.338 6.084 16.586 6.368 16.839L7.395 17.757C8.51504 18.8228 9.68927 19.8301 10.913 20.775C11.2368 20.9846 11.6143 21.0962 12 21.0962C12.3857 21.0962 12.7632 20.9846 13.087 20.775C14.3497 19.8013 15.56 18.7615 16.713 17.66L17.635 16.836C17.928 16.576 18.225 16.317 18.52 16.062C20.854 14.037 23.5 11.742 23.5 8.122C23.563 6.27654 22.8927 4.48121 21.6357 3.12859C20.3786 1.77598 18.6371 0.976152 16.792 0.904V0.904Z"
                                  fill="white"/>
                            <ellipse cx="7" cy="8.5" rx="5" ry="7.5" fill="white"/>
                            <ellipse cx="17" cy="8.5" rx="5" ry="7.5" fill="white"/>
                            <path d="M17.3382 6.43082L10.8725 19.3709L3.86514 11.6965L17.3382 6.43082Z" fill="white"/>
                            <rect x="15.6272" y="8.40071" width="6" height="10"
                                  transform="rotate(47.1685 15.6272 8.40071)" fill="white"/>
                            <rect x="6" y="5" width="11" height="6" fill="white"/>
                        </svg>
                        <?php
                        $likes = rand(1, 99);
                        echo $likes;
                        ?>
                        <svg class="hover-comment" width="21" height="23" viewBox="0 0 21 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="9" cy="8.5" rx="9" ry="8.5" fill="white"/>
                            <path d="M16.0275 19.1888L6.45189 15.1506L14.7369 8.87695L16.0275 19.1888Z" fill="white"/>
                        </svg>
                        <?php
                        $reacties = rand(1, 99);
                        echo $reacties;
                        ?>
                    </div>
                </div>
            </a>

            <!-- Modal -->
            <div class="modal fade" id="post<?php echo $post['idPosts'] ?>" tabindex="-1"
                 aria-labelledby="post<?php echo $post['idPosts'] ?>" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-posts">
                    <div class="modal-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="center-img">
                                        <img src="<?php echo $post['imgLocation'] ?>" class="post-img" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <?php
                                    $conn = new Account;
                                    $account = $conn->profielInfo();
                                    foreach ($account as $acc) {
                                        ?>
                                        <div class="account-info">
                                            <img src="<?php echo $acc['profielFoto'] ?>" class="profile-picture" alt="profile-picture">
                                            <b><p class="profiel-naam"><?php echo $acc['profielNaam'] ?></p></b>
                                            <button type="button" class="btn-close button-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="beschrijving">
                                            <div class="img-container">
                                                <img src="<?php echo $acc['profielFoto'] ?>" class="profile-picture" alt="profile-picture">
                                            </div>
                                            <div class="comment-text">
                                                <b><p class="profiel-naam"><?php echo $acc['profielNaam'] ?></b>
                                        <?php
                                    }
                                    ?>
                                        <?php echo nl2br($post['beschrijving']) ?></p>
                                        </div>
                                    </div>
                                    <p>
                                        <?php
                                        $con = new Posts;
                                        $comments = $con->getComments($post['idPosts']);
                                        
                                        foreach ($comments as $comment) {
                                            ?>
                                            <div class="beschrijving">
                                                <div class="img-container">
                                                    <img src="<?php echo $comment['photoComment']?>" class="profile-picture" alt="profile-picture">
                                                </div>
                                                <div class="comment-text">
                                                    <b><p class="profiel-naam"><?php echo $comment['userComment']?></b>
                                                    <?php echo $comment['writtenComment']?></p>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </p>
                                    <div class="footer">
                                        <div class="footer-icons">
                                            <svg aria-label="Like" class="_8-yf5 icon-margin" color="#000" fill="#000" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z"></path></svg>
                                            <svg aria-label="Comment" class="_8-yf5 icon-margin" color="#000" fill="#000" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path></svg>
                                            <svg aria-label="Share Post" class="_8-yf5 " color="#000" fill="#000" height="24" role="img" viewBox="0 0 24 24" width="24"><line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2" x1="22" x2="9.218" y1="3" y2="10.083"></line><polygon fill="none" points="11.698 20.334 22 3.001 2 3.001 9.218 10.084 11.698 20.334" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></polygon></svg>
                                            <svg aria-label="Save" class="_8-yf5 icon-right" color="#000" fill="#000" height="24" role="img" viewBox="0 0 24 24" width="24"><polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon></svg>
                                            <p class="fw-normal fs-6 likes"><?php echo $likes?> likes</p>
                                            <p class="fw-light date"><?php echo $post['datum']?></p>
                                        </div>
                                        
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <svg aria-label="Emoji" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z"></path></svg>
                                            </span>
                                            <input type="text" class="form-control comment-input" placeholder="Add a comment" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<footer class="container text-center">
        <div class="footer_kopjes">
            <p>Meta</p>
            <p>Info</p>
            <p>Blog</p>
            <p>Vacatures</p>
            <p>Help</p>
            <p>API</p>
            <p>Privacy</p>
            <p>Voorwaarden</p>
            <p>Populaire accounts</p>
            <p>Hashtags</p>
            <p>Locaties</p>
            <p>Instagram Lite</p>
        </div>
    <div class="footer_kopjes">
        <p>Nederlands</p>
        <p>Instagram form Meta</p>
    </div>
</footer>




<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>