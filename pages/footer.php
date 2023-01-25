<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<div class="footerDiv">
<footer>
    <div class="footer1">
        <div class="footer_header">
            <h4>Company Adress</h4>
        </div>
        <address>
        123, Fake Street, <br>
        Gurgaon, <br>
        HR, IN, 122102
       </address>
       <div class="socila_link_wrapper">
           <ul class="header-social-container">

              <li>
                <a href="#" class="social-link">
                  <i class="fa-brands fa-facebook" name="logo-facebook"></i>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <i  class="fa-brands fa-twitter" name="logo-twitter"></i>
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
    </div>
    <div class="footer2">
        <div class="footer_header">
            <h4>Visit us</h4>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.6583386996226!2d77.28273171455625!3d28.48983429727697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdc0daaaaaaab%3A0xd76f205f7679d870!2sVivanta%20Surajkund%2C%20NCR!5e0!3m2!1sen!2sin!4v1626711621578!5m2!1sen!2sin" width="280" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
    </div>
    <div class="footer3">
        <div class="footer_header">
            <h4>Contact us</h4>
        </div>
        <div class="contac_wrapper">
            <p><small>We are available Mon-Fri, 9 A.M. - 5 P.M.</small></p><br>
            <div class="contacts">
                <p>
                    Sales: <a href="tel:+918866885522">+918866885522</a> <br>
                    Sales: <a href="mailto:sales@mysite.com">sales@mysite.com</a>
            
                </p>
                <p>
                     Support: <a href="tel:+918866885522">+918866885522</a><br>
                     Support: <a href="mailto:support@mysite.com">support@mysite.com</a>

                </p>
            </div>
        </div>

    </div>

  
</footer>
  <div class="footer_btm">
    <p>&copy; Copyright 2013-2021 - SiteName Pvt. Ltd. </p>
  </div>
</div> <!-- footer div ends -->

<style>
  /*-----------*************---------Footer of the Page----------*********------  background-color: peachpuff; */


.footerDiv{background-color: #0c0c0c;/*#69afa28a;          */
          }

footer{
  display: flex;
  flex-direction: row;

  padding: 5px;
  margin:20px 0px;
}

footer > div{
  width: 33%;
 background-color: #12bfad; /*#69afa28a;*/
}
.socila_link_wrapper{
    margin: 1em;
}
.footer2{
    text-align: center;
}
@media screen and (max-width: 60em){
  footer{
    display: contents;
    font-size: 18px;
  }
  footer > div{    width: 100%; padding: inherit;  }
  .footer_btm {    padding-bottom: 5rem;}
  .socila_link_wrapper{
    
    }
}

.footer_header{
 margin: 20px 0px;
 text-align: center;
 background-color: lightgray;
 padding: 10px;
 margin-right: 3px;

}

.footer_btm{
  background-color: lightgray;
  height: 40px;
  margin-bottom: 10px;
  text-align: center;
  line-height: 40px;

}

address{
  margin-left: 20px;
}
.contac_wrapper{margin-left: 12px;}
.contacts >p a:hover {color: #fff;}
</style>