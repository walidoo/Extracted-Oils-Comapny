/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {

    $.ajax({
        url: "./lib/view_data.php",
        success: function(dataArray) {
            var dataList = $.parseJSON(dataArray);
            var maindata = "";
            var counter = 1;
            for (var i = 0; i < dataList.dataArray.length; i++) {
                maindata +=
                        '<div class="col-lg-4 col-md-4 col-sm-4">' +
                        '<div class="project_description">' +
                        '<div class="widget_title">' +
                        '<h4><span>Product Descriptions</span></h4></div>' +
                        '<p id="' + counter + '">' + dataList.dataArray[i].product_desc + '</p>' +
                        '</div>' +
                        '<div class="project_details"><div class="widget_title"><h4><span>Project Details</span></h4>' +
                        '</div>' +
                        '<ul class="details">' +
                        '<li><span id="' + counter + '">Product Name :</span>' + dataList.dataArray[i].product_name + '</li>' +
                        '<li><span id="' + counter + '">Category :</span>' + dataList.dataArray[i].category + '</li>' +
                        '<li><span id="' + counter + '">Quantity :</span>' + dataList.dataArray[i].product_quantity + '</li>' +
                        '</ul></div>' +
                        '</div>' +
                        '< div class = "col-lg-8 col-md-8 col-sm-8" >' +
                        '< div class = "porDetCarousel" >' +
                        '< div class = "carousel-content" >' +
                        '<img class = "carousel-item" src = "' + dataList.dataArray[i].product_img + '" alt = "" id="' + counter + '" />' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                counter++;
            }
            $(".productss").html(maindata);
        }
    });


    $.ajax({
        url: "./lib/show_events.php",
        success: function(dataArray) {
            var dataList = $.parseJSON(dataArray);
            var maindata = "";
            var counter = 1;
            for (var i = 0; i < dataList.dataArray.length; i++) {
                maindata +=
                        '<!--start of events-->' +
                        '<div class="col-lg-3 col-md-3 col-sm-6">' +
                        '<div class="eve-team">' +
                        '<div class="pic">' +
                        '<img src="' + dataList.dataArray[i].img + '" width="220px" height="220px" alt="profile img">' +
                        '<div class="social_media_team">' +
                        '<ul class="team_social">' +
                        ' <li><a class="youtube" href="' + dataList.dataArray[i].link + '" data-placement="top" data-toggle="tooltip" title="Youtube"><i class="fa fa-youtube"></i></a></li>' +
                        '</ul>' +
                        '</div>' +
                        '</div>' +
                        '<div class="team_prof">' +
                        '<h3 class="names">' + dataList.dataArray[i].name + '</h3>' +
                        '<p style="overflow:scroll" class="description">' + dataList.dataArray[i].details + '</p>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<!--end of events-->';
            }
            $(".events").html(maindata);
        }
    });


    $.ajax({
        url: "./lib/product_name.php",
        success: function(dataArray) {
            var dataList = $.parseJSON(dataArray);
            var maindata = "";
            for (var i = 0; i < dataList.dataArray.length; i++) {
                maindata += "<option id='product_name' value=" + dataList.dataArray[i].product_name + ">" + dataList.dataArray[i].product_name + "</option>";
            }
            $(".products_name").html(maindata);
        }
    });


    $.ajax({
    url: "./lib/view_data.php",
            success: function(dataArray) {
            var dataList = $.parseJSON(dataArray);
            var maindata = "";
            var counter = 1;
            for (var i = 0; i < dataList.dataArray.length; i++) {
                maindata +=
//                        '<div class="container">' +
//                        '< div id = "ca-container" class = "ca-container" >' +
                        '< div class = "ca-wrapper" >' +
                        '< div class = "ca-item ca-item-1>' +
                        '< div class = "ca-item-main" >' +
                        '< div class = "ca-icon" > < /div>' +
                        '< h3 > ' + dataList.dataArray[i].product_name + ' < /h3>' +
                        '< h4 >' +
                        '< span class = "ca-quote" > & ldquo; < /span>' +
                        '< span >' + dataList.dataArray[i].product_desc + '< /span>' +
                        '</h4>' +
                        '< a href = "#" class = "ca-more" > more... < /a>' +
                        '< /div>' +
                        '< div class = "ca-content-wrapper" >' +
                        '< div class = "ca-content" >' +
                        '< h6 >' + dataList.dataArray[i].product_name + '< /h6>' +
                        '< a href = "#" class = "ca-close" > close < /a>' +
                        '< div class = "ca-content-text" >' +
                        '< p > I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. < /p>' +
                        '< p > When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; < /p>' +
                        '< p > She packed her seven versalia, put her initial into the belt and made herself on the way. < /p>' +
                        '< /div>' +
                        '< ul >' +
                        '< li > < a href = "#" > Read more < /a></li >' +
                        '< li > < a href = "#" > Share this < /a></li >' +
                        '< li > < a href = "#" > Become a member < /a></li >' +
                        '< li > < a href = "#" > Donate < /a></li >' +
                        '< /ul>' +
                        '< /div>' +
                        '< /div>' +
                        '< /div>' +
//                        '< /div>' +
//                        '< /div>' +
                        '< /div>';


                counter++;
            }
                $(".product_all").html(maindata);
                }
    });
});