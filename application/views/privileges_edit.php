<?php     

echo form_open(current_url()); ?>
<?php echo $custom_error; ?>
<?php echo form_hidden('status',$result->status) ?>

<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
