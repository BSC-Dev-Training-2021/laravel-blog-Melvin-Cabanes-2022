<!DOCTYPE html>
<html lang="en">
    @include ('/partials.header.navigation')
        <!-- Page content-->
                    <!-- Post content-->
                    @yield ('/partials.body.article-body')
                    <!-- Comments section-->
                    @include ('/partials.body.article-comment')
                <!-- Side widgets-->
                    @include ('/partials.extra.sideContent')

        <!-- Footer-->
        @include ('/partials.footer.footer')