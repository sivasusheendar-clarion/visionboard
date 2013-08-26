<style>
    input.edit-btn-large {
        padding: 11px 19px;
        font-size: 17.5px;
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
    .visionboard{
        border: 1px solid green;
        width: 1000px;
        height: 300px;
    }
</style>
<hr>
<h3>Step 2</h3>
<p>VISION BOARD</p>
<div id='vision-board' class='visionboard'>
</div>
<table class="table table-hover">
    <tr>
        <td>Mini Goals</td>
        <td>Assets</td>
        <td>Obstacles</td>
    </tr>
    <tr>
        <td class='goal'>
            <span id='1' position='1' class="items"  rel="goal">Goal 1</span>
            <span id='2' position='2' class="items"  rel="goal">Goal 2</span>
            <span id='3' position='3' class="items"  rel="goal">Goal 3</span>
            <span id='4' position='4' class="items"  rel="goal">Goal 4</span>
        </td>
        <td class='asset'>
            <span id='1' position='1'  class="items" rel="asset">Asset 1</span>
            <span id='2' position='2'  class="items" rel="asset">Asset 2</span>
            <span id='3' position='3'  class="items" rel="asset">Asset 3</span>
            <span id='4' position='4'  class="items" rel="asset">Asset 4</span>
        </td>
        <td  class='obstacle'>
            <span id='1' position='1'  class="items" rel="obstacle">Obstacle 1</span>
            <span id='2' position='2'  class="items" rel="obstacle">Obstacle 2</span>
            <span id='3' position='3'  class="items" rel="obstacle">Obstacle 3</span>
            <span id='4' position='4'  class="items" rel="obstacle">Obstacle 4</span>
        </td>
    </tr>
</table>
<div>
</div>
<script>
    
    

    
    $(function()
    {
        $.fn.liveDraggable = function (draggableItemSelector, opts) {
            // Make the function chainable per good jQuery plugin design
            return $(this).each(function(){
                    // Start the event listener for any contained draggableItemSelector items
                    $(this).on("mouseenter", draggableItemSelector, function() {
                          var $this = $(this);

                          // If the item is already draggable, don't continue
                          if($this.data("is-already-draggable") === true)
                          {
                            return;
                          }

                          // Make the item draggable
                          $this.draggable(opts);

                          // Save the fact that the item is now draggable
                          $this.data("is-already-draggable", true);
                    });
            });
        };
        
        
        $('.items').css({display: 'inline-block'});
        /*$(document).liveDraggable(".items",{
            containment: "#vision-board",
            scroll: false,
            //start: function() {  $(this).css({transform: 'rotate(268deg)'}); },
            //drag: function() {  $(this).css({transform: 'rotate(268deg)'}); },
            stop: function() {
                $(this).dblclick(function() {
                    container = $(this).attr('rel');
                    console.log('.'+container);
                    $(this).css({display: 'inline-block', position: 'relative'});
                    $('.'+container).append($(this).clone()).html();
                   // $(this).unbind('liveDraggable');
                    $(this).remove();
                });
                if ($(this).attr('rel') == 'obstacle')
                    $(this).css({transform: 'rotate(268deg)', display: 'inline-block'});
            }
        });*/
//http://stackoverflow.com/questions/4800299/jquery-draggable-droppable-remove-dropped
        $(".items").click(function(){
            $(this).css({border: '1px solid red'});
            $(this).draggable({
                containment: "#vision-board",
                scroll: false,
                //start: function() {  $(this).css({transform: 'rotate(268deg)'}); },
                //drag: function() {  $(this).css({transform: 'rotate(268deg)'}); },
                stop: function() {
                /*    $(this).dblclick(function() {
                        container = $(this).attr('rel');
                        console.log('.'+container);
                        $(this).css({display: 'inline-block', position: 'relative'});
                        $(this).css({border: '1px solid green'}); 
                        
                        console.log($(this).clone());
                        $('.'+container).append($(this).clone()).html();
                       // $(this).unbind('liveDraggable');
                        $(this).remove();
                    });*/
                    if ($(this).attr('rel') == 'obstacle')
                        $(this).css({transform: 'rotate(270deg)', display: 'inline-block'});
                }
            });
        });
    });
</script>