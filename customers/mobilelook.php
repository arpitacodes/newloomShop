<!-- mobile bottom button navigation -->

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <i id="menuBar" class="fa-sharp fa-solid fa-bars" name="menu-outline"></i>
        
      </button>
 

      <button class="action-btn">
        
        <a href="../index.php"><i  class="fas fa-home" name="home-outline"></i></a>
      </button>

      <button class="action-btn">
        
        <a href="cart.php"> 
          <i class="fa-sharp fa-solid fa-bag-shopping" name="bag-handle-outline" ></i>
        </a>
        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <a href="./customers/myAccount.php">           
            <i class="fa-solid fa-user" name="person-outline"></i>
        </a> 
      </button>

    </div>


    <nav id="mobile-nav" class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <i class="fa-solid fa-xmark" name="close-outline"></i>
          
        </button>
      </div>

      <ul id="mobileNavUL" class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#index.php" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Cloths Types</p>

            <div>
              <i class="fa-regular fa-plus" name="add-outline" class="add-icon"></i>                
              <i class="fa-solid fa-minus" name="remoe-outline" class="remove-icon"></i>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>
            <?php getClothtypes(); ?> 
          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Season</p>

            <div>
              <i class="fa-regular fa-plus" name="add-outline" class="add-icon"></i>                
              <i class="fa-solid fa-minus" name="remoe-outline" class="remove-icon"></i>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <?php  getSeasons(); ?>

        </ul>

      </li>
<!-- This is Blog categories  -->
        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>
<!-- This is Offer categories  -->
         <li class="menu-category">
            <a href="#adnim_panel.php" class="menu-title">Becoms a Saler</a>
          </li>
<!-- This is Contact Us categories  -->
           <li class="menu-category">
            <a href="#contact_us.php" class="menu-title">Contact Us</a>
          </li>

      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>

              <i name="caret-back-outline" class="caret-back"></i>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <i name="caret-back-outline" class="a-solid fa-caret-left"></i>
           
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <i class="fa-brands fa-facebook" name="logo-facebook"></i>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <i class="fa-brands fa-twitter" name="logo-twitter"></i>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <i class="fa-brands fa-instagram" name="logo-instagram"></i>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <i class="fa-brands fa-linkedin" name="logo-linkedin"></i>
            </a>
          </li>

        </ul>

      </div>

    </nav>

    <script>
        const mobileMenuBar = document.getElementById('menuBar');
        const mobileNavUl = document.getElementById('mobileNavUL');

        if(mobileMenuBar){
          mobileMenuBar.addEventListener('click', () =>{
            mobileNavUl.classList.add('active');
          });
        }


    </script>