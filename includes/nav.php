<nav class="navbar navbar-expand-lg navbar-light bg-darklight">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="">Wicookin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        
                
                        <?php 

                                        if(isset($_SESSION['email']) ){

                                            $class = $title == 'Profile' ? 'active' : '';
                                            echo '<li class="nav-item"><a class="nav-link ' . $class . '" href="#!">Mon profil</a></li>';

                                            $class = $title == 'About' ? 'active' : '';
                                                    echo '<li class="nav-item"><a class="nav-link ' . $class . '" href="#!">About</a></li>';

                                                    echo '<li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                                                <li><hr class="dropdown-divider" /></li>
                                                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                                                            </ul>
                                                        </li>
                                                </ul>';

                                                echo '<form class="d-flex">
                                                    <button class="btn btn-outline-dark" type="submit">
                                                        <i class="bi-cart-fill me-1"></i>
                                                        Mon panier   
                                                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                                                    </button>
                                                    
    
                                                    
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    
                                                    <button class="btn btn-outline-dark">
                                                        <a href="logout.php"> 
                                                            Deconnexion
                                                        </a>
                                                    </button>
                                                </form>';
                                        } else{
                                                    $class = $title == 'About' ? 'active' : '';
                                                    echo '<li class="nav-item"><a class="nav-link ' . $class . '" href="#!">About</a></li>';

                                                    echo '<li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                                                <li><hr class="dropdown-divider" /></li>
                                                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                                                            </ul>
                                                        </li>
                                                </ul>';

                                                echo '<form class="d-flex">
                                                    <button class="btn btn-outline-dark" type="submit">
                                                        <i class="bi-cart-fill me-1"></i>
                                                        Mon panier   
                                                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                                                    </button>
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    
                                                    <button class="btn btn-outline-dark">
                                                        <a href="inscription.php">
                                                            Inscription
                                                        </a>
                                                    </button>
                                                    
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    
                                                    <button class="btn btn-outline-dark">
                                                        <a href="connexion.php"> 
                                                            Connexion
                                                        </a>
                                                    </button>
                                                </form>';
                                        }

                        ?>
                    </ul>               
                </div>                
            </div>
        </nav>