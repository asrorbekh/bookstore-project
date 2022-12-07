<?php echo $this->view('layouts/header', $this->data); ?>

<script>
    aa('clickedObjectIDs', {
        userToken: string,
        index: string,
        eventName: string,
        objectIDs: array
    });

    aa('convertedObjectIDs', {
        userToken: string,
        index: string,
        eventName: string,
        objectIDs: array
    });
</script>


<?php echo $this->view('layouts/footer'); ?>
