<?php
/**
 * Created by PhpStorm.
 * User: ijeoma
 * Date: 9/4/16
 * Time: 11:24 PM
 */
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Appointment Details</h4>
            </div>
            <div class="modal-body">
                <div class="appointment-area">
                    <form class="appointment-form">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <label class="control-label">Your name <span class="required">*</span>
                                </label>
                                <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label class="control-label">Your Email <span class="required">*</span>
                                </label>
                                <input type="mail" class="wp-form-control wpcf7-email" placeholder="Email address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <label class="control-label">Your Birth <span class="required">*</span>
                                </label>
                                <input type="text" class="wp-form-control wpcf7-text" placeholder="dd/mm/yy">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label class="control-label">Your Phone <span class="required">*</span>
                                </label>
                                <input type="text" class="wp-form-control wpcf7-text" placeholder="Phone No">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <label class="control-label">Appointment Date <span class="required">*</span>
                                </label>
                                <input type="text" class="wp-form-control wpcf7-text" placeholder="dd/mm/yy">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label class="control-label">Select Department <span class="required">*</span>
                                </label>
                                <select class="wp-form-control wpcf7-select">
                                    <option val="1">General Health Service</option>
                                    <option val="2">Laboratory</option>
                                    <option val="3">Pharmacy</option>
                                    <option val="4">X-ray</option>
                                    <option val="5">Maternity and Immunization</option>
                                    <option val="6">Scan</option>
                                    <option val="7">Endoscopy</option>
                                    <option val="8">Echocardiography</option>
                                    <option val="9">Dialysis</option>
                                    <option val="10">CT-Scan</option>
                                    <option val="11">Family Planning</option>
                                </select>
                            </div>
                        </div>
                        <input type="text" class="wp-form-control wpcf7-text" placeholder="Subject">
                        <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us"></textarea>
                        <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Book Appointment</span></button>
                    </form>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
