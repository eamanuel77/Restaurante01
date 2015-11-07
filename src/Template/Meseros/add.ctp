<div class="row">
    <h1>Meseros</h1>
</div>


 <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?=$this->Html->link(__('Volver'), ['action' => 'index'])  ?></li>
    </ul>
</nav>

<div class="users index large-9 medium-8 columns content">
  <h1><?= ($meseros->nombre . "&nbsp" . $meseros->apellido); ?></h1>
  <h5>Alta de mesero <?= ($meseros->created) ?></h5>
  <hr>
   <?php echo $this->Form->create($meseros);?>
   
   <?php echo $this->Form->input('nombre'); ?>

   <?php echo $this->Form->input('apellido'); ?>

   <?php echo $this->Form->input('telefono'); ?>

   <?php echo $this->Form->input('ife'); ?>

   <?php echo $this->Form->button(__('Guardar Mesero')); ?>
   

   <?php echo $this->end();?>


    
</div>


