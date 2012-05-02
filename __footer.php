    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
    <script src="js/jquery-1.7.1.min.js"></script>
    <script>
        (function() {

            function changeToImage(carousel, index) {

                // Grab list elements
                var list_items = carousel.find('ol li');

                // Switch current and next image active classes
                list_items.removeClass('active');
                $(list_items.get(index)).addClass('active');

                // Update pips
                var pips = carousel.find('.pip_container a');
                pips.removeClass('active');
                $(pips.get(index)).addClass('active');
            }

            $(document).on('click', '.showcase_carousel .action', function(event) {

                event.preventDefault();

                // Retrieve which arrow was clicked
                var arrow = $(event.target);

                // Grab carousel parent element
                var carousel = arrow.parents('.showcase_carousel');
                var list = carousel.find('ol');

                // Grab current active item
                var active = list.find('li.active');

                // Determine next list element to show
                if(arrow.hasClass('left')) {
                    var next = active.prev();

                    if(!next.size()) {
                        next = list.find('li').last();
                    }
                }
                else {
                    var next = active.next();

                    if(!next.size()) {
                        next = list.find('li').first();
                    }
                }

                changeToImage(carousel, next.index());
            });

            $(document).on('click', '.pip_container a', function() {

                event.preventDefault();

                var pip = $(event.target);

                if(!pip.hasClass('pip')) {
                    pip = pip.parents('a.pip');
                }

                var carousel = pip.parents('.showcase_carousel');

                changeToImage(carousel, pip.index());
            });

            $(document).on('click', '.work_menu_square', function(event) {

                event.preventDefault();
                event.stopPropagation();

                var anchor = $(event.target);
                
                if(!anchor.attr('data-key')) {
                    anchor = anchor.parents('a[data-key]');
                }

                var project = anchor.attr('data-key');

                // Switch active states
                $('.work_menu_square').removeClass('active');
                anchor.addClass('active');

                // Empty current carousel and description
                var parent = anchor.parents('#container');
                var carousel = parent.find('.showcase_carousel');
                var description = parent.find('.panel_inner');

                carousel.addClass('loading');
                description.html('');

                // Fetch data
                $.ajax({
                    url: 'ajax',
                    data: {
                        'project': project
                    },
                    success: function(html) {

                        var result = $(html);

                        // Update carousel
                        var new_carousel = result.find('.showcase_carousel');
                        carousel.html(new_carousel.html());
                        carousel.get(0).className = new_carousel.get(0).className;

                        // Update description
                        description.html(result.find('.content_info'));

                        // Stop loading
                        carousel.removeClass('loading');
                    },
                    dataType: 'html'
                });
            });
        })();

    </script>
    </body>
</html>