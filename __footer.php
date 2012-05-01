    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $(document).on('click', '.showcase_carousel .action', function(event) {

                var arrow = $(event.target);

                // Kill default
                event.preventDefault();

                // Grab list element
                var list = arrow.parents('.showcase_carousel').find('ol');

                // Grab current active item
                var active = list.find('.active');

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

                // Switch active states on current and next list element
                active.removeClass('active');
                next.addClass('active');
            });
        });

        $(document).on('click', '.showcase_menu_item', function(event) {

            var anchor = $(event.target);
            event.preventDefault();

            if(!anchor.attr('data-key')) {
                anchor = anchor.parents('a[data-key]');
            }

            var project = anchor.attr('data-key');

            // Switch active states
            $('.showcase_menu_item').removeClass('active');
            anchor.addClass('active');

            // Empty current carousel and description
            var parent = anchor.parents('#container');
            var carousel = parent.find('.showcase_carousel');
            var description = parent.find('.panel_inner');
            carousel.html('');
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
                    carousel.html(result.find('.showcase_carousel'));

                    // Update description
                    description.html(result.find('.content_info'));
                },
                dataType: 'html'
            });
        });

    </script>
    </body>
</html>