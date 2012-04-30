    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $(document).on('click', '.showcase_carousel .arrow', function(event) {

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
    </script>
    </body>
</html>