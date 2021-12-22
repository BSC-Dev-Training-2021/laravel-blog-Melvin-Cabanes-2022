<!DOCTYPE html>
<html lang="en">
    @include ('/partials.header.navigation')
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 align-self-start">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Contact Us header-->
                            @include ('/partials.body.contact-body')
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
                <!-- Side widgets-->
                @include ('/partials.extra.sideContent')

        <!-- Footer-->
        <br><br><br><br><br><br><br><br><br><br><br><br>

        @include ('/partials.footer.footer')