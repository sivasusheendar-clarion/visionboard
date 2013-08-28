<style>
    input.edit-btn-large {
        padding: 11px 19px;
        font-size: 17.5px;
    }
    .highlight {
        border: 6px solid green;
    }
    .visionboard{
        border: 1px solid green;
        width: 1000px;
        height: 500px;
    }
     .mainDivTarget{
        position:relative;
        width: 100px;
        height: 100px;
     }
    .mainTarget{
        position:absolute; 
        width:300px; 
        height:200px;
    }
    .target{
        position:absolute;
        height:20px;
        width:20px;
        background:url(/assets/image/pin.png) no-repeat top center #ffffff;
        background-size:100%;
        cursor:pointer; 
        z-index:1; 
        top:0; 
        right:0;    
    }
</style>

<hr>
<h3>Step 1</h3>

<p>START BUILDING YOUR VISION BOARD</p>

<form class="form-search">
    <ul>
        <li>
            <div class="input-append">
                <input type="text" class="span6 search-query btn-large" id='search-key' placeholder="Type Dream here..." style="padding: 11px 19px;font-size: 17.5px;">
                <button type="submit" class="btn btn-large">
                    <i class="icon-search"></i>
                    Search
                </button>
            </div>
        </li>
    </ul>
    
    <div id='images-list'  class="item"></div>
    <br><br><br><br><br><br><br><br>
    <div class="btn-toolbar">
        <div class="btn-group">
            <a href="#" class="btn btn-primary icon  pull-right" id='select-image'>SELECT</a>
        </div>
        <div class="btn-group">
            <a href="/viewboards" class="btn btn-primary icon  pull-right">SEARCH IMAGE</a>
        </div>
    </div>
    
    <br><br><br><br><br><br><br><br>
    <p>VISION BOARD</p>
    <div id='vision-board' class='visionboard'>

         
        
    </div>
    <br><br><br>
    <div class="btn-group">
            <a href="#"  id="generate" class="btn btn-primary icon  pull-right">GENERATE</a>
    </div>
    
    <div class="btn-group">
            <a href="/viewboards/step2"   class="btn btn-primary icon  pull-right">NEXT STEP >></a>
    </div>
