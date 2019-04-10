/**
 *  This function queries the JSON data, process, populates the list and binds clicks to each page
 */

// Code executes perfectly without catching pagecreate event because JS is loaded at the bottom.
// However, for good measure, I prefer executing my code after the page has been created.
jQuery( "#main" ).on( "pagecreate", dataFetch )

function dataFetch() {
    // https://data.gov.ie/dataset/walk-dublin-wayfinding-data
    var dataset = "data/walk-dublin-poi-details-sample-datap20130415-1449.json";
    // Get data from a local JSON file (this could be substituted with an online REST API and some params):
    // $.getJSON( APIurl, {
    //    param1: param1,
    //    param2: param2,
    //    format: "json"
    // }).done(function...
    // A effective way of getting the params (if not hardcoded) is by taking them from a user form.
    // The submission button can be binded to an on click event that triggers the JSON query.
    $.getJSON(dataset, function (data) {
        //console.log(data);

        // Iterate through the dataset creating a <li> item per
        // Create one list element per item as a string (better performance) and add it to array items[]
        var items = [];
        $.each(data, function (idx, item) {
            items.push(
                "<li><a class='ui-btn ui-icon-location ui-btn-icon-left' href='#" + item.poiID + "'>" + item.name + " (" + item.address + ", POI #" + item.poiID + ")</small></a></li>"
            );
        });


        // Append the whole array of <li>'s in one DOM update for optimum performance
        //console.log(items.join(''));
        $(items.join('')).appendTo("#poiList");


        // Refresh listview so the list is updated and the filter works
        $("#poiList").listview('refresh');


        // Check current time and append it to footer
        var date = new Date();
        var now = date.getHours() + "H, " + date.getMinutes() + "min, " + date.getSeconds() + 's';
        $("#time").text(now);
        console.log("Data fetched on: " + now);


        // Update the total number of results in the first page
        $("#main div.ui-content small.address").text("(" + items.length + " results)");


        // Create a function to handle the display of details page for each POI
        function pageHandler(event) {
            // Capture the event and get the element (<a>) associated with that event
            let target = $(event.target);
            // Get the href of said element
            poiID = target.attr('href').replace('#', '');
            console.log('POI clicked! (poiID: ' + poiID + ')');

            // Find the right poiID in the list based on what list element is clicked
            // Probably a lookup based on Array.find() would be better but I could not get around it.
            $.each(data, function (i, thisPOI) {
                if(thisPOI.poiID == poiID) {
                    poi = thisPOI;
                }
            });
            console.log(poi);


            // Populate the #details page with info about the currently selected POI
            var details = $("#details");
            $("#details div[data-role='header'] h2").text("Details for " + poi.name);
            $("#details div.ui-content h2").text(poi.name);
            $("#details div.ui-content h4").text(poi.address + ", Phone: " + poi.contactNumber);
            $("#details div.ui-content p#desc").text(poi.description);
            $("#details div.ui-content p#map").text("Coordinates: " + poi.latitude + ', ' + poi.longitude);


            // Programmatically call the #details page using the jQuery mobile API
            $.mobile.changePage($("#details"), {transition: "slide"});
        }

        // Bind the function to the list elements
        $('li').on('click', pageHandler);
    });
}