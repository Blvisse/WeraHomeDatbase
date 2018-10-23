<br />
<form action="<?= base_url(); ?>appointment/doAppointment" method="post">
    <h2>Appointment Page</h2>
    <hr />
    <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-warning">
            <?= $this->session->flashdata('msg'); ?>
        </div>
    <?php } ?>
    <div class="form-group">
        <label for="name">Client name:</label>
        <input type="text" name="name" required class="form-control" id="name">
    </div>
    <div class="form-group">
        <label for="notes">Notes:</label>
        <input type="text" name="notes" required class="form-control" id="notes">
    </div>
    <div class="form-group">
        <label for="time">Appointment time:</label>
        <input type="time" name="time" required class="form-control" id="time">
    </div>
     <div class="form-group">
        <label for="date">Select date:</label>
        <input type="date" name="date" required class="form-control" id="date">
    </div>
    <button type="submit" class="btn btn-default">Add</button>
    <span class="float-right"><a href="<?= base_url() . 'register'; ?>" class="btn btn-primary"></a></span>
</form>