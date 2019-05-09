<?php 
/** 
 * Template Name: About Page
 * 
 */
?>
<?php get_header(); ?>
<div class="content-area">
  <main>
    <section class="page-area">
      <div class=" page-content" id="values-content">
        <div class="container">
          <h1>Company<div class="lineFade-all"></div></h1>
        </div>
        
        <!-- Top Values container -->
        <div class="val-bg1" > 
          <div class="container">
            <div class="row">
              <div class="col-md-12 animated zoomInDown">
                <h2 class="section-title" id="section-title-1">Admediary is Driven By Eight Core Values</h2>
              </div>
              <!-- <div class="row"> -->
              <div class="col-xl col-lg-3 col-md-6 col-sm-6 col-xs-12 values animated flipInX">
                <i class="fas fa-users fa-4x fa-fw"></i><br><p>Great People</p>
              </div>
              <div class="col-xl col-lg-3 col-md-6 col-sm-6 col-xs-12 values animated flipInX">
                <i class="fas fa-people-carry fa-4x fa-fw"></i><br><p>Teamwork</p>
              </div>
              <div class="col-xl col-lg-3 col-md-6 col-sm-6 col-xs-12 values animated flipInX">
                <i class="fas fa-thumbs-up fa-4x fa-fw"></i><br><p>Honesty</p>
              </div>
              <div class="col-xl col-lg-3 col-md-6 col-sm-6 col-xs-12 values animated flipInX">
                <i class="fas fa-stamp fa-4x fa-fw"></i><br><p>Integrity</p>
              </div>
              <div class="col-xl col-lg-3 col-md-6 col-sm-6 col-xs-12 values animated flipInX">
                <i class="fas fa-comments fa-4x fa-fw"></i><br><p>Open Communication</p>
              </div>
              <div class="col-xl col-lg-3 col-md-6 col-sm-6 col-xs-12 values animated flipInX">
                <i class="fas fa-adjust fa-4x fa-fw"></i><br><p>Transparency</p>
              </div>
              <div class="col-xl col-lg-3 col-md-6 col-sm-6 col-xs-12 values animated flipInX">
                <i class="fas fa-fist-raised fa-4x fa-fw"></i><br><p>Empowered Decision Making</p>
              </div>
              <div class="col-xl col-lg-3 col-md-6 col-sm-6 col-xs-12 values animated flipInX">
                <i class="fas fa-balance-scale fa-4x fa-fw"></i><br><p>Work Hard + Life Balance</p>
              </div>
              <!-- </div> -->
            </div>
          </div>
        </div>


        <!-- <div class="container">
          <div class="row">
                  
            <div class="col-md-12">
              <div id="values-copy">
                <h3>Our values are both our existence and our pledge</h3>
                <p>
                  At Admediary, we strive for nothing less than excellence in our work and in our people.  We live and breathe the same values and work with partners that exemplify the same kind of mentality. Here is what you can expect from us:
                </p>
              </div>
            </div>
          </div>
        </div> -->

        <!-- Our Leadership -->
        <!-- Team -->
  <section id="team" class="pb-5">
    <div class="container">
      <h2 class="section-title ourTeam">OUR TEAM</h2>
      <div class="row is-flex">
       
        <!-- Team member -->
        <div class="col-md-6">
          <div class="leader-card">
            <!-- Peter Image and content -->
            <?php
              if(is_active_sidebar('img-pk')){
                  dynamic_sidebar('img-pk');
              }
            ?>
          </div>
        </div>
        <!-- ./Team member -->
        
        <!-- Team member Art -->
        <div class="col-md-6">
          <div class="leader-card">
          <?php
            if(is_active_sidebar('img-aw')){
                dynamic_sidebar('img-aw');
            }
          ?>
          </div>
        </div>
        <!-- ./Team member -->

        <!-- Team member -->
        <div class="col-md-6">
          <div class="leader-card">
          <?php
            if(is_active_sidebar('img-at')){
                dynamic_sidebar('img-at');
            }
          ?> 
          </div>
        </div>
        <!-- ./Team member -->
  
        <!-- Team member -->
        <div class="col-md-6">
          <div class="leader-card">
          <?php
            if(is_active_sidebar('img-km')){
                dynamic_sidebar('img-km');
            }
          ?>
          </div>
        </div>
        <!-- ./Team member -->

        <!-- Team member -->
        <div class="col-md-6">
          <div class="leader-card">
          <?php
            if(is_active_sidebar('img-5')){
                dynamic_sidebar('img-5');
            }
          ?>
          </div>
        </div>
        <!-- ./Team member -->

         <!-- Team member -->
        <div class="col-md-6">
          <div class="leader-card">
          <?php
            if(is_active_sidebar('img-6')){
                dynamic_sidebar('img-6');
            }
          ?>
          </div>
        </div>
        <!-- ./Team member -->

         <!-- Team member -->
          <?php
            
            if(is_active_sidebar('img-7')){
              echo"<div class='col-md-6'>";
              echo "<div class='leader-card'>";
              dynamic_sidebar('img-7');
              echo "</div>";
              echo "</div>";
            }
          ?>
        <!-- ./Team member -->

         <!-- Team member -->
          <?php
            if(is_active_sidebar('img-8')){
              echo"<div class='col-md-6'>";
              echo "<div class='leader-card'>";
              dynamic_sidebar('img-8');
              echo "</div>";
              echo "</div>";
            }
          ?>
        <!-- ./Team member -->

        <!-- Team member -->
          <?php
            if(is_active_sidebar('img-9')){
              echo"<div class='col-md-6'>";
              echo "<div class='leader-card'>";
              dynamic_sidebar('img-9');
              echo "</div>";
              echo "</div>";
            }
          ?>
        <!-- ./Team member -->

        <!-- Team member -->
          <?php
            if(is_active_sidebar('img-10')){
              echo"<div class='col-md-6'>";
              echo "<div class='leader-card'>";
              dynamic_sidebar('img-10');
              echo "</div>";
              echo "</div>";
            }
          ?>
        <!-- ./Team member -->

        <!-- Team member -->
          <?php
            if(is_active_sidebar('img-11')){
              echo"<div class='col-md-6'>";
              echo "<div class='leader-card'>";
              dynamic_sidebar('img-11');
              echo "</div>";
              echo "</div>";
            }
          ?>
        <!-- ./Team member -->

        <!-- Team member -->
          <?php
            if(is_active_sidebar('img-12')){
              echo"<div class='col-md-6'>";
              echo "<div class='leader-card'>";
              dynamic_sidebar('img-12');
              echo "</div>";
              echo "</div>";
            }
          ?>
        <!-- ./Team member -->

        <!-- Team member -->
          <?php
            if(is_active_sidebar('img-13')){
              echo"<div class='col-md-6'>";
              echo "<div class='leader-card'>";
              dynamic_sidebar('img-13');
              echo "</div>";
              echo "</div>";
            }
          ?>
        <!-- ./Team member -->

        <!-- Team member -->
          <?php
            if(is_active_sidebar('img-14')){
              echo"<div class='col-md-6'>";
              echo "<div class='leader-card'>";
              dynamic_sidebar('img-14');
              echo "</div>";
              echo "</div>";
            }
          ?>
        <!-- ./Team member -->

      </div>
    </div>
  </section>
  <!-- Team -->
    

        
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>