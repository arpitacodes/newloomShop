<!-- mobile bottom button navigation -->

    <div id="iconDiv" class="mobile-bottom-navigation">

      <button class="action-btn" onclick="show()">
        <i id="menuBar" class="fa-sharp fa-solid fa-bars" name="menu-outline" ></i>      
      </button>
 

      <button class="action-btn">        
        <a href="index.php"><i  class="fas fa-home" name="home-outline"></i></a>
      </button>

      <button class="action-btn">        
        <a href="cart.php"> 
          <i class="fa-sharp fa-solid fa-bag-shopping" name="bag-handle-outline" ></i>
        </a>
       <span class="count">
            <?php   getItems();    ?>                  
        </span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <a href="./customers/myAccount.php">           
            <i class="fa-solid fa-user" name="person-outline"></i>
        </a> 
      </button>

    </div>


    <nav id="mobile-nav" class="mobile-navigation-menu  has-scrollbar" >

      <div id="menuWrapper" class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" onclick="close()">
          <i id="closeBtn" class="fa-solid fa-xmark" name="close-outline" ></i>
          
        </button>
      </div>

      <ul id="mobileNavUL" class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="index.php" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" >
            <p class="menu-title">Cloths Types</p>

            <div>
              <i class="fa-regular fa-plus" name="add-outline" class="add-icon"></i>                
              <i class="fa-solid fa-minus" name="remoe-outline" class="remove-icon"></i>
            </div>
          </button>

          <ul class="submenu-category-list" >
            <?php getClothtypes(); ?> 
          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" >
            <p class="menu-title">Season</p>

            <div>
              <i class="fa-regular fa-plus" name="add-outline" class="add-icon"></i>                
              <i class="fa-solid fa-minus" name="remoe-outline" class="remove-icon"></i>
            </div>
          </button>

          <ul class="submenu-category-list" >

            <?php  getSeasons(); ?>

        </ul>

      </li>
<!-- This is Blog categories  -->
        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>
<!-- This is Contact Us categories  -->
           <li class="menu-category">
            <a href="#contact_us.php" class="menu-title">Contact Us</a>
          </li>
           <li class="menu-category">
            <a href="#customerLogout.php" class="menu-title">Logout</a>
          </li>

      </ul>

      
    </nav>

<style>

  #menuWrapper{
    display: none;
  }

  @media (max-width: 799px){
    #mobile-nav{
      display: contents;
      flex-direction: column;
      align-items: flex-start;
      justify-content: flex-start;
      position: fixed;
      top: 0;
      left: -300;
      height: 100vh;
      width: 300px;
      background-color: #fefefe;
      box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
      padding: 80px 0 0 10px;
      transition: 0.3s;

    }
    #mobile-nav.active{
      left: 0;
    }

    #menuWrapper{
    display: flex;
    }

    #menuWrapper i{
      color: #123;
      font-size: 20px;
    }
   #menuWrapper .menu-title{
    clear: #123;
    font-size: 24px;
  }
}
    .mobile-navigation-menu{

    }

</style>

<!-- <script src="./js/mobile.js"></script> -->

<script>

const mobileNavUL = document.getElementById('mobileNavUL');
const menuBar = document.getElementById('menuBar');

const closeBtn = document.getElementById('closeBtn');


menuBar.addEventListener('click',show);
closeBtn.addEventListener('click',close);

function show(){
  mobileNavUL.style.display='flex';
  mobileNavUL.style.top ='0';
  mobileNavUL.style.left ='0';
}

function close() {
  mobileNavUL.style.left ='-100%';

}
</script>