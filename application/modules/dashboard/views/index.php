<style>
    input.edit-btn-large {
        padding: 11px 19px;
        font-size: 17.5px;
    }
</style>
<!--<form class="form-search">
  <div class="input-append">
     <input type="text" class="span6 search-query btn-large" placeholder="Type here..." style="padding: 11px 19px;font-size: 17.5px;">
       <button type="submit" class="btn btn-large">
          <i class="icon-search"></i>
          Search
      </button>
   </div>
</form>-->

 <?php
 if($this->session->userdata('user_id')) {
 ?>

<h3>My View Board's    </h3>
<hr>

<a href="/viewboards" class="btn btn-primary icon  pull-right">Add New Viewboard</a>

<br/>
<!--<ul class="thumbnails">
   
    <li class="span5 clearfix">
        <div class="thumbnail clearfix">
            <img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span2 clearfix" style='margin-right:10px'>
            <div class="caption" class="pull-left">
                <a href="http://bootsnipp.com/" class="btn btn-primary icon  pull-right">Select</a>
                <h4>
                    <a href="#" >Luis Felipe Kaufmann</a>
                </h4>
                <small><b>RG: </b>99384877</small>
            </div>
        </div>
    </li>
    
</ul> -->

 <?php } ?>