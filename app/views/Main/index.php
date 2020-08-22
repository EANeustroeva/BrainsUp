
<div id="chart"></div>



<?php if (false): ?>
<div class="accordion" id="accordion-tasks">
    <div class="row">
        <div class="col"><?php $this->getPart('inc/widgets/kb1',['id'=>'new']) ?></div>
        <div class="col"><?php $this->getPart('inc/widgets/kb1',['id'=>'emergency']) ?></div>
        <div class="col"><?php $this->getPart('inc/widgets/kb1',['id'=>'todo']) ?></div>
        <div class="col"><?php $this->getPart('inc/widgets/kb1',['id'=>'doing']) ?></div>
        <div class="col"><?php $this->getPart('inc/widgets/kb1',['id'=>'done']) ?></div>
    </div>
</div>
<style>
    .accordion .collapse {
        position: absolute;
        z-index: 1;
    }
</style>

<?php $this->getPart('inc/widgets/lk') ?>

<?php $this->getPart('inc/widgets/sber') ?>

<?php $this->getPart('inc/widgets/task') ?>

<div class="row">
    <div class="col"><?php $this->getPart('inc/widgets/filters') ?></div>
    <div class="col"><?php $this->getPart('inc/widgets/chat') ?></div>
</div>

<div class="row">
    <div class="col"><?php $this->getPart('inc/widgets/calendar') ?></div>
    <div class="col"><?php $this->getPart('inc/widgets/card2') ?></div>
</div>

<div class="row">
    <div class="col">
        <?php $this->getPart('inc/widgets/card') ?>
    </div>
    <div class="col">
        <?php $this->getPart('inc/widgets/challenge') ?>
    </div>
</div>


<?php $this->getPart('inc/widgets/role') ?>

<?php $this->getPart('inc/widgets/gant') ?>

<?php $this->getPart('inc/widgets/canban') ?>



<?php $this->getPart('inc/widgets/charts') ?>

<?php $this->getPart('inc/widgets/remain') ?>

<?php endif; ?>