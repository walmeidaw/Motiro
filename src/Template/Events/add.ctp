<!-- File: src/Template/Articles/index.ctp -->

<h1>Adicionar</h1>
<?php
    echo $this->Form->create();
    // Hard code the calendar for now.
    echo $this->Form->control('code');
    echo $this->Form->control('label');
    echo $this->Form->control('description');
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>
