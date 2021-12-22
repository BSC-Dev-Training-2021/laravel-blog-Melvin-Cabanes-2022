    <!DOCTYPE html>
    <html lang="en">
        @include ('/partials.header.navigation')
        <!-- Page header with logo and tagline-->
        @include ('/partials.body.index-body')
        @yield ('bodyContent')
                <!-- Pagination-->
        @include ('/partials.extra.pagination')  
            <!-- Side widgets-->
        @include ('/partials.extra.sideContent') 
        @include ('/partials.footer.footer')