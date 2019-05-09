<?php 
/** 
 * Template Name: Contact
 */
?>
<?php get_header(); ?>
<div class="content-area">
  <main>
    <section class="page-area">
      <div class=" page-content" id="connect-content">
        <div class="container">
          <h1>Connect<div class="lineFade-all"></div></h1>
          
        </div>
        <div class="container">
          <div class="row" >
            
            <div class="col-md-6">
              <h2 class="title-connect">Contact us</h2>
              <p>We woud love to hear from you!</p>
                <?php echo do_shortcode( '[contact-form-7 id="205" title="Contact From 2"]' );?>
            </div>
            <div class="col-md-6">
              <h2 class="title-connect">Our Locations</h2>
              <h3 class="loc-title">New York</h3>
                <?php
                  if(is_active_sidebar('sidebar-img-ny')){
                      dynamic_sidebar('sidebar-img-ny');
                  }
                ?>
                <div class="con-addr">
                  <table align="center">
                    <tbody>
                      <tr>
                        <th>
                          <i class="fas fa-map-marker-alt fa-fw fa-2x"></i>
                        </th>
                        <td>
                          1000 Woodbury Rd, <br>Woodbury, NY 11797
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <i class="fas fa-phone fa-fw fa-2x"></i>
                        </th>
                        <td>
                           (929) 335-6120 ext 1
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
        
                <h3 class="loc-title">California</h3>
                <?php
                  if(is_active_sidebar('sidebar-img-la')){
                      dynamic_sidebar('sidebar-img-la');
                  }
                ?>
                <div class="con-addr">
                  <table align="center">
                    <tbody>
                      <tr>
                        <th>
                          <i class="fas fa-map-marker-alt fa-fw fa-2x"></i>
                        </th>
                        <td>
                          27943 Smyth Dr, <br>Valencia, CA 91355
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <i class="fas fa-phone fa-fw fa-2x"></i>
                        </th>
                        <td>
                          (929) 335-6120 ext 2
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
        
      
                
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>