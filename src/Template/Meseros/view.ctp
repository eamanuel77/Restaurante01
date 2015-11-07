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
   
   <label for="">Nombre:</label>
   <input type="text" class="large-3 medium-4 columns" value="<?= ($meseros->nombre); ?>" readonly>

   <label for="">Apellido:</label>
   <input type="text" class="large-3 medium-4 columns" value="<?= ($meseros->apellido); ?>" readonly>

   <label for="">Telefono:</label>
   <input type="text" class="large-3 medium-4 columns" value="<?= ($meseros->telefono); ?>" readonly>

   <label for="">IFE:</label>
   <input type="text" class="large-3 medium-4 columns" value="<?= ($meseros->ife); ?>" readonly>

   


    
</div>


