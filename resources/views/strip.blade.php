@extends('layouts/master')
@section('title','stripe')
@section('content')


<section class="content-area">




    <section class="online-booking-area ">
        <div class="banner-masthead  ">
            <div class="container">
                <div class="searh-area bg-transparent border-0">

                    <form action="http://192.168.1.200/waterbabies_dev/public/class-results" id="search_form"
                        method="post" accept-charset="utf-8">
                        <input type="hidden" name="csrf_swimphony" value="6e57114c4a56787c04e3f20477ca8901"> <input
                            type="hidden" id="is_postcode_filter" value="Y">
                        <input type="hidden" name="longitude" id="longitude" value="">
                        <input type="hidden" name="latitude" id="latitude" value="">
                        <div class="row small-gutter">
                            <div class="col-sm-5 col-12 mx-auto">
                                <div class="row mx-0">
                                    <div class="col-12 p-0">
                                        <h2>Find a class near me</h2>
                                        <div class="form-group mb-0 online-form-group">
                                            <label>
                                                Where would you like to swim?
                                            </label>
                                            <div class="border radius-4 overflow w-100">
                                                <input name="post_code" id="post_code" label="Postcode"
                                                    placeholder="Enter Postcode or town here" value=""
                                                    class="ui-autocomplete-input" autocomplete="off">
                                            </div>
                                            <a class="mt-2 current_location d-inline-block">
                                                <i class="fad fa-map-marker-alt"></i>
                                                Or use your location
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 p-0">
                                        <div class="form-group online-form-group mb-0 online-form-group">
                                            <label>
                                                Your childs date of birth or due date
                                            </label>
                                            <div class="date-row d-flex border radius-4 overflow">
                                                <input class="datetimepicker2" name="child_date_of_birth"
                                                    id="child_date_of_birth" placeholder="Date of birth or due date "
                                                    value="" autocomplete="off">
                                                <div class="date-icon">
                                                    <i class="fad fa-calendar-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 p-0 mt-3">
                                        <div class="form-group mb-0">
                                            <button type="button" class="btn btn-search" style="background:"
                                                id="btn-search">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-10" id="search_area_wrapper">
                                <ul id="ui-id-1" tabindex="0"
                                    class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front"
                                    style="display: none;"></ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div id="enquiry" class="modal fade" role="dialog" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    We can see from your due date
                    that your little one is due in the
                    coming months, congratulations!
                    We'd love to talk through class
                    options with you so please
                    submit an enquiry below and
                    we'll get in touch.
                </div>
                <div class="modal-footer wb-online-button-common justify-content-center border-0 pt-0">
                    <a href="http://192.168.1.200/waterbabies_dev/public/enquiry-form" class="btn btn-white">Make an
                        enquiry</a>
                    <button type="button" class="btn btn-blue" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="on-book-footer">
        <div class="container">
            <div class="row"></div>
        </div>
    </footer>
    <div class="modal  swimphony-custom-modal new-lesson-modal" id="show_tnc_pop_up_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">

    </div>

    <script>
        let online_url = base_url + 'online';
    </script>

    <script type="text/javascript">
        var superadmin_authenticated = '';
    </script>
    <script type="text/javascript">
        var baseline_authenticated = '';
    </script>
    <script type="text/javascript">
        var venue_authenticated = '';
    </script>
    <script type="text/javascript">
        var venue_authenticated_delete = '';
    </script>
    <script type="text/javascript">
        var venue_authenticated_edit = '';
    </script>
    <script type="text/javascript">
        var booking_authenticated = '';
    </script>
    <script type="text/javascript">
        var calendar_authenticated = '';
    </script>
    <script type="text/javascript">
        var timetable_authenticated = '';
    </script>
    <script type="text/javascript">
        var calendar_authenticated_exception = '';
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript"
        src="http://192.168.1.200/waterbabies_dev/public/assets/js/popper.min.js?v=1692343938"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script type="text/javascript"
        src="http://192.168.1.200/waterbabies_dev/public/assets/js/moment.min.js?v=1692343938"></script>
    <script type="text/javascript"
        src="http://192.168.1.200/waterbabies_dev/public/assets/js/bootstrap.min.js?v=1692343938"></script>
    <script type="text/javascript"
        src="http://192.168.1.200/waterbabies_dev/public/assets/js/selectric.js?v=1692343938"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.js">
    </script>
    <script type="text/javascript"
        src="http://192.168.1.200/waterbabies_dev/public/assets/js/bootstrap-tabcollapse.js?v=1692343938"></script>
    <script type="text/javascript"
        src="http://192.168.1.200/waterbabies_dev/public/assets/js/jquery.nicescroll.js?v=1692343938"></script>
    <script type="text/javascript"
        src="http://192.168.1.200/waterbabies_dev/public/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js">
    </script>
    <script type="text/javascript"
        src="http://192.168.1.200/waterbabies_dev/public/assets/plugins/custom-scroller/js/jquery.mCustomScrollbar.concat.min.js">
    </script>
    <script type="text/javascript" src="http://192.168.1.200/waterbabies_dev/public/assets/js/app.js?v=1692343938">
    </script>
    <script type="text/javascript"
        src="http://192.168.1.200/waterbabies_dev/public/assets/online/js/online.js?v=1692343938"></script>
    <script type="text/javascript"
        src="http://192.168.1.200/waterbabies_dev/public/assets/online/js/online.js?v=1692343938"></script>
    <script type="text/javascript">
        var $site_url = "http://192.168.1.200/waterbabies_dev/public/"; var post_data ="";var longitude_sess ="";var latitude_sess ="";
    </script>
    <script type="text/javascript"
        src="http://192.168.1.200/waterbabies_dev/public/assets/plugins/sweetalert/js/sweetalert.min.js"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhDtdJQa_BaVMsOkkvZ14kPMggN68W6HE&amp;v=3.exp&amp;libraries=places">
    </script>
    <script type="text/javascript"
        src="http://192.168.1.200/waterbabies_dev/public/assets/js/online/dashboard/index.js?v=1692343938"></script>

    <script type="text/javascript"
        src="http://192.168.1.200/waterbabies_dev/public/assets/js/general_online_functions.js?v=1692343938"></script>



    <script>
        $(document).ready(function () {
                let online_style_config = null;

                let cssText = "--header-bg-color: #ffffff;" +
                        "--header-font-color: #ffffff;" +
                        "--footer-bg-color: #ffffff;" +
                        "--primary-color: #195AA7;" +
                        "--footer-font-color: #ffffff;" +
                        "--profile-dropdown-color: #48a2d5;" +
                        "--confirm-btn-color: #48a2d5;" +
                        "--cart-icon-color: #48a2d5;";

                document.documentElement.style.cssText = cssText;


                $('body').on('click', '.show_tnc_pop_up', function () {
                    url = base_url + 'online/checkout/view_tnc';
                    $('#show_tnc_pop_up_modal').load(url, function (result) {
                        $('#show_tnc_pop_up_modal').modal('show');
                    });
                });
            });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</section>
@endsection