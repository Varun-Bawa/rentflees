<!--Import JQuery version 1.4.3 for the Adding input field for rules-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

<?php $__env->startSection('content'); ?>
    <h1 align="center">Upload House Details</h1>
    <hr>
    <div class="container" style="width: 80%;">
    <?php echo Form::open(['url' => 'flees', 'files'=>true]); ?>


        <div class="form-group">
            <?php echo Form::Label('title' , 'Title:'); ?>

            <?php echo Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title to be displayed to user (2 BHK Furnished etc.)']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::Label('address' , 'Address:'); ?>

            <?php echo Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Complete Address along with city, state- zip code']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::Label('rent' , 'Rent:'); ?>

            <?php echo Form::text('rent', null, ['class' => 'form-control', 'placeholder' => 'Month Rental Amount']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::Label('security' , 'Security Amount:'); ?>

            <?php echo Form::text('security', null, ['class' => 'form-control', 'placeholder' => 'Security Deposit Amount']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::Label('type' , 'Rental Type:'); ?>

            <div style="padding-left: 3%;">
                <?php echo Form::select('type', array('sharing' => 'Sharing', 'individual' => 'Individual')); ?>

            </div>
        </div>

        <div class="form-group">
            <?php echo Form::Label('category' , 'Property Category:'); ?>

            <div style="padding-left: 3%;">
                <?php echo Form::select('category', array('cocoon' => 'Cocoon', 'flat' => 'Flat', 'house' => 'House', 'pg' => 'P.G.')); ?>

            </div>
        </div>
        <div class="form-group">
            <?php echo Form::Label('description' , 'Description:'); ?>

            <?php echo Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Describe whatever you want to, things you feel we missed out!']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::Label('food_services' , 'Food Facilities:'); ?><br>
            <div style="padding-left: 3%;">
                <?php echo Form::checkbox('food_services[]', 'Breakfast'); ?> Breakfast<br>
                <?php echo Form::checkbox('food_services[]', 'Lunch'); ?> Lunch<br>
                <?php echo Form::checkbox('food_services[]', 'Dinner'); ?> Dinner<br>
            </div>
        </div>

        <div class="form-group">
            <?php echo Form::Label('rules' , 'Rules:'); ?><br>
            <div id="p_scents" class="form-group">
                <p>
                    Rule 01: <label for="p_scnts"><input class="form-control" type="text" size="70" id="p_scnt" name="rules[]" value="" placeholder="Input Rules" /></label>
                </p>
            </div>
            <a class="btn btn-primary" href="#" id="addScnt">Add Another Rule</a>
        </div>

        <div class="form-group">
            <?php echo Form::Label('amenities' , 'Amenities:'); ?>

            <div style="padding-left: 3%;">
                <?php echo Form::checkbox('amenities[]', 'Lift'); ?> Lift<br>
                <?php echo Form::checkbox('amenities[]', 'Gym'); ?> Gym<br>
                <?php echo Form::checkbox('amenities[]', 'Power Backup'); ?> Power Backup<br>
                <?php echo Form::checkbox('amenities[]', '24/7 Water Supply'); ?> 24/7 Water Supply<br>
                <?php echo Form::checkbox('amenities[]', 'CCVT'); ?> CCVT<br>
                <?php echo Form::checkbox('amenities[]', 'Refrigerator'); ?> Refrigerator<br>
                <?php echo Form::checkbox('amenities[]', 'Microwave'); ?> Microwave<br>
                <?php echo Form::checkbox('amenities[]', 'TV'); ?> TV<br>
                <?php echo Form::checkbox('amenities[]', 'Geyser'); ?> Geyser<br>
                <?php echo Form::checkbox('amenities[]', 'Washing Machine'); ?> Washing Machine<br>
                <?php echo Form::checkbox('amenities[]', 'Water Purifier'); ?> Water Purifier<br>
                <?php echo Form::checkbox('amenities[]', 'Laundry'); ?> Laundry<br>
                <?php echo Form::checkbox('amenities[]', 'Cooking Available'); ?> Cooking Available<br>
                <?php echo Form::checkbox('amenities[]', 'House Keeping'); ?> House Keeping<br>
                <?php echo Form::checkbox('amenities[]', 'Parking(2 Wheeler)'); ?> Parking (2 Wheeler)<br>
                <?php echo Form::checkbox('amenities[]', 'Parking(4 Wheeler)'); ?> Parking (4 Wheeler)<br>
            </div>
        </div>

        <div class="form-group">
            <?php echo Form::Label('email_owner' , 'Your Email:'); ?>

            <?php echo Form::text('email_owner', null, ['class' => 'form-control', 'placeholder' => 'If already registered with us, then use that one only']); ?>

        </div>
        <div class="form-group">
        </div>
        <div class="form-group" style="text-align: center;">
            <hr>
            <?php echo Form::submit('submit', ['class' => 'btn btn-primary form-control', 'style' => 'width: 60%;', 'value' => 'Upload your Property']); ?>

            <hr>
        </div>
    <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Hello world!!
<?php $__env->stopSection(); ?>


<script>
//This Script is used to add more fields for the rules attribute
$(function() {
    var scntDiv = $('#p_scents');
    var i = $('#p_scents p').size() + 1;

    $('#addScnt').live('click', function() {
        if( i > 9)
            $('<p id="para_rule_'+i+'">Rule '+i+': <label for="p_scnts" value="Rule ' + i +': "><input class="form-control" type="text" id="p_scnt" size="70" name="rules[]" value="" placeholder="Input Value" /></label> <a class="btn btn-danger" href="#" id="remScnt">Remove</a></p>').appendTo(scntDiv);
        else
            $('<p id="para_rule_'+i+'">Rule 0'+i+': <label for="p_scnts" value="Rule ' + i +': "><input class="form-control" type="text" id="p_scnt" size="70" name="rules[]" value="" placeholder="Input Value" /></label> <a class="btn btn-danger" href="#" id="remScnt">Remove</a></p>').appendTo(scntDiv);
        i++;
        return false;
    });

    $('#remScnt').live('click', function() {
        if( i > 2 ) {
            var para_rule_name = '#para_rule_'+(i-1);
            console.log(para_rule_name);
            $(para_rule_name).remove();
            i--;
        }
        return false;
    });
});
</script>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>