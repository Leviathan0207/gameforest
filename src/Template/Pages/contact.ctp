<?= $this->Element('Page/breadcrumbs') ?>
<section class="p-t-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <form method="post">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <b>Well done!</b> You successfully read this important alert message.
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        <small class="form-text">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <select id="subject" class="form-control select2">
                                    <option>General</option>
                                    <option>Partnership</option>
                                    <option>Report Bug</option>
                                    <option>Support</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-rounded btn-effect btn-shadow float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="p-y-0">
    <div id="map" style="height: 360px;"></div>
</section>
<!-- /main -->
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        $('.select2').select2();

        
    })
    function initMap() {
           
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 10.7959741, lng: 106.6300859},
            zoom: 17
        });

        var marker = new google.maps.Marker({
            position: {lat: 10.7959741, lng: 106.6300859},
            icon: 'http://localhost/img/polygon-pin-2.png',
            map: map
        });
    }
</script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBY6ToYYPzAjjISxPICJXu0hWEMXXu8kPE&callback=initMap"></script>