</form>
<script>
$(function()
  {
            var dragging = false;
            var target; 
            var mainTarget;
            var rad;
            var elOfs;
            var elPos;
            
  
            $("#search-key").keyup(function(){
                        var data = {
                             search : $("#search-key").val()

                        }  ;
                        var request = $.ajax({
                                         url : '/index.php/api/image/fetch',
                                         type: 'post',
                                         data : data ,
                                         dataType: 'json',
                                         success: function (response) {
                                              if (response.data) { 
                                                  
                                                  $('#images-list').html('<ul></ul>');
                                                  console.log(response.data.length);
                                                  for(var i = 0; i < response.data.length; i++)
                                                    {   
                                                         $('#images-list ul').append('<li style="float: left;"><img width="100" height="100"  id="'+response.data[i][1]+'" src="'+response.data[i][0]+'"/></li>');
                                                    }
                                                    
                                                    $('#images-list ul li').click(function(){  
                                                           $(this).toggleClass("highlight");
                                                    });
                                                    
                                              }
                                           },
                         });
                         return false;
            });
            
            Error = {
                display:  function (code,msg,targetDiv) {
                            if(code == 200) {
                                $("#"+targetDiv).html('<div class="alert alert-success">'+msg+'</div>');   
                            } else if(code == 500) {
                                $("#"+targetDiv).html('<div class="alert alert-error">'+msg+'</div>');  
                            }
                        }
            }
             $('#select-image').click(function(){   
                    if(typeof $('#images-list ul') !=='undefined'){
                                img = $('#images-list ul li.highlight img'); 
                                for(var i = 0; i < img.length; i++)
                                {   
                                    $('#vision-board').append('<div class="mainDivTarget" id="'+i+'"><img width="100" height="100"   id="'+img[i].id+'" src="'+img[i].src+'"><div class="target">&nbsp;</div></div>');
                                }
                               // $( "#vision-board img" ).draggable();
                               $( ".mainDivTarget" ).draggable( { containment: "#vision-board", scroll: false });
                               
                               $('.target').mousedown(function() {
                                            target = $(this);
                                            mainTarget = $(this).parent();
                                            rad = mainTarget.width()/2;
                                            elOfs = mainTarget.offset();
                                            elPos = {x: elOfs.left,  y: elOfs.top };
                                            dragging = true;
                               });
                            }
                            return false;
             });
  
             $(document).mouseup(function() {
                 dragging = false;
             });
            
             $(document).mousemove(function(e) {
                  if (dragging) { 
                        var mPos = {
                              x: e.pageX-elPos.x,
                              y: e.pageY-elPos.y
                            };
                        var getAtan = Math.atan2(mPos.x-rad, mPos.y-rad);
                        var getDeg = -getAtan/(Math.PI/180) + 135;  //135 = (180deg-45deg)

                        //$('p').text(getDeg);
                        $(mainTarget).attr('trs', getDeg);
                        $(mainTarget).css({transform: 'rotate(' + getDeg + 'deg)'});
                  }
             });
             
              $('#generate').click(function(){   
                           img = $('#vision-board div.mainDivTarget'); 
                           var ar = {};
                           ar['length'] = img.length;
                           ar['data']= {};
                           for(var i = 0; i < img.length; i++)
                           {       
                                    ar['data'][i] = {};
                                    
                                    ar['data'][i]['id'] =i;
                                    
                                    /* var position = $(img[i]).position();
                                    ar['data'][i]['top'] =position.top;
                                    ar['data'][i]['left'] = position.left;
                                    ar['data'][i]['transform'] = $(img[i]).attr('trs');*/
                                    
                                    imgstyle = $(img[i]).attr('style');
                                    styles =imgstyle.split(';');
                                    $.each(styles , function(j){
                                            attri =styles[j].split(':');
                                            key = attri[0];
                                            value = attri[1];
                                            ar['data'][i][$.trim(key)] =$.trim(value);
                                    });   
                                    ar['data'][i]['src'] = $(img).find('img').attr('src');
                                     ar['data'][i]['image_id'] = $(img).find('img').attr('id');
                           }
                           console.log(ar.length);
                           console.log(ar);
                           console.log(JSON.stringify(ar));
              });
              //   var jsonData = {"length":2,"data":{"0":{"id":0,"top":134,"left":462,"src":"http://local.viewboard.com/assets/image/images1.jpg"},"1":{"id":1,"top":32,"left":300,"src":"http://local.viewboard.com/assets/image/images1.jpg"}}};
              //   var jsonData = {"length":2,"data":{"0":{"id":0,"top":698,"left":325.5,"src":"http://local.viewboard.com/assets/image/images1.jpg"},"1":{"id":1,"top":714,"left":566.5,"src":"http://local.viewboard.com/assets/image/images1.jpg"}}};
              //var jsonData = {"length":7,"data":{"0":{"id":0,"top":"58px","left":"376px","transform":"rotate(18.22deg)","":"","src":"http://local.viewboard.com/assets/image/images1.jpg"},"1":{"id":1,"top":"-51px","left":"40px","transform":"rotate(312.303deg)","":"","src":"http://local.viewboard.com/assets/image/images1.jpg"},"2":{"id":2,"top":"-151px","left":"535px","transform":"rotate(32.9681deg)","":"","src":"http://local.viewboard.com/assets/image/images1.jpg"},"3":{"id":3,"top":"-242px","left":"697px","transform":"rotate(-24.428deg)","":"","src":"http://local.viewboard.com/assets/image/images1.jpg"},"4":{"id":4,"top":"-355px","left":"207px","transform":"rotate(310.611deg)","":"","src":"http://local.viewboard.com/assets/image/images1.jpg"},"5":{"id":5,"top":"-440px","left":"871px","transform":"rotate(311.585deg)","":"","src":"http://local.viewboard.com/assets/image/images1.jpg"},"6":{"id":6,"left":"276px","top":"-409px","transform":"rotate(-41.582deg)","":"","src":"http://local.viewboard.com/assets/image/images1.jpg"}}};
              var jsonData ={"length":3,"data":{"0":{"id":0,"left":"574px","top":"272px","transform":"rotate(33.0171deg)","":"","src":"http://local.viewboard.com/assets/image/images1.jpg"},"1":{"id":1,"left":"452px","top":"-15px","transform":"rotate(26.0754deg)","":"","src":"http://local.viewboard.com/assets/image/images1.jpg"},"2":{"id":2,"left":"777px","top":"-125px","transform":"rotate(26.661deg)","":"","src":"http://local.viewboard.com/assets/image/images1.jpg"}}};
              function regenerate(){
                  
                  $.each(jsonData.data , function(j,response){
                             id =  jsonData.data[j].id;
                             t =  jsonData.data[j].top;
                             l =  jsonData.data[j].left;
                             src =  jsonData.data[j].src;
                             transform =  jsonData.data[j].transform;
                             $('#vision-board').append('<div class="mainDivTarget" id="'+id+'"><img width="100" height="100"  src="'+src+'"><div class="target">&nbsp;</div></div>');
                             $('#vision-board #'+id).attr('style','top: '+t+'; left:'+l+'; transform: '+transform+'; ');
                });
                 $( ".mainDivTarget" ).draggable( { containment: "#vision-board", scroll: false });
                 $('.target').mousedown(function() {
                                            target = $(this);
                                            mainTarget = $(this).parent();
                                            rad = mainTarget.width()/2;
                                            elOfs = mainTarget.offset();
                                            elPos = {x: elOfs.left,  y: elOfs.top };
                                            dragging = true;
                  });
              }
              regenerate();
 });
 </script>