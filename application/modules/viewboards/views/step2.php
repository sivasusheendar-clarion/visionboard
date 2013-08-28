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
<h3>Step 2</h3>
<p>VISION BOARD</p>

<div id='vision-board' class='visionboard'>

</div>

<div id='Mini Goals'>
<div>Title :</div>

<div>Step 1: Break Into Mini Goals:</div>

<div>List Goal Below:</div>

<input type="text" id="goals"/>

</div>

<div class="btn-group">
    <a href="/viewboards/step3"   class="btn btn-primary icon  pull-right">NEXT STEP >></a>
</div>


<script>
    $(function()
    {
        var jsonData = {"length": 3, "data": {"0": {"id": 0, "left": "574px", "top": "272px", "transform": "rotate(33.0171deg)", "": "", "src": "http://local.viewboard.com/assets/image/images1.jpg"}, "1": {"id": 1, "left": "452px", "top": "-15px", "transform": "rotate(26.0754deg)", "": "", "src": "http://local.viewboard.com/assets/image/images1.jpg"}, "2": {"id": 2, "left": "777px", "top": "-125px", "transform": "rotate(26.661deg)", "": "", "src": "http://local.viewboard.com/assets/image/images1.jpg"}}};
        function regenerate() {

            $.each(jsonData.data, function(j, response) {
                id = jsonData.data[j].id;
                t = jsonData.data[j].top;
                l = jsonData.data[j].left;
                src = jsonData.data[j].src;
                transform = jsonData.data[j].transform;
                $('#vision-board').append('<div class="mainDivTarget" id="' + id + '"><img width="100" height="100"  src="' + src + '"><div class="target">&nbsp;</div></div>');
                $('#vision-board #' + id).attr('style', 'top: ' + t + '; left:' + l + '; transform: ' + transform + '; ');
            });
       
        }
        regenerate();
    });
</script>