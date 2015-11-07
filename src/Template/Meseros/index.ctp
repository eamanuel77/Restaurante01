<div class="row">
    <h1>Meseros</h1>
</div>


 <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<div class="users index large-9 medium-8 columns content">

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>IFE</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Creado</th>
                <th>Modificado</th>
                <th>Ver</th>
            </tr>
        </thead>
        
        <tbody>
           
           <?php foreach ($meseros as $mesero): ?>
            <tr> 
             <td><?php echo $mesero->id  ?></td>
             <td><?php echo $mesero->ife  ?></td>
             <td>
                 <?php echo $mesero->nombre  ?>
             </td>
             <td><?php echo $mesero->apellido  ?></td>
             <td><?php echo $mesero->telefono  ?></td>
             <td><?php echo $mesero->created->format('F jS, Y h:i A')  ?></td>
             <td><?php echo $mesero->modified->format('F jS, Y h:i A')  ?></td>
             <td><?php echo $this->Html->link('Ver',array ('action' => 'view',$mesero->id )) ?></td>
            </tr>
            
    <?php endforeach;  ?>            
        </tbody>
        
        
    </table>    
    
    
</div>


