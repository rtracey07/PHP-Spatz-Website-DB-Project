<div style="overflow:hidden;">
    <form action="rental.php" method="post">
    <div class="row">
        <div class="col-md-6">
            <div class="panel-primary">
                <div class="panel-heading">Renter Info:</div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name </label>
                                    <input type="text" class="form-control" name="Input_r_fname" id="Input_r_fname" placeholder="First Name" value="<?php echo $r_fname;?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name </label>
                                    <input type="text" class="form-control" name="Input_r_lname" id="Input_r_lname" placeholder="Last Name" value="<?php echo $r_lname;?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Renting Group</label>
                                    <input type="text" class="form-control" name="Input_r_gname" id="Input_r_gname" placeholder="Group Name" value="<?php echo $r_group;?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone #</label>
                                    <input type="text" class="form-control" name="Input_r_phone" id="Input_r_phone" placeholder="###-###-####" value="<?php echo $r_phone;?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="Input_r_email" id="Input_r_email" placeholder="example@email.com" value="<?php echo $r_email;?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel-primary">
                <div class="panel-heading">Event Info:</div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Event Name </label>
                                    <input type="text" class="form-control" name="Input_e_name" id="Input_e_name" placeholder="Event Name" value="<?php echo $e_name?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Event Type</label>
                                    <select class="form-control" name="Input_e_type" id="Input_e_type">
                                        <option value="8" >Banquet</option>
                                        <option value="2">Concert</option>
                                        <option value="6">Conference</option>
                                        <option value="3">Dance Performance</option>
                                        <option value="4">Film Screening</option>
                                        <option value="7">Lecture</option>
                                        <option value="9">Party</option>
                                        <option value="1">Rehearsal</option>
                                        <option value="5">Theatre Performance</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Event Date</label>
                                    <input type="date" min="<?php echo date('Y-m-d'); ?>"class="form-control" name="Input_e_date" id="Input_e_date" value="<?php echo $e_date;?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Event Duration</label>
                                    <input type="number" min="1" class="form-control" name="Input_e_duration" id="Input_e_duration" placeholder="Hours" value="<?php echo $e_duration;?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-2">
                <button type="submit" name="r_submit" class="btn btn-primary">Submit Form</button>
            </div>
    </form>
</div>