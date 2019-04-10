/* Define script as named function for calling it from the tes */
tabsList();

function tabsCount(){
  var $tabs = $( "#tabs li" );
  return $tabs.length;
}

var totalTabCount;
var myValue;
function tabsList(){
  $( function() {
      // Create a tabs() object
      var $tabs = $( "#tabs" ).tabs();
      $tabs.tabs({
          hide: { effect: "fade", duration: 200 }
      });
      //alert('tab started');
      //$tabs.tabs('option', 'active', 2);

      // Tab counter and nav button placement
      $('.ui-tabs-panel').each(function(i){
          totalTabCount = $('.ui-tabs-panel').length;
          var tabCount = $('.ui-tabs-panel').size() - 1;
          //alert('tabCount: ' + tabCount);

          // Next tab
          if(i != tabCount) {
              next = i+1; // +1 because select counts from 0
              $(this).append("<a href='#' class='next-tab' rel='" + next + "'>Next Page &#187;</a>");
              //alert('i: ' + i + ' next: ' + next);
          }

          // Previous tab
          if(i != 0) {
              prev = i-1; // -1 because select counts from 0
              $(this).append("<a href='#' class='prev-tab mover' rel='" + prev + "'>&#171; Prev Page</a>");
              //alert('i: ' + i + ' prev: '+  prev);
          }

      }); // end each


      // Click event for navigation
      $('.prev-tab, .next-tab').click( function() {
          $tabs.tabs('option', 'active', $(this).attr("rel"));
          console.log('going to tab (counting from 0): ' + $(this).attr("rel"));
          return false;
      } );


      $(document).ready(function(){
        // onclick function to reigger focus on input box
        // This has yo be attached to #myInput, using athe genetic 'input' won't work with triggerHandler
        $('#foo').on("click", function(){
            alert("dostuff");
            $( "#myInput" ).triggerHandler( "focus" );
        });

        // Trigger a click on button #foo on load
        $('#foo').trigger('click');
      });

      // Sequence deifning focus() event on the input box
      $( "input" ).focus(function() {
        $( "<span>Focused!</span>" ).appendTo( "#message" );
        myValue = 2+2;
        //alert(myValue);
      });


  } );
}
