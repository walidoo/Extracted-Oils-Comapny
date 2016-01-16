<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/marquee.css">
    </head>

    <body>
        <div class="content">
            <div class="container">
                <div class="marquee-sibling">
                    News Feed
                </div>
                <div class="marquee">
                    <ul class="marquee-content-items">
                        <li>fdsflddlfkjsdlf  dfjdsflsdlf sdjfljsd dsfsdlfjsdfljsdfl dfljsdflsd fl</li>
                        <li>fdsflddlfkjsdlf  dfjdsflsdlf sdjfljsd dsfsdlfjsdfljsdfl dfljsdflsd fl</li>
                        <li>fdsflddlfkjsdlf  dfjdsflsdlf sdjfljsd dsfsdlfjsdfljsdfl dfljsdflsd fl</li>
                        <li>fdsflddlfkjsdlf  dfjdsflsdlf sdjfljsd dsfsdlfjsdfljsdfl dfljsdflsd fl</li>
                    </ul>
                </div>
            </div>
            <footer>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                <script type="text/javascript" src="js/marquee.js"></script>


                <script>
                    $(function() {

                        createMarquee({
                        });

                        //example of overwriting defaults: 

                        // createMarquee({
                        // 		duration:30000, 
                        // 		padding:20, 
                        // 		marquee_class:'.example-marquee', 
                        // 		container_class: '.example-container', 
                        // 		sibling_class: '.example-sibling', 
                        // 		hover: false});
                        // });
                    });

                </script>
            </footer>
        </div>
    </body>
</html>