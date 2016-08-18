
        <?php foreach($purchases as $purchase): ?>                
  
            <tr>
            	<td style="text-align: center;"><?php echo $purchase['Purchase']['amounts'];?></td>
            <td style="text-align: center;"><?php echo $purchase['Purchase']['prices'];?></td>
            <td style="text-align: center;"><?php echo $purchase['Purchase']['t_price'];?></td>
            </tr>

        <?php endforeach; ?>