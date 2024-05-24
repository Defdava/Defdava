<body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="home" class="logo">
                            <img src="assets/images/Timlogo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="home" class="<?= ($this->uri->segment(1) == 'home') ? 'active' : '' ?>">Home</a></li>
                            <li class="scroll-to-section"><a href="about" class="<?= ($this->uri->segment(1) == 'about') ? 'active' : '' ?>">About</a></li>
                            <li class="scroll-to-section"><a href="graphic" class="<?= ($this->uri->segment(1) == 'graphic') ? 'active' : '' ?>">Graphic</a></li>
                            <li class="scroll-to-section"><a href="presentation" class="<?= ($this->uri->segment(1) == 'presentation') ? 'active' : '' ?>">Presentation</a></li>
                            <li class="scroll-to-section"><a href="contract" class="<?= ($this->uri->segment(1) == 'contract') ? 'active' : '' ?>">Contract</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->